@extends('layouts.backend.app')
@section('title')
    All Houses
@endsection
@section('content')
    {{-- <div class="container"> --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('partial.successMessage')

                <div class="card my-5 mx-4">
                    <div class="card-header">
                        <h3 class="card-title float-left"><strong>Your Houses ({{ $houses->count() }})</strong></h3>

                        <a href="{{ route('landlord.house.create') }}" class="btn btn-outline-warning btn-md float-right c-white">Add
                            new property <i class="fa fa-plus-circle"></i></a>
                    </div>
                    <!-- /.card-header -->
                    @if ($houses->count() > 0)
                        <div class="">
                            <div class="table-responsive">
                                <table id="dataTableId" class="table table-bordered table-striped table-background">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Area</th>
                                            <th>Rooms </th>
                                            <th>Toilets</th>
                                            <th>Rent</th>
                                            <th>Image</th>
                                            <th>ATV's</th>
                                            <th>Status</th>
                                            <th>Last Updated</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($houses as $key => $house)
                                            <tr>
                                                <td>{{ $house->name }}</td>
                                                <td>{{ $house->address }}</td>
                                                <td>{{ $house->area->name }}</td>
                                                <td>{{ $house->number_of_room }}</td>
                                                <td>{{ $house->number_of_toilet }}</td>
                                                <td>$ {{ $house->rent }}.00</td>
                                                <td><img src="{{asset('storage/featured_house/'.$house->featured_image)}}" alt="" width="70"></td>                                                
                                                <td>
                                                  @if ($house->atv_available == 1)
                                                      Available
                                                  @else
                                                      Not Available
                                                  @endif
                                              </td>
                                                <td>
                                                    @if ($house->status == 1)
                                                        Available
                                                    @else
                                                        Not Available
                                                    @endif
                                                </td>
                                                <td>{{ $house->updated_at->format('d M Y') }}</td>
                                                <td>
                                                    <a href="{{ route('landlord.house.status', $house->id) }}"
                                                        class="btn btn-outline-secondary btn-sm ">Switch Status</a>
                                                    <a href="{{ route('landlord.house.show', $house->id) }}"
                                                        class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('landlord.house.edit', $house->id) }}"
                                                        class="btn btn-outline-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                    <button class="btn btn-outline-danger btn-sm" type="button"
                                                        onclick="deleteHouse({{ $house->id }})">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>

                                                    <form id="delete-form-{{ $house->id }}"
                                                        action="{{ route('landlord.house.destroy', $house->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- /.card-body -->
                    @else
                        <h2 class="text-center text-info font-weight-bold m-3">No House Found</h2>
                    @endif

                    <div class="pagination">
                        {{ $houses->links() }}
                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>
    {{-- </div><!-- /.container --> --}}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
        function deleteHouse(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure to remove this house?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, remove it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {

                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                    )
                }
            })
        }
    </script>
@endsection
