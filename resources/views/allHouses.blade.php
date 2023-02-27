{{-- @extends('layouts.frontend.app') --}}

{{-- @section('title', 'Home') --}}

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
        @php
            $area = App\Area::all();
        @endphp
        <section class="property_listing spad">
            <div class="container">
                <form method="get" id="filter-form">
                    <div class="section_head has_mb">
                        <h2>Search by category</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
                            industry's
                            standard dummy text ever</p>
                    </div>
                    <div class="filter_opts">
                        <div class="select_arrow">
                            <select id="area" name="area" onchange="filter()">
                                <option selected disabled>Locations</option>
                                @foreach ($area as $item)
                                    <option @if ($item->id == $request->area) selected @endif value="{{ $item->id }}">
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            <i class="fas fa-map-marker-plus"></i>
                        </div>
                        <div class="select_arrow">
                            <select name="price[]" id="price" onchange="filter()">
                                <option selected disabled>Price</option>
                                <option value="0, 1000" @if($request->price == "0, 1000") selected @endif>$0.00 to $1,000</option>
                                <option value="2000, 3000" @if($request->price == "2000, 3000") selected @endif>$2,000 to $3,000</option>
                                <option value="4000, 5000" @if($request->price == "4000, 5000") selected @endif>$4,000 to $5,000</option>
                                <option value="6000, 7000" @if($request->price == "6000, 7000") selected @endif>$6,000 to $7,000</option>
                                <option value="8000, 9000" @if($request->price == "8000, 9000") selected @endif>$8,000 to $9,000</option>
                            </select>
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <div class="select_arrow">
                            <select name="beds" id="beds" onchange="filter()">
                                <option selected disabled>Beds</option>
                                <option value="1 to 5">1 to 5</option>
                                {{-- <option value="6 to 10">Option 2</option>
                                    <option value="11 to 20">Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option> 
                                --}}
                            </select>
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="select_arrow">
                            <select name="baths" id="baths"onchange="filter()">
                                <option selected disabled>Baths</option>
                                <option value="1 to 5">1 to 5</option>
                            </select>
                            <i class="fas fa-bath"></i>
                        </div>
                        <div class="select_arrow">
                            <input type="number" onkeypress="filter()" name="sqft" id="sqft" class="form-control">
                            <i class="fas fa-square-full"></i>
                        </div>
                    </div>
                    <div class="row gy-5">
                        @foreach ($houses as $house)
                            <div class="col-sm-6 col-md-4">
                                <div class="prod_col wow fadeInUp" data-wow-delay="0.15s">
                                    <div class="prod_img">
                                        <a href="{{route('house.details',$house->id)}}">
                                            <img src="{{asset('storage/featured_house/'.$house->featured_image)}}" alt="" class="img-fluid" loading="lazy">
                                        </a>
                                        <a href="" class="fav_btn"><i class="fas fa-heart"></i></a>
                                        <div class="prop_tags">
                                            <span>Apartment</span>
                                            <span>For Rent</span>
                                        </div>
                                    </div>
                                    <div class="prod_txt">
                                        <div class="prod_pricing">
                                            $ {{$house->rent}}
                                            <small>per month</small>
                                        </div>
                                        <h3><a href="house-details.php">{{$house->name}}</a></h3>
                                        <p>{{$house->address}}</p>
                                        <ul>
                                            <li>
                                                <i class="fas fa-bed me-2"></i>
                                                {{$house->number_of_room}} Bd
                                            </li>
                                            <li>
                                                <i class="fas fa-bath me-2"></i>
                                                {{$house->number_of_toilet}} Bath
                                            </li>
                                            <li>
                                                <i class="fas fa-square-full me-2"></i>
                                                {{$house->dimension}}sqft
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
@push('custom_script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        function filter() {
            // e.preventDefault();
            var form = new FormData(document.getElementById('filter-form'));
            var area = $('#area').val();
            var price = $('#price').val();
            var beds = $('#beds').val();
            var baths = $('#baths').val();
            var sqft = $('#sqft').val();

            if (area != null || price != null || beds != null || baths != null || sqft != null) {
                // $.ajax({
                //     url: '/filterhouse',
                //     type: 'get',
                //     data:  form,
                //     cache: false,
                //     contentType: false, //must, tell jQuery not to process the data
                //     processData: false,

                //     success: function(response) {

                //         console.log(response);

                //     }
                // });
                window.location = '/all-available/houses?area=' + area + '&&price=' + price + '&&beds=' + beds +
                    '&&baths=' + baths + '&&sqft=' + sqft + '  ';
            }

        }
    </script>
@endpush
