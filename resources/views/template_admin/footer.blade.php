<!-- BEGIN: JS Assets-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('template_admin/') }}/dist/js/jquery.js"></script>
<script src="{{ asset('template_admin/') }}/dist/js/app.js"></script>
@stack('after-script')
<script>
    $(".tombol-hapus").on("click", function(e) {
        e.preventDefault();
        const href = $(this).attr("href");

        Swal.fire({
            title: "Anda yakin?",
            text: " data di hapus!",
            icon: " warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus!",
        }).then((result) => {
            if (result.value == true) {
                form.submit();
            }
        });
    });
</script>

<!-- END: JS Assets-->
</body>

</html>
