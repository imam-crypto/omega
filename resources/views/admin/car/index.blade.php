@extends('template_admin.layout')

@push('after-style')
    <link href="{{ asset('template_admin/src/js/') }}/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- BEGIN: Content -->

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Mobil
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href=" {{ route('car.create') }} " class="btn btn-primary shadow-md mr-2">Tambah Data Mobil</a>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">

        </div>
        @include('sweetalert::alert')
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="mt-5 table-report ">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Type Mobil</th>
                            <th>Merk Mobil</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($car as $item)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td> {{ $item->vehicle_id }} </td>
                                <td> <img src="{{ Storage::url($item->image) }} " alt="" height="100px"
                                        width="85px">
                                </td>
                                <td>
                                    <a href=" {{ route('merk.edit', $item->id) }} "
                                        class="btn btn-sm btn-rounded-warning"><i data-lucide="edit"></i></a>
                                    <form action=" {{ route('merk.destroy', $item->id) }} " method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-rounded-danger show_confirm"><i
                                                data-lucide="trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                </table>
            </div>
        </div>
    </div>
    <!-- END: HTML Table Data -->
    <!-- END: Content -->
@endsection

@push('after-script')
    <script src="{{ asset('template_admin/dist/') }}/js/jquery.js"></script>
    <script src="{{ asset('template_admin/src/js/') }}/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('template_admin/src/js/') }}/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var id = $(this).data("id");
            event.preventDefault();
            Swal.fire({
                    title: "Anda yakin?",
                    text: " data di hapus!",
                    icon: " warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus!",
                })
                .then((willDelete) => {
                    if (willDelete.value == true) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
