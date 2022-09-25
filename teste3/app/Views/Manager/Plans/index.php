<?= $this->extend('Manager/Layout/main.php'); ?>
<!-- Envio para o templete principal os arquivos css e stylesdessa view-->
<?= $this->section('title') ?>

<?php echo lang('Plans.title_index'); ?>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.css"/>
 


<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<!-- Envio para o templete principal o conteúdo dessa view-->

<div class="container-fluid">

    <div class="container-fluid pt-3">

    <div class="row">

        <div class="col-md-12">

            <div class="card shadow-lg">

                <div class="card-header">

                <h5><?php echo lang('Plans.title_index'); ?></h5>

                <button id="createPlanBtn" class="btn btn-success btn-sm float-end"><?php echo lang('App.btn_new'); ?></button>

                </div>

        <div class="card-body">

        <a class="btn btn-info btn-sm mt-2 mb-4" href="<?php echo route_to('plans.archived');?>"><?php echo lang('App.btn_all_archived'); ?></a>

                <table class="table table-borderless table-striped" id="dataTable">
                    <thead>
                        <tr>
                        
                        <th scope="col"><?php echo lang('Plans.label_code'); ?></th>
                        <th scope="col"><?php echo lang('Plans.label_name'); ?></th>
                        <th scope="col"><?php echo lang('Plans.label_is_highlighted'); ?></th>
                        <th scope="col"><?php echo lang('Plans.label_details'); ?></th>
                        <th scope="col"><?php echo lang('App.btn_actions'); ?></th>
                        </tr>
                    </thead>
               
                </table>

                </div>

            </div>   
        
        </div>

    </div>

</div>

<?php echo $this->include('Manager/Plans/_modal_plan'); ?>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>

<!-- Envio para o templete principal os arquivos scripts dessa view-->

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

<?php echo $this->include('Manager/Plans/Scripts/_datatable_all'); ?>

<?php //echo $this->include('Manager/Plans/Scripts/_get_category_info'); ?>
<?php //echo $this->include('Manager/Plans/Scripts/_submit_modal_create_update'); ?>
<?php //echo $this->include('Manager/Plans/Scripts/_show_modal_to_create'); ?>
<?php //echo $this->include('Manager/Plans/Scripts/_archive_category'); ?>

<script>
  function refreshCSRFToken(token) {

    $('[name="<?php echo csrf_token(); ?>"]').val(token);
    $('meta[name="<?php echo csrf_token(); ?>"]').attr('content', token);
  }

</script>



<?= $this->endSection() ?>