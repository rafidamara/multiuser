  

<?php $__env->startSection('title_web'); ?>
    Edit Mapel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Mapel</h1>
            <a href="/kelas" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i> 
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="/mapel/<?php echo e($mapel->id_mapel); ?>">
                <?php echo method_field('PATCH'); ?>
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" name="nama_mapel" class="form-control" id="nama_mapel" 
                            value="<?php echo e($mapel->nama_mapel); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="matapel_kelas" class="form-label">Matapel Kelas</label>
                        <select class="form-select" name="matapel_kelas" id="matapel_kelas">
                            <option value="<?php echo e($mapel->matapel_kelas); ?>" selected><?php echo e($mapel->matapel_kelas); ?></option>
                            <option value="X (Sepuluh)">X (Sepuluh)</option>
                            <option value="XI (Sebelas)">XI (Sebelas)</option>
                            <option value="XII (Dua belas)">XII (Dua belas)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_matapelajaran/edit.blade.php ENDPATH**/ ?>