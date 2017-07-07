$(function () {
    $('.days').multiselect({
        buttonText: function(options, select) {
            if (options.length === 0) {
                return 'Dias';
            }else {
                var labels = [];
                console.log(options.value);
                options.each(function() {
                    labels.push($(this).attr("name"));
                });
                return labels.join(', ') + '';
            }
        }

    });
});

// Funcion para previsualiazr la imagen //
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgPreview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(".imgInp").change(function(){
    readURL(this);
});