<?php

namespace App\Http\Controllers;

use App\Membership;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Stripe;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function payment_request(Request $request, $id)
    {
        if ($request->has('paypal_payment') != null) {
            $paypal = $this->paypal_payment_method($id);
            if ($paypal['rel'] == "approve") {
                $link = $paypal['href'];
                return view('paypal_view', compact('link'));
            }
        }elseif($request->has('paypal_payment') == null){

            $stripe = $this->stripe_payment_method($request->stripeToken, $id);
            if($stripe == "success"){
                if ($id == 1) {
                    $carbon = Carbon::now();
                    $expiry_data = $carbon->adddays(30);
                }
                if ($id == 2) {
                    $carbon = Carbon::now();
                    $expiry_data = $carbon->adddays(365);
                }
    
                if ($id == 3) {
                    $carbon = Carbon::now();
                    $expiry_data = $carbon->adddays(30);
                }
                if ($id == 4) {
                    $carbon = Carbon::now();
                    $expiry_data = $carbon->adddays(365);
                }
                $subscribe = new Membership;
                $subscribe->user_id = Auth::user()->id;
                $subscribe->subscription_type = $id;
                $subscribe->is_active = 1;
                $subscribe->expiry_on = $expiry_data;
                $subscribe->save();
                return redirect('/home');
            }

        } else {
            return back();
        }
    }

    public function paypal_payment_method($id)
    {

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction', $id),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "200.00",
                    ],
                ],
            ],
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $links) {
                if ($links['rel'] == "approve") {
                    return $links;
                    exit();
                }
            }
            return redirect()
                ->route('successTransaction')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('cancelTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function successTransaction(Request $request, $id)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        // dd($response);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            if ($id == 1) {
                $carbon = Carbon::now();
                $expiry_data = $carbon->adddays(30);
            }
            if ($id == 2) {
                $carbon = Carbon::now();
                $expiry_data = $carbon->adddays(365);
            }

            if ($id == 3) {
                $carbon = Carbon::now();
                $expiry_data = $carbon->adddays(30);
            }
            if ($id == 4) {
                $carbon = Carbon::now();
                $expiry_data = $carbon->adddays(365);
            }
            $subscribe = new Membership;
            $subscribe->user_id = Auth::user()->id;
            $subscribe->subscription_type = $id;
            $subscribe->is_active = 1;
            $subscribe->expiry_on = $expiry_data;
            $subscribe->save();

            return redirect()
                ->route('home')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('error')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function cancelTransaction(Request $request)
    {
        return view('cancelpayment', compact('request'));
    }


    public function stripe_payment_method($stripeToken, $id){

        // dd($stripeToken);
        Stripe\Stripe::setApiKey('sk_test_51MgDrRGrh32uccZtv5RkDcgMjR3VkO3AmdGu9Jmp6miqCLx4oYBYWnRezpRYD4PlHlZGCDsr0KgZZlwtodEByEc500IZAO9K6S');
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $stripeToken,
                "description" => "this is testing stripe payment." 
        ]);

        return 'success';

    }



}
