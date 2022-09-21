<script>

$(document).on('click', '#deleteCategoryBtn', function() {

    var id = $(this).data('id');

    var url = '<?php echo route_to('categories.delete'); ?>';

    $.post(url, {
        '<?php echo csrf_token(); ?>': $('meta[name="<?php echo csrf_token(); ?>"]').attr('content'),  
        _method:'DELETE', // Spoofing do request
        id: id

}, function(response) {

    window.refreshCSRFToken(response.token);

    // Mostrar mensagem de sucesso - toast de sucesso
    toastr.success(response.message);

    $("#dataTable").DataTable().ajax.reload(null, false);

    }, 'json').fail(function() {

        toastr.error('Error backend'); 
    
    });

});

</script>








