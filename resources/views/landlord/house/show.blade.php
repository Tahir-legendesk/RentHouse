@extends('layouts.backend.app')
@section('title')
    Details - {{ $house->address }}
@endsection
@section('content')
    {{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card my-5 mx-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3><strong>House Details</strong></h3>
                        </div>
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('landlord.house.index') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
                        </div>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>{{ $house->name }}</td>

                                <th>Dimensions</th>
                                <td>{{ $house->dimension }} sqft</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $house->address }}</td>

                                <th>Area</th>
                                <td>{{ $house->area->name }}</td>
                            </tr>
                            <tr>
                                <th>Adults allowed</th>
                                <td>{{ $house->adults }}</td>

                                <th>Children allowed</th>
                                <td>{{ $house->children }}</td>
                            </tr>
                            <tr>
                                <th>Number of rooms</th>
                                <td>{{ $house->number_of_room }}</td>
                                <th>Number of toilet</th>
                                <td>{{ $house->number_of_toilet }}</td>
                            </tr>
                            <tr>
                                <th>Rent</th>
                                <td>$ {{ $house->rent }}.00</td>
                                <th>Cooling</th>
                                <td>{{ $house->cooling }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $house->description }}</td>
                                <th>Parking</th>
                                <td>{{ $house->parking }}</td>
                            </tr>
                            <tr>
                                <th>Community feature</th>
                                <td>{{ $house->community_feature }}</td>
                                <th>Appliances</th>
                                <td>{{ $house->appliances }}</td>
                            </tr>
                            <tr>
                                <th>Laundry</th>
                                <td>{{ $house->laundry }}</td>
                                <th>Created at</th>
                                <td>{{ $house->created_at->format('d M Y') }}</td>
                            </tr>


                            {{-- <tr>
                                    <th>Number of belcony</th>
                                    <td>{{ $house->number_of_belcony }}</td>
                                    
                                </tr> --}}

                            <tr>
                                <th>ATV</th>
                                <td>
                                    @if ($house->atv_available == 1)
                                        <span class="btn btn-outline-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Available</span>
                                    @else
                                        <span class="btn btn-outline-danger"><i class="fa fa-times-circle" aria-hidden="true"></i> Not Available</span>
                                    @endif
                                </td>
                                <th>Availablity Status</th>
                                <td>
                                    @if ($house->status == 0)
                                        <span class="btn btn-outline-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Available</span>
                                    @else
                                        <span class="btn btn-outline-danger"><i class="fa fa-times-circle" aria-hidden="true"></i> Not Available</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="row gallery">
                        <div class="col-md-3">
                            <a href="{{ asset('storage/featured_house/' . $house->featured_image) }}">
                                <img src="{{ asset('storage/featured_house/' . $house->featured_image) }}" class="img-fluid m-2"
                                    style="height: 150px;width: 100%;">
                            </a>
                        </div>
                        @foreach (json_decode($house->images) as $picture)
                            <div class="col-md-3">
                                <a href="{{ asset('images/' . $picture) }}">
                                    <img src="{{ asset('images/' . $picture) }}" class="img-fluid m-2"
                                        style="height: 150px;width: 100%;">
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
    {{-- </div><!-- /.container --> --}}
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            baguetteBox.run('.gallery', {
                animation: 'fadeIn',
                noScrollbars: true
            });
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
@endsection
