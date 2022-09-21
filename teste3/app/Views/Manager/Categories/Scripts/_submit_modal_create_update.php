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

            window.refreshCSRFToken(response.token);

            if(response.success == false) {

               // Mostrar mensagem de erro - toast
            toastr.error('Verifique os erros e tente novamente'); 

                $.each(response.errors, function(field, value) {
                    console.log(field);

                    $(form).find('span.' +field).text(value);
                });

                return;
            }
            
            // Tudo certo.
            
            // Mostrar mensagem de sucesso - toast de sucesso
            toastr.success(response.message);

            $('#categoryModal').modal('hide');
            
            $(form)[0].reset();

            $("#dataTable").DataTable().ajax.reload(null, false);

            $('.modal-title').text('Criar Categoria'); // mudaremos depois com o lang

            $(form).attr('action', '<?php echo route_to('categories.create'); ?>');
            $(form).find('input[name="id"]').val('');
            $(['name=_method']).remove;
        },

        error: function() {

            alert('Error backend');
        }

    });
});

</Script>