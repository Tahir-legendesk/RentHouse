<?php

namespace App\Http\Controllers;

use App\Area;
use App\ATV;
use App\Booking;
use App\Contact;
use App\House;
use App\Inquiry;
use App\Subscribe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $houses = House::where('status', 1)->latest()->paginate(6);
        $areas = Area::all();
        return view('welcome', compact('houses', 'areas'));
    }



    public function subscribe(Request $request)
    {
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();
        return response()->json([
            'message' => 'success',
        ]);
    }

    public function highToLow()
    {
        $houses = House::where('status', 1)->orderBy('rent', 'DESC')->paginate(6);
        $areas = Area::all();
        return view('welcome', compact('houses', 'areas'));
    }

    public function lowToHigh()
    {
        $houses = House::where('status', 1)->orderBy('rent', 'ASC')->paginate(6);
        $areas = Area::all();
        return view('welcome', compact('houses', 'areas'));
    }

    public function details($id)
    {
        $house = House::findOrFail($id);
        return view('houseDetails', compact('house'));
    }

    public function allHouses(Request $request)
    {
        // dd($request->all());
        $str = str_replace(',', '', $request->price);
        $explode_price = explode(' ', $str);

        $beds_str = str_replace(',', '', $request->beds);
        $explode_room = explode(' ', $beds_str);

        // dd($explode_room);

        $baths_str = str_replace(',', '', $request->baths);
        $explode_baths = explode(' ', $baths_str);

        $houses = House::where('status', 1);
        // return view('allHouses', compact('houses'));
        $area = $request->area;

        if ($request->has('area') != "null" && $request->area) {

            $houses = $houses->where('area_id', $request->area);
        }

        if ($request->has('price') && $request->price != "null") {
            $houses = $houses->whereBetween('rent', [$explode_price[0], $explode_price[1]]);
        }

        if ($request->has('beds') && $request->beds != "null") {

            $houses = $houses->whereBetween('number_of_room', [$explode_room[0], $explode_room[1]]);
        }

        if ($request->has('baths') && $request->baths != "null") {

            $houses = $houses->whereBetween('number_of_toilet', [$explode_baths[0], $explode_baths[1]]);
        }

        if ($request->has('sqft') && $request->sqft != "null") {
            $houses = $houses->where('dimension', '=>', $request->sqft);
        }
        // dd($houses->get());
        $houses = $houses->get();
        return view('allHouses', get_defined_vars());
    }

    public function areaWiseShow($id)
    {
        $area = Area::findOrFail($id);
        $houses = House::where('area_id', $id)->get();
        return view('areaWiseShow', compact('houses', 'area'));
    }

    public function search(Request $request)
    {
        $area = $request->location;
        $check_in = $request->check_in;
        $check_out = $request->check_out;
        $adults = $request->adults;
        $children = $request->children;

        $houses = House::where('status', 1);
        if ($area == null && $check_in == null && $check_out == null && $adults == null && $children == null) {
            session()->flash('search', 'You have to fill up minimum one field for search');
            return redirect()->back();
        }

        if ($request->location != null) {
            $houses = $houses->whereHas('area', function ($q) use ($area) {
                $q->where('name', 'LIKE', "%$area%");
            });
        }

        if ($request->check_in != null) {
            $houses = $houses->whereDate('check_in', '>=', $check_in);
        }

        if ($request->check_out != null) {
            $houses = $houses->whereDate('check_out', '<=', $check_out);
        }

        if ($request->adults != null) {
            $houses = $houses->where('adults', '>=', $adults);
        }

        if ($request->children != null) {
            $houses = $houses->where('children', '>=', $children);
        }

        $houses = $houses->get();
        return view('welcome', get_defined_vars());
    }

    public function searchByRange(Request $request)
    {
        $digit1 = $request->digit1;
        $digit2 = $request->digit2;
        if ($digit1 > $digit2) {
            $temp = $digit1;
            $digit1 = $digit2;
            $digit2 = $temp;
        }
        $houses = House::whereBetween('rent', [$digit1, $digit2])
            ->orderBy('rent', 'ASC')->get();
        return view('searchByRange', compact('houses'));
    }

    public function booking($house)
    {

        // if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
        //     session()->flash('danger', 'Sorry admin and landlord are not able to book any houses. Please login with renter account');
        //     return redirect()->back();
        // }

        $house = House::findOrFail($house);
        $landlord = User::where('id', $house->user_id)->first();

        if (Booking::where('address', $house->address)->where('booking_status', "booked")->count() > 0) {
            session()->flash('danger', 'This house has already been booked!');
            return redirect()->back();
        }

        if (Booking::where('address', $house->address)->where('renter_id', Auth::id())->where('booking_status', "requested")->count() > 0) {
            session()->flash('danger', 'Your have already sent booking request of this home');
            return redirect()->back();
        }

        //find current date month year
        // $now = Carbon::now();
        // $now = $now->format('F d, Y');

        $booking = new Booking();
        $booking->address = $house->address;
        $booking->rent = $house->rent;
        $booking->landlord_id = $landlord->id;
        $booking->renter_id = Auth::id();
        $booking->save();

        session()->flash('success', 'House Booking Request Send Successfully');
        return redirect()->back();

    }

    public function about()
    {
        return view('about');
    }

    public function atvRental($id)    
    {
        $atvs = ATV::where('is_active', 1)->where('house_id',$id)->get();
        // dd($atvs);
        return view('atv', get_defined_vars());
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function contactUs(Request $request)
    {

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('message', 'Thanks for contacting us. we\'ll reach you as soon as possible.');
    }

 

    public function inquiry(Request $request)
    {
        // dd($request->all());
        $checkInquiry = Inquiry::where('email', $request->email)->where('house_id', $request->house_id)->first();
        if ($checkInquiry) {
            session()->flash('info', 'You have already sent inquiry for this property');
        } else {
            $inquiry = new inquiry();
            $inquiry->house_id = $request->house_id;
            $inquiry->date = $request->date;
            $inquiry->name = $request->name;
            $inquiry->phone = $request->phone;
            $inquiry->email = $request->email;
            $inquiry->is_tour = $request->is_tour ? 1 : 0;
            $inquiry->is_food = $request->is_food ? 1 : 0;
            $inquiry->is_p_chef = $request->is_p_chef ? 1 : 0;
            $inquiry->save();
            session()->flash('success', 'You have successfully send inquiry for this property');
            
        }
        return redirect()->back();

    }

}
