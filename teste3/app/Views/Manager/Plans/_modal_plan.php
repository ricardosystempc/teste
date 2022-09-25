<!-- Modal -->
<div class="modal fade" id="categoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><th scope="col"><?php echo lang('Categories.title_new'); ?></th></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <?php echo form_open(route_to('categories.create'), ['id' => 'categories-form'], ['id' => '']); ?>

      <div class="modal-body">
        
      <div class="mb-3">

      <label for="name" class="form-label"><th scope="col"><?php echo lang('Categories.label_name'); ?></th></label>
      <input type="text" class="form-control" id="name" name="name">
      <span class="text-danger error-text name"></span>

      </div>

      <div class="mb-3">

      <label for="parent_id" class="form-label"><th scope="col"><?php echo lang('Categories.label_parent_name'); ?></th></label>
      
      <!-- será preenchido pelo javascript -->
      <span id="boxParents"></span>

      <span class="text-danter error-text parent_id"></span>

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