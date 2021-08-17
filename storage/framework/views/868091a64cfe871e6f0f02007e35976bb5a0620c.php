

<?php $__env->startSection('content'); ?>
<a href="/addbarang" class="btn btn-primary btn-sm mt-3"><i class="fas fa-user-plus"></i> Tambah barang</a><br>
<?php if(session('pesan')): ?>
     <div class="alert alert-success alert-dismissible mt-4">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Succes!</h5>
                 <?php echo e(session('pesan')); ?>.
                </div>
<?php endif; ?>
<table class="table table-bordered mt-1">
    <thead style="background-color: #e84118;color:white; ">
        <tr>
            <th>
                No
            </th>
            <th>
                Id barang
            </th>
            <th>
                Nama barang
            </th>
            <th>
                Jenis barang 
            </th>
            <th>
                Berat barang
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($data->id_barang); ?></td>
                <td><?php echo e($data->nama_barang); ?></td>
                <td><?php echo e($data->jenis_barang); ?></td>
                <td><?php echo e($data->berat_barang); ?></td>
                <td class="text-center">
                    <a href="/detailbarang/<?php echo e($data->id_barang); ?>" class="btn btn-success btn-sm"><i class="fas fa-search"></i></a>
                    <a href="/editbarang/<?php echo e($data->id_barang); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="/deletebarang/<?php echo e($data->id_barang); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\projekjne\resources\views/barang.blade.php ENDPATH**/ ?>