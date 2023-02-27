@extends('layouts.backend.app')
@section('title')
    Edit ATV
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="card-title float-left"><strong>Edit ATV</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @include('partial.errors')
                        <form action="{{ route('landlord.atv.update',$atv->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Name: </label>
                                <input type="text" class="form-control" placeholder="Enter area name" id="name"
                                    name="name" value="{{ $atv->name }}">
                            </div>
                            @php
                                $houses = App\House::where('status', 1)->get();
                            @endphp
                            <div class="form-group">
                                <label for="house_id" style="color: #14455F;">House: </label>
                                <select name="house_id" id="house_id" class="form-control">
                                    <option value="">Select house</option>
                                    @foreach ($houses as $house)
                                        <option value="{{ $house->id }}" @if($house->id == $atv->house_id) selected @endif>{{ $house->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="main_image" style="color:#14455F;">Main Image: </label>
                                <input type="file" class="form-control" id="main_image" name="main_image"><br>
                                <img src="{{asset('images/'.$atv->main_image.' ')}}" style="width: 50px;" alt="" srcset="">
                            </div>

                            <div class="form-group">
                                <label for="min_age" style="color:#14455F;">Min Age Range: </label>
                                <input type="number" class="form-control" placeholder="Enter Min Age Range" id="min_age"
                                    name="min_age" value="{{ $atv->min_age }}">
                            </div>

                            <div class="form-group">
                                <label for="atv_experience" style="color:#14455F;">ATV Experince: </label>
                                <input type="text" class="form-control" placeholder="Enter ATV Experince"
                                    id="atv_experience" name="atv_experience" value="{{ $atv->atv_experience }}">
                            </div>

                            <div class="form-group">
                                <label for="total_passenger" style="color:#14455F;">Total Passanger Limit: </label>
                                <input type="number" class="form-control" placeholder="Enter Total Passanger Limit"
                                    id="total_passenger" name="total_passenger" value="{{ $atv->total_passenger }}">
                            </div>

                            <div class="form-group">
                                <label for="damage_deposit" style="color:#14455F;">Damage Deposite: </label>
                                <input type="number" class="form-control" placeholder="Enter Damage Deposite"
                                    id="damage_deposit" name="damage_deposit" value="{{ $atv->damage_deposit }}">
                            </div>

                            <div class="form-group">
                                <label for="description" style="color:#14455F;">Description: </label>
                                <textarea class="form-control" id="description" name="description" value="{{ old('description') }}">{{ $atv->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="sub_description" style="color:#14455F;">Sub Description: </label>
                                <textarea type="number" class="form-control" id="sub_description" name="sub_description"
                                    value="{{ old('sub_description') }}">{{ $atv->sub_description }}</textarea>
                            </div>

                            <div class="form-group" id="field_sction">
                                <label for="sub_description" style="color:#14455F;">Add Prices: </label>
                                <div class="row">
                                    <div class="col-4">
                                        <input type="number" name="hour_1" required placeholder="Hour" id=""
                                            class="form-control" value="{{ $atv->hour_1 }}">
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="price_1" required placeholder="Price" id=""
                                            class="form-control" value="{{ $atv->price_1 }}">
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <div class="col-4">
                                        <input type="number" name="hour_2" required placeholder="Hour" id=""
                                            class="form-control" value="{{ $atv->hour_2 }}">
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="price_2" required placeholder="Price" id=""
                                            class="form-control" value="{{ $atv->hour_2 }}">
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-4">
                                        <input type="number" name="hour_3" required placeholder="Hour" id=""
                                            class="form-control" value="{{ $atv->hour_3 }}">
                                    </div>
                                    
                                    <div class="col-4">
                                        <input type="number" name="price_3" required placeholder="Price" id=""
                                            class="form-control" value="{{ $atv->price_3 }}">
                                    </div> 
                                </div><br>



                                <div class="row">
                                    <div class="col-4">
                                        <input type="number" name="hour_4" required placeholder="Hour" id=""
                                            class="form-control" value="{{ $atv->hour_4 }}">
                                    </div>

                                    <div class="col-4">
                                        <input type="number" name="price_4" required placeholder="Price" id=""
                                            class="form-control" value="{{ $atv->price_4 }}">
                                    </div>
                                </div><br>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Add</button>
                                <a href="{{ route('admin.atv.list') }}" class="btn btn-danger wave-effect">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->

    <script>
        var i = 0;

        function add_field() {
            var create_id = ++i;
            var section = '<div class="row" id="append_sec_id_' + create_id +
                '"> <div class="col-4"> <input type="number" name="hour[]" placeholder="Hour" id="" class="form-control"> </div> <div class="col-4"> <input type="number" name="hour[]" placeholder="Price" id="" class="form-control"></div><div class="col-4" > <button type="button" class="btn btn-primary" onclick="add_field()"><i class="fa fa-plus"></i></button><button type="button" class="btn btn-danger" onclick="delete_append_sec(\'append_sec_id_' +
                create_id + '\')"><i class="fa fa-trash"></i></button> </div></div></div><br>';
            $('#field_sction').append(section);
        }

        function delete_append_sec(id) {
            $('#' + id).remove();
        }
    </script>
    <script></script>
@endsection


{{-- @push('scripts')
   
@endpush --}}
