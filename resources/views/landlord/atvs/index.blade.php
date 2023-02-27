@extends('layouts.backend.app')
@section('title')
    ATV's
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('partial.successMessage')
            <div class="card my-5 mx-4">
                <div class="card-header">
                    <h3 class="card-title float-left"><strong>All ATV's ({{ $all_atvs->count() }})</strong></h3>
                    <a href="{{ route('landlord.atv.create') }}" class="btn btn-success btn-md float-right c-white">Add new ATV's
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <!-- /.card-header -->
                @if ($all_atvs->count() > 0)
                    <div class="">
                        <div class="table-responsive">
                            <table id="dataTableId" class="table table-bordered table-striped table-background">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        {{-- <th>Added at</th> --}}
                                        <th>Image</th>
                                        <th>Total Passenger Capacity </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_atvs as $key => $all_atv)
                                        <tr>
                                            <td>{{ $all_atv->name }}</td>
                                            {{-- <td>{{ $house->created_at->toFormattedDateString() }}</td> --}}
                                            <td><img src="{{ asset('images/' . $all_atv->main_image) }}"
                                                    alt="{{ $all_atv->name }}" srcset="" style="width: 50px;"></td>
                                            <td>{{ $all_atv->total_passenger }}</td>
                                            <td>
                                                @if ($all_atv->is_active == 1)
                                                    Available
                                                @else
                                                    Not Available
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('landlord.atv.edit', $all_atv->id) }}"
                                                    class="btn btn-success m-2">Details</a>
                                                <a href="{{ route('landlord.atv.destroy', $all_atv->id) }}" class="btn btn-danger m-2" type="button" >
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div> <!-- /.card-body -->
                @else
                    <h2 class="text-center text-info font-weight-bold m-3">No ATV's Found</h2>
                @endif

                <div class="pagination">
                    {{ $all_atvs->links() }}
                </div>

            </div>
            <!-- /.card -->
        </div>
    </div>
    </div><!-- /.container -->


@endsection
