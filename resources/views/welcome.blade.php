@extends('layouts.frontend.app')
@section('content')
    <section class="mainBanner" style="background: transparent url(assets/images/banner/hero-banner.jpg)">
        <div class="container">
            <div class="mb_1 wow fadeInUp">
                <div class="section_head">
                    <span>Your Home <strong>Away from Home.</strong></span>
                    <h1>We Bring You the Perfect Places to Stay</h1>
                </div>
                <p>Experience a comfortable and luxurious stay on your vacation with XYZ.
                    Get access to well-maintained facilities while getting access to rental boats and ATV bikes.</p>
            </div>
        </div>
    </section>

    <section class="s1">
        <div class="container">
            <div class="s1_0">
                <form action="{{ route('search') }}" method="GET">
                    {{-- @csrf --}}
                    <div class="row justify-content-center">
                        @if (session('search'))
                            <div class="alert alert-danger" id="alert" roles="alert">
                                {{ session('search') }}
                            </div>
                        @endif
                    </div>
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="input_group">
                                <span class="icon icon-location" aria-label="Location Icon"></span>
                                <label for="">Location</label>
                                <input type="text" name="location" placeholder="Anywhere">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input_group">
                                <span class="icon icon-checkin" aria-label="Check in Icon"></span>
                                <label for="">Check in</label>
                                <input type="date" name="check_in" placeholder="Add Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input_group">
                                <span class="icon icon-checkout" aria-label="Check Out Icon"></span>
                                <label for="">Check Out</label>
                                <input type="date" name="check_out">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input_group">
                                <span class="icon icon-adults" aria-label="Adults Icon"></span>
                                <label for="">Adults</label>
                                <input type="text" name="adults" placeholder="4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input_group">
                                <span class="icon icon-children" aria-label="Children Icon"></span>
                                <label for="">Children</label>
                                <input type="text" name="children" placeholder="2">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Search">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <section class="s3 spad">
        <div class="container">
            <div class="row align-items-center has_mb">
                <div class="col-md-9 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="section_head">
                        <h2>What’s Trending Among Tourists?</h2>
                        <p>Catch a glimpse of what’s popular among tourists these days.
                            We can help in finding the perfect places and amenities to make the most of your vacation.</p>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="slick_arrows">
                        <span class="arr_l"><i class="fal fa-long-arrow-left"></i></span>
                        <span class="arr_r"><i class="fal fa-long-arrow-right"></i></span>
                    </div>
                </div>
            </div>
            <div class="s3_slider">
                @forelse ($houses as $house)
                    <div>
                        <div class="prod_col wow fadeInLeft" data-wow-delay="0.15s">
                            <div class="prod_img">
                                <a href="{{ route('house.details', $house->id) }}"><img
                                        src="{{ asset('storage/featured_house/' . $house->featured_image) }}" alt=""
                                        class="img-fluid" loading="lazy"></a>
                                <a href="" class="fav_btn"><i class="fas fa-heart"></i></a>
                                <div class="prop_tags">
                                    <span>Apartment</span>
                                    <span>For Rent</span>
                                </div>
                            </div>
                            <div class="prod_txt">
                                <div class="prod_pricing">$ {{ $house->rent }} <small>per month</small></div>
                                <h3><a href="{{ route('house.details', $house->id) }}">{{ $house->name }}</a></h3>
                                <p>{{ $house->address }}</p>
                                <ul>
                                    <li>
                                        <i class="fas fa-bed me-2"></i>
                                        {{ $house->number_of_room }} Bd
                                    </li>
                                    <li>
                                        <i class="fas fa-bath me-2"></i>
                                        {{ $house->number_of_toilet }} BT
                                    </li>
                                    <li>
                                        <i class="fas fa-square-full me-2"></i>
                                        {{ $house->dimension }} sqft
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2 class="m-auto py-2 text-white bg-dark p-3">House Not Available right now</h2>
                @endforelse

            </div>
        </div>
        <div class="text-center has_mt">
            <a href="{{ route('house-all') }}" class="theme-btn">Explore More</a>
        </div>
        </div>
    </section>

    <section class="s2 spad">
        <div class="container">
            <div class="row align-items-xxl-center">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="text_wrap">
                        <div class="section_head">
                            <h2>Helping Your Family Travel Better</h2>
                            <p>Founded in 2020, we aim to provide your family with a relaxing space to stay and reconnect on
                                vacation.
                                We connect homeowners with families on vacation to provide a safe, comfortable, and
                                convenient place to stay.
                            </p>
                            <p>
                                We aspire to grow into a globally trusted brand for weekly rentals with a unique selection
                                of homes and villas.
                                Along with rental properties, we also offer you other amenities, such as bikes and boats to
                                make your holiday more fun and thrilling.
                            </p>
                        </div>
                        <ul class="custom_list">
                            <li>
                                <div>
                                    <h3>Virtual Tour</h3>
                                    <p>We value your needs and provide virtual tours of properties to ensure they’re up to
                                        your expectations.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>Extra-Curricular Activities </h3>
                                    <p>If you wish to enjoy the sun and experience the wildlife,
                                        we can help with that! You can have fun boating, bike riding, hunting, or fishing on
                                        your stay. </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>Available 24/7/365</h3>
                                    <p>We are always available to assist you and make your stay pleasant.
                                        Give us a call whenever you need anything from us and one of our representatives
                                        will be there to help! </p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('register') }}" class="theme-btn">Become a Member</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="img_wrap">
                        <img src="assets/images/gal1.png" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s4 spad">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="img_wrap">
                        <div class="row g-3">
                            <div class="col-6">
                                <img src="assets/images/dream1.jpg" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="col-6">
                                <img src="assets/images/dream2.jpg" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="col-6">
                                <img src="assets/images/dream3.jpg" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="col-6">
                                <img src="assets/images/dream4.jpg" alt="" class="img-fluid" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="text_wrap_r">
                        <div class="section_head">
                            <h2>Why Choose Abc? Because We Care</h2>
                        </div>
                        <p>“Abc is unique in various ways.
                            We treat our clients like family and try our level best to ensure they have a memorable time on
                            their stay”</p>
                        <p>We believe in customer satisfaction and always walk the extra mile to put a smile on our clients’
                            faces.</p>
                        <a href="{{ route('about') }}" class="theme-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s5" style="background: transparent url(assets/images/atv-bg.jpg);">
        <div class="container">
            <div class="row align-items-xxl-center">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="text_wrap">
                        <div class="section_head">
                            <h2>Chase the Adventures with ABC</h2>
                        </div>
                        <p>When we say you will have the moments of your life at our resorts, we mean it.
                            With us, you also get access to other amenities,
                            such as boat and ATV bike rentals to make your trip adventurous and memorable. </p>
                        <div class="section_head">
                            <h2>Get in Touch </h2>
                        </div>
                        <div class="row has_mt">
                            <div class="col-md-6">
                                <img src="assets/images/atv-thumb1.png" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="col-md-6">
                                <img src="assets/images/atv-thumb2.png" alt="" class="img-fluid" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 wow bounceInLeft">
                    <div class="img_wrap">
                        <img src="assets/images/atv.png" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s6 spad">
        <div class="container">
            <div class="section_head has_mb text-center wow fadeInUp">
                <h2>Abc.com – A Complete Package for Memorable Vacations</h2>
            </div>
            <div class="row gy-5">
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.15s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser1.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Beach vacations</h3>
                            <p>Book a resort near your favorite beach and spend a calm and serene day out.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.25s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser2.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Five-star Resorts</h3>
                            <p>If you want luxury, we can offer five stars. The options are never-ending with Abc.com.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.35s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser3.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Boutique Hotels</h3>
                            <p>We also provide Boutique hotels if you need more space and an urban setting for your stay.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.45s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser4.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Connecting Rooms</h3>
                            <p>You can also book connecting rooms to stay connected with friends/family on your trip.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.55s">
                    <a href="" class="s6_1">
                        <img src="assets/images/rent-a-atvs.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>ATV Bikes</h3>
                            <p>We don’t just provide a place to stay, but all means of fun too. Book your ATV and cruise the
                                city.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.65s">
                    <a href="" class="s6_1">
                        <img src="assets/images/boat.jpeg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Boats</h3>
                            <p>If you are into boating, we can double the fun for you. Yes! We arrange boats as well.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="s7 spad pt-0">
        <div class="container">
            <div class="row align-items-xxl-center">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="text_wrap_l">
                        <div class="section_head">
                            <h2>Making Your Vacation Memorable</h2>
                        </div>
                        <p>At ABC, we have everything you need to plan the perfect vacation. Whether you're looking for a
                            cozy cabin in the woods or a luxurious beachfront villa, you can count on us to bring you the
                            best options.
                            We understand that your time off is precious, and we want to help you make the most of it.
                            That's why we've made it our mission to provide you with the highest quality vacation rental
                            options, backed by excellent customer service and support.
                            When you book with us, you can rest assured that you're getting the best of the best. Our team
                            of experienced experts has scoured the globe to bring you the finest selection of vacation
                            rentals, each hand-picked for its unique charm and unbeatable amenities.
                            From breathtaking views to luxurious furnishings, every spot is designed to provide you with an
                            unforgettable vacation experience. Whether you're traveling with family, friends, or a
                            significant other, we have the perfect rental to meet your needs.
                            Simply browse our selection of rentals, choose the one that's right for you, and book with
                            confidence, knowing that you're in good hands with our team.
                            So why wait? Start planning your next vacation with Abc.com today and discover the joy of
                            stress-free travel, unbeatable accommodations, and unforgettable memories that will last a
                            lifetime.

                        </p>
                        <a href="{{ route('register') }}" class="theme-btn">Join Us</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                    <img src="assets/images/gal4.png" alt="" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </section>
@endsection
