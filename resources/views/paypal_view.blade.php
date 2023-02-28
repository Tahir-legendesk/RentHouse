@extends('layouts.frontend.app')

@section('title', 'Home')

@section('content')
<section class="billing-sec spad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto ">
                <div class="main-billing">
                    <h2 class="text-center">One More Step</h2>
                    <a href="{{$link}}">Navigate me to Paypal</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection