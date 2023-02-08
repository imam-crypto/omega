@extends('template_admin.layout')

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Create New Vehicle
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-10">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Input
                    </h2>
                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <form method="post" enctype="multipart/form-data" action="{{ route('vehicle.store') }}">
                            @csrf
                            <div>
                                <label for="regular-form-1" class="form-label">Vehicle Name</label>
                                <input id="regular-form-1" name="vehicle_name" type="text" class="form-control"
                                    placeholder="Input text">
                            </div>
                            <div>
                                <label for="regular-form-1" class="form-label">Vehicle Name</label>
                                <input id="preview-gambar" name="vehicle_image" type="file" class="form-control"
                                    placeholder="Input text"
                                    onchange="document.getElementById('gambar-load').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div>
                                <img src="{{ asset('template_user/') }}/assets/img/crv.jpg" alt="" id="gambar-load"
                                    width="400px" alt="gambar-default">
                            </div>
                            <button class="btn btn-primary mt-5" type="submit">Save</button>
                        </form>

                    </div>

                </div>
            </div>
        @endsection
        {{-- @push('after-script')
            <script src="{{ asset('template_admin/') }}/dist/js/my.js"></script>
        @endpush --}}
