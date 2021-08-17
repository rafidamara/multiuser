  

<?php $__env->startSection('title_web'); ?>
    Edit Guru
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Guru</h1>
            <a href="/guru" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="/guru/<?php echo e($guru->id_guru); ?>" enctype="multipart/form-data">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nipd" class="form-label">NIPD</label>
                        <input type="text" name="nipd" class="form-control <?php $__errorArgs = ['nipd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" <?php $__errorArgs = ['nipd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nipd" value="<?php echo e($guru->nipd); ?>">

                        <?php $__errorArgs = ['nipd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">Harap Diisi!</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="nama-guru" class="form-label">Nama Guru</label>
                        <input type="text" name="nama_guru" class="form-control" id="nama-guru" 
                            value="<?php echo e($guru->nama_guru); ?>">
                    </div>
                    <img src="<?php echo e(asset('photo')); ?>/<?php echo e($guru->photo); ?>" width="70" height="70">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="bidang" class="form-label">Bidang</label>
                                <select class="form-select" name="bidang" id="bidang">
                                    <option value="<?php echo e($guru->bidang); ?>" selected><?php echo e($guru->bidang); ?></option>
                                    <option value="Kurikulum">Kurikulum</option>
                                    <option value="Pokja">Pokja</option>
                                    <option value="Admin">Admin</option>
                                    <option value="KKG">KKG</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" name="jabatan" id="jabatan">
                                    <option value="<?php echo e($guru->jabatan); ?>" selected><?php echo e($guru->jabatan); ?></option>
                                    <option value="Kaprog">Kaprog</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil Ketua">Wakil Ketua</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Wali Kelas">Wali Kelas</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?php echo e($guru->email); ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" value="<?php echo e($guru->password); ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_guru/edit.blade.php ENDPATH**/ ?>