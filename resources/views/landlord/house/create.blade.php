@extends('layouts.backend.app')
@section('title')
    Add House
@endsection
@section('content')
    {{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card my-5 mx-4">
                <div class="card-header">
                    <h3 class="card-title float-left"><strong>Add New House</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('partial.errors')
                    <form action="{{ route('landlord.house.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">Name </label>
                                    <input type="text" class="form-control" placeholder="Enter name" id="name"
                                        name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address </label>
                                    <input type="text" class="form-control" placeholder="Enter address" id="address"
                                        name="address" value="{{ old('address') }}">
                                </div>

                                <div class="form-group">
                                    <label for="area">Area </label>
                                    <select name="area_id" class="form-control" id="area_id">
                                        <option value="">select an area</option>
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}"
                                                {{ old('area_id') == $area->id ? 'selected' : '' }}>
                                                {{ $area->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="featured_image">Featured Image </label>
                                    <input type="file" class="form-control" placeholder="featured_image"
                                        id="featured_image" name="featured_image" value="{{ old('featured_image') }}">
                                </div>

                                <div class="form-group">
                                    <label for="type">Parking Option</label>
                                    <select name="parking" id="parking" class="form-control">
                                        <option value="" >Select</option>
                                        <option value="YES">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="appliances">Appliances</label>
                                    <input type="text" name="appliances" class="form-control"
                                        id="appliances">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="number_of_belcony">Dimension </label>
                                    <input type="number" class="form-control" placeholder="dimension" id="dimension"
                                        name="dimension" value="{{ old('dimension') }}">
                                </div>

                                <div class="form-group">
                                    <label for="rent">Rent </label>
                                    <input type="number" class="form-control" placeholder="rent" id="rent"
                                        name="rent" value="{{ old('rent') }}">
                                </div>

                                <div class="form-group">
                                    <label for="number_of_room">Number of Bed Room</label>
                                    <input type="number" name="number_of_room" class="form-control" id="number_of_room">
                                </div>

                                <div class="form-group">
                                    <label for="images">House Images</label>
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </div>

                                <div class="form-group">
                                    <label for="type">House Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="" >Select</option>
                                        <option value="IN_UNIT">In Unit</option>
                                        <option value="PORTION">Portion</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="images">Laundry Option</label>
                                    <select name="laundry" id="laundry" class="form-control">
                                        <option value="" >Select</option>
                                        <option value="YES">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="number_of_belcony">Allowed Adults </label>
                                    <input type="number" class="form-control" placeholder="adults" id="adults"
                                        name="adults" value="{{ old('adults') }}">
                                </div>

                                <div class="form-group">
                                    <label for="rent">Allowed Children</label>
                                    <input type="number" class="form-control" placeholder="children" id="children"
                                        name="children" value="{{ old('children') }}">
                                </div>

                                <div class="form-group">
                                    <label for="featured_image">Number of Toilets</label>
                                    <input type="number" name="number_of_toilet" class="form-control"
                                        id="number_of_toilet">
                                </div>

                                <div class="form-group">
                                    <label for="images">Cooling Option</label>
                                    <select name="cooling" id="cooling" class="form-control">
                                        <option value="" >Select</option>
                                        <option value="YES">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="community_feature">Community Features</label>
                                    <input type="text" name="community_feature" class="form-control"
                                        id="community_feature">
                                </div>
                                <div class="form-group">
                                    <label for="images">ATV Option</label>
                                    <select name="atv_available" id="atv_available" class="form-control">
                                        <option value="" >Select</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>                                
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" cols="215" rows="3"></textarea>
                            </div>

                            
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Add</button>
                            <a href="{{ URL::previous() }}" class="btn btn-danger wave-effect">Back</a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    {{-- </div><!-- /.container --> --}}
@endsection
