<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>

<div class="modal-body">
  <p>Delete this order ?</p>
  <p>ID: <?php echo e($data -> id); ?></p>
  

</div>

<div class="modal-footer">
  <a class="btn btn-danger" data-dismiss="modal">No</a>
  <a class="btn btn-warning" id="submit" href="<?php echo e(route('admin.order.delete', $data->id)); ?>">Yes</a>
</div>