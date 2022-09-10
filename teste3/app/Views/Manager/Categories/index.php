<?= $this->extend('Manager/Layout/main.php'); ?>
<!-- Envio para o templete principal os arquivos css e stylesdessa view-->
<?= $this->section('title') ?>

<?php echo $title ?? ''; ?>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.css"/>
 


<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<!-- Envio para o templete principal o conteúdo dessa view-->

<div class="container-fluid">

    <div class="container-fluid pt-3">

    <div class="row">

        <div class="col-md-6">

            <div class="card shadow-lg">

                <div class="card-header">
                <h5><?php echo $title ?? ''; ?></h5>

                </div>

        <div class="card-body">

                <table class="table table-borderless table-striped" id="dataTable">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
               
                </table>

                </div>

            </div>   
        
        </div>

    </div>

</div>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>

<!-- Envio para o templete principal os arquivos scripts dessa view-->

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.js"></script>


<script>
    $(document).ready(function () {
    $('#dataTable').DataTable({

        ajax: '<?php echo route_to('categories.get.all'); ?>',
        
        columns: [{
                data: 'id'
            },
            {
                data: 'name'
            },
            {
                data: 'slug'
            },
            {
                data: 'actions'
            },

         ],
    });
});

</script>

<?= $this->endSection() ?>