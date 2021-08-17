  

<?php $__env->startSection('title_web'); ?>
    Edit Kelas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Kelas</h1>
            <a href="/kelas" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i> 
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="/kelas/<?php echo e($kelas->id_kelas); ?>">
                <?php echo method_field('PATCH'); ?>
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama-kelas" class="form-label">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" id="nama-kelas" 
                            value="<?php echo e($kelas->nama_kelas); ?>">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="paket_keahlian" class="form-label">Paket Keahlian</label>
                                <select class="form-select" name="paket_keahlian" id="paket_keahlian">
                                    <option value="<?php echo e($kelas->paket_keahlian); ?>" selected>
                                        <?php echo e($kelas->paket_keahlian); ?>

                                    </option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Broadcasting">Broadcasting</option>
                                    <option value="Multimedia">Multimedia</option>
                                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                    <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                                </select>
                            </div></div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="tahun_ajaran" class="form-label">Tahun Ajaran</label>
                                <input type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran" value="<?php echo e($kelas->tahun_ajaran); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="wali-kelas" class="form-label">Wali Kelas</label>
                        <select class="form-select" name="wali_kelas" id="wali-kelas">
                            

                            <option value="<?php echo e($kelas->wali_kelas); ?>" selected>
                                <?php
                                    $get = DB::table('guru')->where('id_guru', $kelas->wali_kelas)->get('nama_guru');
                                ?>
                                <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <?php echo e($guru->nama_guru); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </option>

                            <?php
                                $guru = DB::table('guru')->get();
                            ?>
                            <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <option value="<?php echo e($get->id_guru); ?>"><?php echo e($get->nama_guru); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_kelas/edit.blade.php ENDPATH**/ ?>