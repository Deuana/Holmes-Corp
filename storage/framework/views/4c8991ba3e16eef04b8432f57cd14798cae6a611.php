<?php $__env->startSection('header'); ?>
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Courses
            <a class="btn btn-success pull-right" href="<?php echo e(route('courses.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($courses->count()): ?>
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                        <th>DEPARTMENT_ID</th>
                        <th>DEPARTMENT_ID</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($courses as $course): ?>
                            <tr>
                                <td><?php echo e($course->id); ?></td>
                                <td><?php echo e($course->name); ?></td>
                    <td><?php echo e($course->department_id); ?></td>
                    <td><?php echo e($course->department_id); ?></td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('courses.show', $course->id)); ?>"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="<?php echo e(route('courses.edit', $course->id)); ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $courses->render(); ?>

            <?php else: ?>
                <h3 class="text-center alert alert-info">Empty!</h3>
            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>