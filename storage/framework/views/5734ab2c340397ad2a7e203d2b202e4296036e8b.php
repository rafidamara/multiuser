  

<?php $__env->startSection('title_web'); ?>
    Edit Kegiatan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Kegiatan</h1>
            <a href="/kegiatan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="/kegiatan/<?php echo e($kegiatan->id_kegiatan); ?>">
                <?php echo method_field('PATCH'); ?>
                <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="model" style="height: 100px" rows="7" name="model"><?php echo e($kegiatan->model); ?></textarea>
                                    <label for="model">Model</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="metode" style="height: 100px" rows="7" name="metode"><?php echo e($kegiatan->metode); ?></textarea>
                                    <label for="metode">Metode</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="pendekatan" style="height: 100px" rows="7" name="pendekatan"><?php echo e($kegiatan->pendekatan); ?></textarea>
                                    <label for="pendekatan">Pendekatan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="alat_bahan" style="height: 100px" rows="7" name="alat_bahan"><?php echo e($kegiatan->alat_bahan); ?></textarea>
                                    <label for="alat_bahan">Alat Dan Bahan</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="media" style="height: 100px" rows="7" name="media"><?php echo e($kegiatan->media); ?></textarea>
                                <label for="media">Media</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="kegiatan_inti" style="height: 100px" rows="7" name="kegiatan_inti"><?php echo e($kegiatan->kegiatan_inti); ?></textarea>
                                <label for="kegiatan_inti">Kegiatan Inti</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_kegiatan/edit.blade.php ENDPATH**/ ?>