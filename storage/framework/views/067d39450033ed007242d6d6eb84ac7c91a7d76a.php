<?php $__env->startSection('title'); ?>
Users List
@parent
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<style type="text/css">
	tr#data td{
		text-align: center;
		font-size: 20px;
		line-height: 90px;
	}
	tr#tableHead td{
		text-align: center;
	}
	a{
		cursor: pointer;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Dishes</a></li>
        <li class="active">Dishes List</li>
    </ol>
</section>

<!-- Main content -->
	<div id="duongbao">
			<div class="alert alert-info"><h1>Dishes Management</h1></div>
			<div class="panel panel-primary">
				<div class="panel-heading">Dishes list</div>
				<div class="panel-body">
					<table id="danhsach" class="table table-bordered table-strip table-hover">
						<thead>
							<tr class="danger" id="tableHead">
								<td>STT</td>
								<td>ID</td>
								<td>Name</td>
								<td>Image</td>
								<?php if(Sentinel::inRole('admin')): ?>
								<td>Option</td>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<tr id="data" class="<?php echo e($key); ?>">
									<td><?php echo e($key + 1); ?></td>
									<td><?php echo e($value-> id); ?></td>
									<td><?php echo e($value-> name); ?></td>
									<td>
									<?php if($value->image): ?>
										<img src="<?php echo e(URL::to('/uploads/dishes/'.$value->image)); ?>" width="200px" height="90px" alt="No image!">
                                    <?php else: ?>
                                       	<img src="http://placehold.it/200x200" alt="profile pic">
                                    <?php endif; ?>
                                    </td>
                                    <?php if(Sentinel::inRole('admin')): ?>
									<td>
										<a href="<?php echo e(route('admin.dishes.edit', $value->id)); ?>" class="btn btn-info">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											Edit
										</a>
										&nbsp;&nbsp;&nbsp;
										<a href="<?php echo e(route('admin.dishes.delete_modal',$value->id)); ?>" data-toggle="modal" data-target="#delete_modal" 
										class="btn btn-danger">
											<i class="fa fa-trash-o" aria-hidden="true"></i> Delete
										</a>
									</td>
									<?php endif; ?>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
	</div>
	
  	<div class="modal fade" id="delete_modal" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">      
    			<!-- Modal content-->
      		</div>
   		</div>
  	</div>

	<script>
  		$(function(){
      		$('body').on('hidden.bs.modal', '#delete_modal', function () {
         		 $(this).removeData('bs.modal');
      		});
  		});
	</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>