@extends('layouts.frontend.app')
@section('content')
    <style>
        .price-box {
            background: #F1F9F9;
            padding: 21px;
            border-radius: 10px;
            text-align: center;
        }

        .price-titile {
            border-bottom: 1px solid #480069;
            margin-bottom: 14px;
        }

        .price-content p {
            margin-bottom: 15px;
        }

        .price-content a {
            text-transform: capitalize;
        }

        .price-titile h2 {
            font-size: 40px;
            text-transform: capitalize;
        }

        ul.price-feature {
            margin: 0 0 16px;
            padding: 0;
            list-style: none;
        }

        ul.price-feature li {
            font-size: 30px;
        }
        .membership{
            text-align: center;
            margin-bottom: 20px;
            color: #fe834c;
        }
    </style>
    <section class="pricing-sec spad">
        <div class="container">
            <h1 class="membership">HEARN'S Platform Membership</h1>

            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="price-box">
                        <div class="price-titile">
                            <h2> Montly </h2>
                        </div>
                        <div class="price-content">
                            <p>Lorem ipsum dolor sit amet consectetur </p>
                            <ul class="price-feature">
                                <li>$ 200.00</li>
                            </ul>
                            <a href="/billing" class="theme-btn">Subscribe now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="price-box">
                        <div class="price-titile">
                            <h2> Yearly </h2>
                        </div>
                        <div class="price-content">
                            <p>Lorem ipsum dolor sit amet consectetur </p>
                            <ul class="price-feature">
                                <li>$ 2200.00</li>
                            </ul>
                            <a href="/billing" class="theme-btn">Subscribe now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
