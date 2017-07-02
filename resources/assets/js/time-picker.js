$(function () { 
    $('#lstStates').multiselect({ 
        buttonText: function(options, select) {
            console.log(select[0].length);
            if (options.length === 0) {
                return 'None selected';
            }
            if (options.length === select[0].length) {
                return 'All selected ('+select[0].length+')';
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


