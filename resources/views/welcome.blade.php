@extends('layouts.frontend.app')
@section('content')
    <section class="mainBanner" style="background: transparent url(assets/images/banner/hero-banner.jpg)">
        <div class="container">
            <div class="mb_1 wow fadeInUp">
                <div class="section_head">
                    <span>Find best <strong>dream home.</strong></span>
                    <h1>Enhance the way you stay</h1>
                </div>
                <p>Sometimes features require a short description. This can be detailed descriptionSometimes
                    features require a short
                    description. This can be detailed description</p>
            </div>
        </div>
    </section>

    {{-- <div id="search">
        <div class="container-fluid">
            <div class="row justify-content-center py-4">
                <h2 class="text-center"><strong>Search a house of your choice</strong></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <div class="row justify-content-center">
                            @if (session('search'))
                                <div class="alert alert-danger mt-3" id="alert" roles="alert">
                                    {{ session('search') }}
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" name="address" placeholder="search an area" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" name="room" placeholder="room" class="form-control">
                                <select name="room" class="form-control">
                                    <option value="">rooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" name="bathroom" placeholder="bathroom" class="form-control">
                                <select name="bathroom" class="form-control">
                                    <option value="">bathroom</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" name="rent" placeholder="rent" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="s1">
        <div class="container">
            <div class="s1_0">
                <form action="{{ route('search') }}" method="GET">
                    {{-- @csrf --}}
                    <div class="row justify-content-center">
                        @if (session('search'))
                            <div class="alert alert-danger" id="alert" roles="alert">
                                {{ session('search') }}
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button> --}}
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
                                <input type="date" name="check_out" >
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

    <section class="s2 spad">
        <div class="container">
            <div class="row align-items-xxl-center">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="text_wrap">
                        <div class="section_head">
                            <h2>With 15 years of experience we are ready to help you</h2>
                            <p>By connecting patients all over the world to the best instructors, Healthycare
                                helping
                                individuals</p>
                        </div>
                        <ul class="custom_list">
                            <li>
                                <div>
                                    <h3>Choose your type</h3>
                                    <p>Sometimes features require a short description.
                                        This can be detailed description</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>See the properti directly</h3>
                                    <p>Sometimes features require a short description.
                                        This can be detailed description</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>Easy Payment</h3>
                                    <p>Sometimes features require a short description.
                                        This can be detailed description</p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('register') }}" class="theme-btn">Become a Member</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="img_wrap">
                        <img src="assets/images/about-side.jpg" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- <div id="content">

        <div class="container">
            <div class="row justify-content-center py-5">
                <h1><strong>Available Houses</strong></h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-9">

                    <div class="row">
                        @forelse ($houses as $house)
                            <div class="col-md-6">
                                <div class="card m-3 house-card">
                                    <div class="card-header">
                                        <img src="{{ asset('storage/featured_house/' . $house->featured_image) }}"
                                            width="100%" class="img-fluid" alt="Card image">
                                    </div>
                                    <div class="card-body">
                                        <p>
                                        <h4><strong><i class="fas fa-map-marker-alt"> {{ $house->area->name }}, Sylhet</i>
                                            </strong></h4>
                                        </p>

                                        <p class="grey"><a class="address"
                                                href="{{ route('house.details', $house->id) }}"><i class="fas fa-warehouse">
                                                    {{ $house->address }}</i></a> </p>
                                        <hr>
                                        <p class="grey"><i class="fas fa-bed"></i> {{ $house->number_of_room }} Bedrooms
                                            <i class="fas fa-bath float-right"> {{ $house->number_of_toilet }} Bathrooms</i>
                                        </p>
                                        <p class="grey">
                                        <h4>৳ {{ $house->rent }} BDT</i></h4>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <a href="{{ route('house.details', $house->id) }}"
                                                    class="btn btn-info">Details</a>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h2 class="m-auto py-2 text-white bg-dark p-3">House Not Available right now</h2>
                        @endforelse
                    </div>

                    <div class="panel-heading my-4" style="display:flex; justify-content:center;align-items:center;">
                        <a href="{{ route('house.all') }}" class="btn btn-dark">See All Houses</a>
                    </div>


                </div>
                <div class="col-md-3">
                    <ul class="list-group sort">
                        <li class="list-group-item bg-dark text-light sidebar-heading"><strong>Search By Range</strong>
                        </li>
                        <form action="{{ route('searchByRange') }}" method="get" class="mt-2">
                            <div class="form-group">
                                <input type="number" class="form-control" required name="digit1"
                                    placeholder="enter range (lower value)">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" required name="digit2"
                                    placeholder="enter range (upper value)">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-success btn-block">Search</button>
                            </div>
                        </form>
                    </ul>




                    <ul class="list-group sort">
                        <li class="list-group-item bg-dark text-light sidebar-heading"><strong>Sort By Price</strong></li>
                        <li class="list-group-item order"><a href="{{ route('highToLow') }}">High to low</a></li>
                        <li class="list-group-item order"><a href="{{ route('lowToHigh') }}">Low to High</a></li>
                        <li class="list-group-item order"><a href="{{ route('welcome') }}">Normal Order</a></li>
                    </ul>



                    <ul class="list-group area-show">
                        <li class="list-group-item bg-dark text-light sidebar-heading"><strong>Areas</strong></li>
                        @forelse ($areas as $area)
                            <li class="list-group-item all-areas">
                                <a href="{{ route('available.area.house', $area->id) }}"
                                    class="area-name">{{ $area->name }}
                                    <strong>({{ $area->houses->count() }})</strong></a>
                            </li>
                        @empty
                            <li class="list-group-item">Area not found</li>
                        @endforelse

                    </ul>
                </div>
            </div>

        </div>
    </div> --}}

    <section class="s3 spad">
        <div class="container">
            <div class="row align-items-center has_mb">
                <div class="col-md-9 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="section_head">
                        <h2>Popular Property Right Now</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
                            industry's standard dummy text
                            ever</p>
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
                                        src="{{ asset('storage/featured_house/' . $house->featured_image) }}"
                                        alt="" class="img-fluid" loading="lazy"></a>
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
                {{-- @forelse ($houses as $house)
                    <div class="col-md-6">
                        <div class="card m-3 house-card">
                            <div class="card-header">
                                <img src="{{ asset('storage/featured_house/' . $house->featured_image) }}" width="100%"
                                    class="img-fluid" alt="Card image">
                            </div>
                            <div class="card-body">
                                <p>
                                <h4><strong><i class="fas fa-map-marker-alt"> {{ $house->area->name }}, Sylhet</i>
                                    </strong></h4>
                                </p>

                                <p class="grey"><a class="address" href="{{ route('house.details', $house->id) }}"><i
                                            class="fas fa-warehouse">
                                            {{ $house->address }}</i></a> </p>
                                <hr>
                                <p class="grey"><i class="fas fa-bed"></i> {{ $house->number_of_room }} Bedrooms
                                    <i class="fas fa-bath float-right"> {{ $house->number_of_toilet }} Bathrooms</i>
                                </p>
                                <p class="grey">
                                <h4>৳ {{ $house->rent }} BDT</i></h4>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="{{ route('house.details', $house->id) }}"
                                            class="btn btn-info">Details</a>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2 class="m-auto py-2 text-white bg-dark p-3">House Not Available right now</h2>
                @endforelse --}}
            </div>
            {{-- <div>
                    <div class="prod_col wow fadeInLeft" data-wow-delay="0.25s">
                        <div class="prod_img">
                            <a href="house-details.php"><img src="assets/images/pop2.jpg" alt="" class="img-fluid" loading="lazy"></a>
                            <a href="" class="fav_btn"><i class="fas fa-heart"></i></a>
                            <div class="prop_tags">
                                <span>Apartment</span>
                                <span>For Rent</span>
                            </div>
                        </div>
                        <div class="prod_txt">
                            <div class="prod_pricing">$ 144.220,00 <small>per month</small></div>
                            <h3><a href="house-details.php">House of Raminten</a></h3>
                            <p>Perum MBS, No 113 Condong Catur, Sleman Yogyakarta..</p>
                            <ul>
                                <li>
                                    <i class="fas fa-bed me-2"></i>
                                    2 Bd
                                </li>
                                <li>
                                    <i class="fas fa-bath me-2"></i>
                                    1 Bd
                                </li>
                                <li>
                                    <i class="fas fa-square-full me-2"></i>
                                    726sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            {{-- <div>
                    <div class="prod_col wow fadeInLeft" data-wow-delay="0.35s">
                        <div class="prod_img">
                            <a href="house-details.php"><img src="assets/images/pop3.jpg" alt="" class="img-fluid" loading="lazy"></a>
                            <a href="" class="fav_btn"><i class="fas fa-heart"></i></a>
                            <div class="prop_tags">
                                <span>House</span>
                                <span>For Rent</span>
                            </div>
                        </div>
                        <div class="prod_txt">
                            <div class="prod_pricing">$ 144.530,00 <small>per month</small></div>
                            <h3><a href="house-details.php">House of BTPN</a></h3>
                            <p>Perum MBS, No 113 Condong Catur, Sleman Yogyakarta..</p>
                            <ul>
                                <li>
                                    <i class="fas fa-bed me-2"></i>
                                    2 Bd
                                </li>
                                <li>
                                    <i class="fas fa-bath me-2"></i>
                                    1 Bd
                                </li>
                                <li>
                                    <i class="fas fa-square-full me-2"></i>
                                    726sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            {{-- <div>
                    <div class="prod_col wow fadeInLeft" data-wow-delay="0.45s">
                        <div class="prod_img">
                            <a href="house-details.php"><img src="assets/images/pop1.jpg" alt="" class="img-fluid" loading="lazy"></a>
                            <a href="" class="fav_btn"><i class="fas fa-heart"></i></a>
                            <div class="prop_tags">
                                <span>Apartment</span>
                                <span>For Rent</span>
                            </div>
                        </div>
                        <div class="prod_txt">
                            <div class="prod_pricing">$ 220,00 <small>per month</small></div>
                            <h3><a href="house-details.php">Apartment MBS</a></h3>
                            <p>Perum MBS, No 113 Condong Catur, Sleman Yogyakarta..</p>
                            <ul>
                                <li>
                                    <i class="fas fa-bed me-2"></i>
                                    2 Bd
                                </li>
                                <li>
                                    <i class="fas fa-bath me-2"></i>
                                    1 Bd
                                </li>
                                <li>
                                    <i class="fas fa-square-full me-2"></i>
                                    726sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
        </div>
        <div class="text-center has_mt">
            <a href="{{route('house-all')}}" class="theme-btn">Explore More</a>
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
                            <h2>Why Choose us for your dream home</h2>
                        </div>
                        <p>“Our journey began with a simple idea make a simpla journey make this world more
                            function”</p>
                        <p>We collaborate with organizations that are keen transform the legal industry with tech,
                            using the legal design proceess.</p>
                        <a href="{{route('about')}}" class="theme-btn">Explore More</a>
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
                            <h2>We provide you the
                                ATV’s rentals</h2>
                        </div>
                        <p>ccusamus et iusto odio dignissimos ducimus qui blanditiis praesen tiumc cusamus et iusto
                            odio</p>
                        <a href="{{route('atv-rental')}}" class="theme-btn">View Details</a>
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
                <h2>Popular Services We provide</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
                    industry's standard dummy text
                    ever</p>
            </div>
            <div class="row gy-5">
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.15s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser1.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Beach vacations</h3>
                            <p>accusamus et iusto odio dignissimos ducimusaccusamus et iusto</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.25s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser2.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Resort getaways</h3>
                            <p>accusamus et iusto odio dignissimos ducimusaccusamus et iusto</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.35s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser3.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Boutique hotel stays</h3>
                            <p>accusamus et iusto odio dignissimos ducimusaccusamus et iusto</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.45s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser4.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Confirmed Connecting Rooms</h3>
                            <p>accusamus et iusto odio dignissimos ducimusaccusamus et iusto</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.55s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser5.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>Room upgrades</h3>
                            <p>accusamus et iusto odio dignissimos ducimusaccusamus et iusto</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.65s">
                    <a href="" class="s6_1">
                        <img src="assets/images/ser6.jpg" alt="" class="img-fluid" loading="lazy">
                        <div>
                            <h3>New hotel stays</h3>
                            <p>accusamus et iusto odio dignissimos ducimusaccusamus et iusto</p>
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
                            <h2>New members can apply for membership online.</h2>
                        </div>
                        <p>ero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum
                            deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                            similique
                            sunt in culpa qui officia
                            deserunt mollitia animi, id est laborum et dolorum fugaero eos et accusamus et iusto
                            odio
                            dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati
                            similique
                            sunt in culpa qui officia
                            deserunt mollitia animi, id est laborum et dolorum fugaero eos et accusamus et iusto
                            odio
                            dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati
                            cupiditate non provident,
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                            id
                            est laborum et dolorum fuga.</p>
                        <a href="{{route('register')}}" class="theme-btn">Join Us</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                    <img src="assets/images/join-side.jpg" alt="" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="section-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('frontend/img/why.jpg') }}" class="section-4-img img-fluid" width="500px;"
                        height="500px;">
                </div>
                <div class="col-md-5">
                    <h1 class="text-white">Why Choose Us?</h1>

                    <p class="para-1">Lorem ipsum dolor sit amet, consectetur adipisicing elitim id est laborum.dolore
                        magna alsint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laboro. </p>
                    <a href="#" style="text-decoration: none">Join Us</a>
                </div>
            </div>
        </div>
    </div> --}}



    {{-- <section id="our-story">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="story">Our Story</h1>
                    <p class="pera">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                    <p class="pera">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend/img/about-us.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section> --}}
@endsection
