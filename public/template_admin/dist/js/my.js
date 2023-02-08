
function bacaGambar(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#gambar_load').attr('src', e.target.result)
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(".preview-gambar").change(function() {
    bacaGambar(this);
})
