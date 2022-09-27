<!-- Modal -->
<div class="modal fade" id="modalPlan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><th scope="col"><?php echo lang('Plans.title_new'); ?></th></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <?php echo form_open(route_to('plans.create'), ['id' => 'plans-form'], ['id' => '']); ?>

    <div class="modal-body">

      <div class="row">
          
        <div class="mb-3">

        <label for="name" class="form-label"><th scope="col"><?php echo lang('Plans.label_name'); ?></th></label>
        <input type="text" class="form-control" id="name" name="name">
        <span class="text-danger error-text name"></span>

        </div>

        <div class="mb-3">

        <label for="recorrence" class="form-label"><th scope="col"><?php echo lang('Plans.label_recorrence'); ?></th></label>
        
        <!-- será preenchido pelo javascript -->
        <span id="boxRecorrences"></span>

        <span class="text-danter error-text recorrence"></span>

        </div>


        <div class="mb-3">

              <label for="value" class="form-label"><?php echo lang('Plans.label_value'); ?></th></label>
              <input type="text" class="money form-control" id="value" name="value">
              <span class="text-danger error-text value"></span>

        </div>

        <div class="mb-3">

              <label for="adverts" class="form-label"><?php echo lang('Plans.label_adverts'); ?></th></label>
              <input type="number" class="form-control" id="adverts" name="adverts">
              <span class="text-danger error-text adverts"></span>

        </div>

        <div class="mb-3">

              <label for="description" class="form-label"><?php echo lang('Plans.label_description'); ?></th></label>
              <textarea class="form-control" name="description" rows="3" placeholder="<?php echo lang('Plans.label_description'); ?>"></textarea>
              <span class="text-danger error-text description"></span>

        </div>

      </div>


      <div class="form-check form-switch">

        <?php echo form_hidden('is_highlighted', 0); ?>
        <input type="checkbox" class="form-check-input" id="is_highlighted">
        <label for="description" class="form-check-label"><?php echo lang('Plans.label_is_highlighted'); ?></th></label>

      </div>

    </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><th scope="col"><?php echo lang('App.btn_cancel'); ?></th></button>
        <button type="submit" class="btn btn-primary btn-sm"><th scope="col"><?php echo lang('App.btn_save'); ?></th></button>
      </div>


      <?php echo form_close(); ?>
    </div>
  </div>
</div>