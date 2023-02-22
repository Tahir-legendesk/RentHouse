@extends('layouts.backend.app')
@section('title')
    Add New ATV
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="card-title float-left"><strong>Add New ATV</strong></h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @include('partial.errors')
                        <form action="{{ route('admin.area.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Name: </label>
                                <input type="text" class="form-control" placeholder="Enter area name" id="name"
                                    name="name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Main Image: </label>
                                <input type="file" class="form-control" placeholder="Enter area name" id="name"
                                    name="main_image" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Min Age Range: </label>
                                <input type="number" class="form-control" placeholder="Enter area name" id="name"
                                    name="min_age" value="{{ old('name') }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="name" style="color:#14455F;">ATV Experince: </label>
                                <input type="text" class="form-control" placeholder="Enter area name" id="name"
                                    name="atv_experience" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Total Passanger Limit: </label>
                                <input type="number" class="form-control" placeholder="Enter area name" id="name"
                                    name="total_passenger" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Damage Deposite: </label>
                                <input type="number" class="form-control" placeholder="Enter area name" id="name"
                                    name="name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Description: </label>
                                <textarea type="number" class="form-control" placeholder="Enter area name" id="name" name="name"
                                    value="{{ old('name') }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name" style="color:#14455F;">Sub Description: </label>
                                <textarea type="number" class="form-control" placeholder="Enter area name" id="name" name="name"
                                    value="{{ old('name') }}"></textarea>
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
@endsection
