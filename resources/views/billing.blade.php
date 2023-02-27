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
    <section class="billing-sec spad">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto ">
                    <div class="main-billing">
                        <h2 class="text-center">BILLING CHECKOUT</h2>
                        <div class="row">
                            <div class="col-md-8">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h3>Payment</h3>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="Joe Johnson">
                                                <label for="floatingInput">Name on card</label>
                                                <span>Full Name As Displayed On Card</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="4214 **** **** ****">
                                                <label for="floatingInput">Credit card number</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="21-9">
                                                <label for="floatingInput">Expiration Month</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="2023">
                                                <label for="floatingInput">Expiration Year</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="333">
                                                <label for="floatingInput">CVV</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Continue to checkout</button>
                                        </div>
                                    </div>
                                </form>
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
                                                <span>Standard</span>
                                            </div>
                                            <div class="pf-title">
                                                <h6>$52</h6>
                                            </div>
                                        </div>
                                        <div class="pf-box border-0">
                                            <div class="pf-title">
                                                <h5>Plan Features </h5>
                                                <span>10 courses You can download</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
