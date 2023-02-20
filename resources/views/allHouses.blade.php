{{-- @extends('layouts.frontend.app') --}}

{{-- @section('title','Home') --}}

{{-- @section('content') --}}

{{-- <div id="content">
    <div class="container">
        <div class="row justify-content-center py-5">
            <h2 class="text-center"><strong>All Available Houses List</strong></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($houses as $house)
                    <div class="col-md-4">
                        <div class="card m-3">
                            <div class="card-header">
                                <img src="{{ asset('storage/featured_house/'. $house->featured_image) }}" width="100%"
                                    class="img-fluid" alt="Card image">
                            </div>
                            <div class="card-body">
                                <p>
                                    <h4><strong><i class="fas fa-map-marker-alt"> {{ $house->area->name }}, Sylhet</i>
                                        </strong></h4>
                                </p>

                                <p class="grey"><a class="address" href="{{ route('house.details', $house->id) }}"><i
                                            class="fas fa-warehouse"> {{ $house->address }}</i></a> </p>
                                <hr>
                                <p class="grey"><i class="fas fa-bed"></i> {{ $house->number_of_room }} Bedrooms <i
                                        class="fas fa-bath float-right"> {{ $house->number_of_toilet }} Bathrooms</i>
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
                {{ $houses->links() }}
            </div>
        </div>
    </div>
</div> --}}

{{-- @endsection --}}

@extends('layouts.frontend.app')
@section('content')
<main id="main-content">
    <section class="mainBanner innerBanner">
        <div class="container">
            <div class="mb_1 wow fadeInUp">
                <div class="section_head">
                    <span>Find best <strong>dream home.</strong></span>
                    <h1>For Rent Properties</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="property_listing spad">
        <div class="container">
            <div class="section_head has_mb">
                <h2>Search by category</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard dummy text ever</p>
            </div>
            <div class="filter_opts">
                <div class="select_arrow">
                    <select>
                        <option selected disabled>Locations</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                    <i class="fas fa-map-marker-plus"></i>
                </div>
                <div class="select_arrow">
                    <select>
                        <option selected disabled>Price</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                    <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="select_arrow">
                    <select>
                        <option selected disabled>Beds</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                    <i class="fas fa-bed"></i>
                </div>
                <div class="select_arrow">
                    <select>
                        <option selected disabled>Baths</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                    <i class="fas fa-bath"></i>
                </div>
                <div class="select_arrow">
                    <select>
                        <option selected disabled>sqft</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                    <i class="fas fa-square-full"></i>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.15s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.25s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.35s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.15s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.25s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.35s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.15s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.25s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.35s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.15s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.25s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.35s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.15s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.25s">
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
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prod_col wow fadeInUp" data-wow-delay="0.35s">
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
                </div>
            </div>
        </div>
    </section>

</main>

    
@endsection
{{-- @section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    function guestBooking(){
                Swal.fire({
                    title: 'To book a house, You Need To Login First as a Renter!',
                    showClass: {
                        popup: 'animated fadeInDown faster'
                    },
                    hideClass: {
                        popup: 'animated fadeOutUp faster'
                    }
                    })
            }
</script>
@endsection --}}