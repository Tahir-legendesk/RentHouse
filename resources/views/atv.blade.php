@extends('layouts.frontend.app')
@section('content')
    <main id="main-content">
        <section class="mainBanner innerBanner">
            <div class="container">
                <div class="mb_1 wow fadeInUp">
                    <div class="section_head">
                        <span>Find best <strong>dream home.</strong></span>
                        <h1>ATV’s rentals</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="atvs_rental spad pb-0">
            <div class="container">
                <div class="section_intro">
                    <div class="section_head text-center">
                        <h2>About ATV’s Rides</h2>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                        est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                        veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                        commodi consequatur.</p>
                </div>
                <div class="row g-5">
                    @if ($atvs->count() > 0)
                        @foreach ($atvs as $atv)
                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="atv_card">
                                    <div class="atv_img">
                                        <img src="{{ asset('images/'.$atv->main_image) }}" alt="" class="img-fluid">
                                    </div>
                                    <h3>{{$atv->name}}</h3>
                                    <table>
                                        <tr>
                                            <td>RIDERS AGE</td>
                                            <td>ANYONE {{$atv->min_age}} YRs +</td>
                                        </tr>
                                        <tr>
                                            <td>ATV Experience</td>
                                            <td>{{$atv->atv_experience}}</td>
                                        </tr>
                                        <tr>
                                            <td>SINGLE PASSENGER</td>
                                            <td>{{$atv->total_passenger}}</td>
                                        </tr>
                                        <tr>
                                            <td>DAMAGE DEPOSIT</td>
                                            <td> REFUNDABLE $ {{$atv->damage_deposit}}</td>
                                        </tr>
                                    </table>
                                    <p>{{$atv->description}} </p>
                                    <h4>This ATV must be shifted.</h4>
                                    <ul>
                                        {{-- @foreach (json_decode($atv->price) as $price) --}}
                                            <li>
                                                <small>{{$atv->hour_1}} HRs</small>
                                                ${{$atv->price_1}}
                                            </li> 
                                            <li>
                                                <small>{{$atv->hour_2}} HRs</small>
                                                ${{$atv->price_2}}
                                            </li> 
                                            <li>
                                                <small>{{$atv->hour_3}} HRs</small>
                                                ${{$atv->price_3}}
                                            </li> 
                                        {{-- @endforeach --}}
                                    </ul>
                                    <p>{{$atv->sub_description}}</p>
                                    <div class="atv_rental">
                                        {{$atv->hour_4}} HR ATV RENTAL
                                        <strong>${{$atv->hour_4}}.00</strong>
                                    </div>
                                    <div class="btn_Group">
                                        <input type="number" value="1">
                                        <a href="" class="theme-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    @endif

                </div>
            </div>
            <div class="atv_features" style="background: transparent url(/assets/images/atv-bg-flip.jpg);">
                <div class="container">
                    <ul>
                        <li>Helmet Free</li>
                        <li>Goggles $5</li>
                        <li>Pants & Jersey $20</li>
                        <li>Gloves $5</li>
                        <li>Boots $20</li>
                        <li>Chest Protector $10</li>
                        <li>Full Gear Speical $40</li>
                        <li>Pants</li>
                        <li>Jersey</li>
                        <li>Gloves</li>
                        <li>Boots</li>
                        <li>Sizes are subject to availability</li>
                    </ul>
                </div>
            </div>
        </section>

    </main>
@endsection
