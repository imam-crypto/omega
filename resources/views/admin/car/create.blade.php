@extends('template_admin.layout')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Form Mobil
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <form action="">

                    <div id="input" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="regular-form-1" class="form-label">Judul Mobil</label>
                                <input id="regular-form-1" name="title" type="text" class="form-control"
                                    placeholder="Input text">
                            </div>

                            <div class="mt-3">
                                <label>Type Mobil</label>
                                <div class="mt-2">
                                    <select data-placeholder="Pilih Type Mobil" class="tom-select w-full">
                                        @foreach ($vehicle as $vh)
                                            <option> {{ $vh->vehicle_name }} </option>
                                        @endforeach
                                    </select>


                                </div>
                            </div>

                            <div class="mt-3">
                                <label>Merk Mobil</label>
                                <div class="mt-2">
                                    <select data-placeholder="Pilih Merk Mobil" class="tom-select w-full">
                                        @foreach ($merk as $item)
                                            <option> {{ $item->name_merk }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div id="editor">Deskripsi Mobil.</div>
                            </div>


                        </div>

                    </div>
            </div>

            <div class="intro-y box mt-5">

                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Dokumen Mobil
                    </h2>

                </div>
                <div id="input-groups" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="regular-form-1" class="form-label">Gambar KTP</label>
                            <input id="preview-gambar" name="merk_image" type="file" class="form-control"
                                placeholder="Input text"
                                onchange="document.getElementById('gambar-load-ktp').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div>
                            <img class="mt-3" src="{{ asset('template_user/') }}/assets/img/crv.jpg" alt=""
                                id="gambar-load-ktp" alt="gambar-default" style="height: 150px; width: 250px">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-1" class="form-label">Gambar BPKB</label>
                            <input id="preview-gambar" name="merk_image" type="file" class="form-control"
                                placeholder="Input text"
                                onchange="document.getElementById('gambar-load-bpkb').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div>
                            <img class="mt-3" src="{{ asset('template_user/') }}/assets/img/crv.jpg" alt=""
                                id="gambar-load-bpkb" alt="gambar-default" style="height: 150px; width: 250px">
                        </div>
                    </div>

                </div>
            </div>
            <!-- END: Input Groups -->

            <!-- END: Select Options -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">


                </div>
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        {{-- <div class="form-check mt-2">
                            <input id="checkbox-switch-1" class="form-check-input check-manual-book" type="checkbox"
                                onclick="myFunction()">
                            <label class="form-check-label" for="checkbox-switch-1">Manual Book</label>
                        </div>
                        <div class="manual-book-form" style="display: none" id="bookForm">
                            <label for="regular-form-1" class="form-label mt-2">Manual Book</label>
                            <input id="regular-form-1" type="file" class="form-control" placeholder="Input file"> --}}
                        {{-- </div> --}}
                        <div class="mt-1">
                            <label for="regular-form-1" class="form-label">Nomor Rangka</label>
                            <input id="regular-form-1" name="chassis_number" type="text" class="form-control"
                                placeholder="Input text">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-1" class="form-label">Nomor Mesin</label>
                            <input id="regular-form-1" name="machine_number" type="text" class="form-control"
                                placeholder="Input text">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-1" class="form-label">Nomor BPKB</label>
                            <input id="regular-form-1" name="bpkb_number" type="text" class="form-control"
                                placeholder="Input text">
                        </div>
                        <div>
                            <label for="regular-form-1" class="form-label">Gambar Mobil</label>
                            <input id="preview-gambar" name="merk_image" type="file" class="form-control"
                                placeholder="Input text"
                                onchange="document.getElementById('gambar-load-mobil').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div>
                            <img class="mt-3" src="{{ asset('template_user/') }}/assets/img/crv.jpg" alt=""
                                id="gambar-load-mobil" alt="gambar-default" style="height: 150px; width: 250px">
                        </div>
                        <button class="btn btn-primary mt-5">Simpan</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-vertical-form" class="source-preview"> <code class="html"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;vertical-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag </code> </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Form -->
        </div>
        </form>

    </div>
@endsection

@push('after-script')
    <script>
        function myFunction() {
            var checkBox = document.getElementById("checkbox-switch-1");
            var text = document.getElementById("bookForm");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
