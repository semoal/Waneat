$(function () { 
    $('#lstStates').multiselect({ 
        buttonText: function(options, select) {
            console.log(select[0].length);
            if (options.length === 0) {
                return 'No hay seleccionados';
            }
            if (options.length === select[0].length) {
                return 'Toda la semana';
            }
            else if (options.length >= 4) {
                return options.length + ' selected';
            }
            else {
                var labels = [];
                console.log(options);
                options.each(function() {
                    labels.push($(this).val());
                });
                return labels.join(', ') + '';
            }
        }
    
    });
});


