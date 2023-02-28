@extends('layouts.frontend.app')
@section('content')
    <style>
        .main-billing h2 {
            font-size: 45px;
            margin-bottom: 50px
        }

        .main-billing {
            background: #F1F9F9;
            padding: 50px;
        }

        .billing-sec .form-floating span {
            font-size: 11px;
            font-style: italic;
        }

        .main-billing input {
            border: 1px solid #ccc;
        }

        .main-billing button {
            border: 1px solid #fe834c;
            background: #fe834c;
            width: 50%;
            padding: 1rem 0;
        }

        .plan-feat-main {
            background-color: #ddd;
            padding: 16px;
        }

        .pf-box {
            border-bottom: 1px solid #ccc;
        }

        .pf-title h5 {
            margin-bottom: 4px;
        }
    </style>
    @push('custom_script')
        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
    @endpush

    <section class="billing-sec spad">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto ">
                    <div class="main-billing">
                        <h2 class="text-center">BILLING CHECKOUT</h2>
                        <form action="/subscription-payment/{{ $id }}" 
                            method="post" role="form"
                            class="require-validation" data-cc-on-file="false"
                            data-stripe-publishable-key="pk_test_51MgDrRGrh32uccZtkyzrAYGQilbt8q4S1VVvfZRanCNhE2J8stJwul7zHZNAz8loHKVmzhDzJeOavaXZecRnupLP00XEj7C30c" id="payment-form">
                            @csrf

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h3>Checkout with Cart</h3>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating required">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Joe Johnson" name>
                                                <label for="floatingInput">Name on card</label>
                                                <span>Full Name As Displayed On Card</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating card required">
                                                <input type="text" class="form-control card-number" id="floatingInput"
                                                    placeholder="4214 **** **** ****">
                                                <label for="floatingInput">Credit card number</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-floating expiration required">
                                                <input type="number" class="form-control card-expiry-month" id="floatingInput"
                                                    placeholder="21-9">
                                                <label for="floatingInput">Expiration Month</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-floating expiration required">
                                                <input type="number" class="form-control card-expiry-year" id="floatingInput"
                                                    placeholder="2023">
                                                <label for="floatingInput">Expiration Year</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-floating cvc required">
                                                <input type="number" class="form-control card-cvc" id="floatingInput"
                                                    placeholder="333">
                                                <label for="floatingInput">CVV</label>
                                            </div>
                                        </div>
                                        <div class='form-row row error' id="error" style="display: none;">
                                            <div class='col-md-12 form-group hide'>
                                                <div class='alert-danger alert'>Please correct the errors and try
                                                    again.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">

                                            <input type="checkbox" name="paypal_payment" class="btn btn-primary">Continue
                                            With Paypal <i class="fa fa-paypal"></i>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <div class="select-plan-main">
                                        <div class="select-plan mb-3">
                                            <h3>Selected Plan</h3>
                                        </div>
                                        <div class="plan-feat-main">
                                            <div class="pf-box d-flex align-items-center justify-content-between mb-2">
                                                <div class="pf-title">
                                                    <h5>Plan</h5>
                                                    @if ($id == 1)
                                                        <span>Montly</span>
                                                    @elseif($id == 2)
                                                        <span>Yearly</span>
                                                    @elseif($id == 3)
                                                        <span>Montly</span>
                                                    @elseif($id == 4)
                                                        <span>Yearly</span>
                                                    @endif
                                                    <br>
                                                </div>
                                                <div class="pf-title">
                                                    <h6>$52</h6>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary">Continue to checkout</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('custom_script')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    document.getElementById('error').style.display = "block";
                    $('.error')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endpush
