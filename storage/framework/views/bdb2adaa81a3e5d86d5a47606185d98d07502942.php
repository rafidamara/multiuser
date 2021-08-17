  

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Kelas</h1>
            <a href="/kategoripenilaian" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus"></i> 
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form action="/kategoripenilaian/<?php echo e($edit->id); ?>" method="POST">
                    <?php echo method_field('PATCH'); ?>
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="predikat" class="form-label">Predikat</label>
                        <input type="text" class="form-control" id="predikat" name="predikat" value="<?php echo e($edit->predikat); ?>">
                        <?php $__errorArgs = ['predikat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">Harap Diisi Nama Predikat</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="pengetahuan" class="form-label">Pengetahuan</label>
                        <input type="text" name="pengetahuan" class="form-control" id="pengetahuan" value="<?php echo e($edit->pengetahuan); ?>">
                        <?php $__errorArgs = ['pengetahuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">Harap Diisi Pengetahuan</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="keterampilan" class="form-label">Keterampilan</label>
                        <input type="text" name="keterampilan" class="form-control" id="keterampilan" value="<?php echo e($edit->keterampilan); ?>">
                        <?php $__errorArgs = ['keterampilan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">Harap Diisi Keterampilan</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_kategori/edit.blade.php ENDPATH**/ ?>