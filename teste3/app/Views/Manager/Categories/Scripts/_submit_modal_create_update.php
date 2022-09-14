<Script>

$('#categories-form').submit(function(e) {

    e.preventDefault();
    var form = this;

    $.ajax({
        
        url: $(form).attr('action'),
        method: $(form).attr('method'),
        data: new FormData(form),
        processData: false,
        dataType: 'JSON',
        contentType: false,
        beforeSend: function() {

            $(form).find('span.error-text').text('');

        },
        success: function(response){
            
        }

    });
});


</Script>