$(function () {
    $('#days').multiselect({
        buttonText: function(options, select) {
            console.log(select[0].length);
            if (options.length === 0) {
                return 'No day selected';
            }
            if (options.length === select[0].length) {
                return 'Everyday';
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
