@extends('layouts.frontend.app')

@section('title', 'Home')

@section('content')
<main id="main-content">
    <section class="mainBanner innerBanner">
        <div class="container">
            <div class="mb_1 wow fadeInUp">
                <div class="section_head">
                    <span>Find best <strong>dream home.</strong></span>
                    <h1>House Details</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="prop_dets spad">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="property_imgs">
                        <div class="row g-3">
                            <div class="col-12">
                                <a href="{{ asset('storage/featured_house/' . $house->featured_image) }}" data-fancybox="prop_imgs"><img src="{{ asset('storage/featured_house/' . $house->featured_image) }}" alt="" class="img-fluid"></a>
                            </div>
                            @php
                                $count = 1;
                                $all_images = json_decode($house->images);
                                $total_images = count($all_images);
                                // dd($total_images);
                            @endphp
                            @foreach ($all_images as $item)
                                @php
                                    $count_2 = $count ++;
                                    // echo  $count_2 . "<br>" . $item;
                                @endphp 
                                @if($count_2 == 1)
                                    <div class="col-12">
                                        <a href="{{ asset('images/' . $item) }}" data-fancybox="prop_imgs"><img src="{{ asset('images/' . $item) }}" alt="" class="img-fluid"></a>
                                    </div>
                                @endif
                                @if($count_2 > 1 && $count_2 < 6)
                                    <div class="col-6">
                                        <a href="{{ asset('images/' . $item) }}" data-fancybox="prop_imgs"><img src="{{ asset('images/' . $item) }}" alt="" class="img-fluid"></a>
                                    </div>
                                @endif
                                @if($count_2 >= 5)
                                    @php
                                         $count = 1;
                                     @endphp
                                @endif 
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="text_wrap">
                        <div class="ag_card">
                            <img src="assets/images/ag1.png" alt="" class="img-fluid" loading="lazy">
                            <div>
                                <h2>Listed by property owner</h2>
                                <p>{{$house->user->name}}</p>
                                <div class="ag_contact">
                                    <i class="fas fa-phone"></i>
                                    <a href="#">{{$house->user->contact}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="prod_col">
                            <div class="prop_tags">
                                <span>Apartment</span>
                                <span>For Rent</span>
                                <span><a href="" class="fav_btn"><i class="fas fa-heart"></i></a></span>
                            </div>
                            <div class="prod_txt">
                                <div class="prod_pricing">$ {{$house->rent}} <small>per month</small></div>
                                <h3><a href="#">{{$house->name}}</a></h3>
                                <p>{{$house->address}}</p>
                                <ul>
                                    <li>
                                        <i class="fas fa-bed me-2"></i>
                                        {{$house->number_of_room}} Bd
                                    </li>
                                    <li>
                                        <i class="fas fa-bath me-2"></i>
                                        {{$house->number_of_toilet}} Bd
                                    </li>
                                    <li>
                                        <i class="fas fa-square-full me-2"></i>
                                        {{$house->dimension}} sqft
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_group">
                                <a href="" class="theme-btn">Request a tour</a>
                                
                                @guest
                                <a href="" onclick="guestBooking()" class="theme-btn">Apply Now</a>
                                {{-- <a href="" onclick="guestBooking()" class="btn btn-info">Apply for booking</a> --}}
                                @else
                                    @if (Auth::user()->role_id == 3)
                                        <button class="btn btn-info" type="button"
                                            onclick="renterBooking({{ $house->id }})">
                                            Apply for booking
                                        </button>

                                        <form id="booking-form-{{ $house->id }}" action="{{ route('booking', $house->id) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                @endguest
                            </div>
                        </div>
                        <div class="prod_dets">
                            <h3>Rental facts and features</h3>
                            <h4>Interior details</h4>
                            <ul class="col_count_2">
                                <li>
                                    Bedrooms and bathrooms
                                    <ul>
                                        <li>Bedrooms: {{$house->number_of_room}}</li>
                                        <li>Bathrooms: {{$house->number_of_toilet}}</li>
                                        <li>Full bathrooms: {{$house->number_of_toilet}}</li>
                                    </ul>
                                </li>
                                {{-- {{dd($house)}} --}}
                                <li>
                                    Cooling
                                    <ul>
                                        <li>Cooling features: {{$house->cooling}}</li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Property details</h4>
                            <ul class="col_count_2">
                                <li>
                                    Property
                                    <ul>
                                        <li>{{$house->description}}</li>
                                    </ul>
                                </li>
                                <li>
                                    Parking
                                    <ul>
                                        <li>Parking features: {{$house->parking}}</li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Construction details</h4>
                            <ul class="col_count_2">
                                <li>
                                    Type and style
                                    <ul>
                                        <li>Home type: {{$house->type}}</li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Community and Neighborhood Details</h4>
                            <ul class="col_count_2">
                                <li>
                                    Community
                                    <ul>
                                        <li>Community features: {{$house->community_feature}}</li>
                                    </ul>
                                </li>
                                <li>
                                    Location
                                    <ul>

                                        <li>Region: {{$house->area->name}}</li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Appliances</h4>
                            <ul class="col_count_2">
                                <li>
                                    <ul>
                                        <li>Appliances included: {{$house->appliances}}</li>
                                        <li>Laundry features: {{$house->laundry}}</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="map_holder">
                                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=usa+(My%20Business%20Name)&amp;t=&amp;z=5&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="form_style">
                            <h3>Select a few dates you’re available</h3>
                            <ul class="select_dates">
                                <li>
                                    <input type="checkbox" id="data1">
                                    <label for="data1">
                                        <small>Fri</small>
                                        10
                                        <small>Feb</small>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data2">
                                    <label for="data2">
                                        <small>Sat</small>
                                        11
                                        <small>Feb</small>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data3">
                                    <label for="data3">
                                        <small>Sun</small>
                                        12
                                        <small>Feb</small>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data4">
                                    <label for="data4">
                                        <small>Mon</small>
                                        13
                                        <small>Feb</small>
                                    </label>
                                </li>
                            </ul>
                            <input type="date">
                            <label for="">Your First & Last Name</label>
                            <input type="text" placeholder="Your First & Last Name">
                            <label>Phone</label>
                            <input type="text" placeholder="Phone">
                            <label>Email</label>
                            <input type="text" placeholder="Email">
                            <input type="submit" value="Submit">
                            <h3>Additional items</h3>
                            <ul class="custom_checkbox">
                                <li>
                                    <input type="checkbox" id="item-tours">
                                    <label for="item-tours">Tours</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="item-food">
                                    <label for="item-food">Food</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="item-chef">
                                    <label for="item-chef">Personal Chef</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews_sec spad">
        <div class="container">
            <div class="section_head has_mb">
                <h2>Leave a review</h2>
            </div>
            <img src="assets/images/reviews.jpg" alt="" class="img-fluid" loading="lazy">
        </div>
    </section>
</main>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3><strong>House Details</strong></h3>
                            </div>
                            <div>
                                <a class="btn btn-danger" href="{{ route('welcome') }}"> Back</a>

                                @guest
                                    <a href="" onclick="guestBooking()" class="btn btn-info">Apply for booking</a>
                                @else
                                    @if (Auth::user()->role_id == 3)
                                        <button class="btn btn-info" type="button"
                                            onclick="renterBooking({{ $house->id }})">
                                            Apply for booking
                                        </button>

                                        <form id="booking-form-{{ $house->id }}" action="{{ route('booking', $house->id) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                @endguest
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    @include('partial.successMessage')
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $house->address }}</td>
                                </tr>
                                <tr>
                                    <th>Area</th>
                                    <td>{{ $house->area->name }}</td>
                                </tr>
                                <tr>
                                    <th>Owner Name</th>
                                    <td>{{ $house->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Owners Contact</th>
                                    <td>{{ $house->contact }}</td>
                                </tr>
                                <tr>
                                    <th>Number of rooms</th>
                                    <td>{{ $house->number_of_room }}</td>
                                </tr>

                                <tr>
                                    <th>Number of toilet</th>
                                    <td>{{ $house->number_of_toilet }}</td>
                                </tr>

                                <tr>
                                    <th>Number of belcony</th>
                                    <td>{{ $house->number_of_belcony }}</td>
                                </tr>

                                <tr>
                                    <th>Rent</th>
                                    <td>{{ $house->rent }}</td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if ($house->status == 1)
                                            <span class="btn btn-success">Available</span>
                                        @else
                                            <span class="btn btn-danger">Not Available</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Share</th>
                                    <td>
                                        <div class="addthis_inline_share_toolbox"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="row gallery">
                            @foreach (json_decode($house->images) as $picture)
                                <div class="col-md-3">
                                    <a href="{{ asset('images/' . $picture) }}">
                                        <img src="{{ asset('images/' . $picture) }}" class="img-fluid m-2"
                                            style="height: 150px;width: 100%; ">
                                    </a>
                                </div>
                            @endforeach
                        </div>


                    </div>



                    <!-- /.card-body -->
                </div>
                <!-- /.card -->





            </div>
        </div>



        @if ($house->reviews->count() > 0)
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card my-5">
                        <div class="card-header bg-dark text-white">
                            <strong>Renter Reviews of this house ({{ $house->reviews->count() }})</strong>
                        </div>

                        <div class="card-body">
                            @foreach ($house->reviews as $review)
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <img class="mr-3"
                                            src="{{ $review->user->image != null ? asset('storage/profile_photo/' . $review->user->image) : asset('storage/profile_photo/default.png') }}"
                                            width="35" height="35"
                                            style="border-radius: 50%"><strong>{{ $review->user->name }}</strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-justify">
                                            {{ $review->opinion }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif



    </div> --}}
    <!-- /.container -->

@endsection



@push('custom_script')
    {{-- @section('scripts') --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        window.addEventListener('load', function() {
            baguetteBox.run('.gallery', {
                animation: 'fadeIn',
                noScrollbars: true
            });
        });

        function guestBooking() {
            Swal.fire(
                'If you want to booking this house',
                'Then you must have to login first as a renter',
            )
            event.preventDefault();
        }

        function renterBooking(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure to booking this house?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('booking-form-' + id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Not Now!',

                    )
                }
            })
        }
    </script>
    {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5fb96836345445"></script> --}}
    {{-- @endsection --}}
@endpush




{{-- @section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
@endsection --}}
