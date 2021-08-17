  

<?php $__env->startSection('title_web'); ?>
    Edit Siswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Siswa</h1>
            <a href="/siswa" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i> 
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="/siswa/<?php echo e($siswa->id_siswa); ?>" enctype="multipart/form-data">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" name="nisn" class="form-control" id="nisn"
                            value="<?php echo e($siswa->nisn); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama-siswa" class="form-label">Nama Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" id="nama-siswa" 
                            value="<?php echo e($siswa->nama_siswa); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nomer-hp" class="form-label">Nomer HP</label>
                        <input type="text" name="nomer_hp" class="form-control" id="nomer-hp" 
                            value="<?php echo e($siswa->nomer_hp); ?>">
                    </div>
                    <img src="<?php echo e(asset('photo')); ?>/<?php echo e($siswa->photo); ?>" width="70" height="70">
                    <div class="mb-3 mt-2">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" 
                            value="<?php echo e($siswa->photo); ?>">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tingkat" class="form-label">Tingkat</label>
                                <select class="form-select" name="tingkat" id="tingkat">
                                    <option value="<?php echo e($siswa->tingkat); ?>" selected><?php echo e($siswa->tingkat); ?></option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select" name="jurusan" id="jurusan">
                                    <option value="<?php echo e($siswa->jurusan); ?>" selected><?php echo e($siswa->jurusan); ?></option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Broadcasting">Broadcasting</option>
                                    <option value="Multimedia">Multimedia</option>
                                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                    <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select class="form-select" name="kelas" id="kelas">
                                    <option value="<?php echo e($siswa->kelas); ?>" selected>
                                        <?php
                                            $get = DB::table('kelas')->where('id_kelas', $siswa->kelas)->get('nama_kelas');
                                        ?>
                                        <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <?php echo e($kelas->nama_kelas); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </option>

                                    <?php
                                        $get = DB::table('kelas')->get();
                                    ?>
                                    <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($kelas->id_kelas); ?>"><?php echo e($kelas->nama_kelas); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" 
                            value="<?php echo e($siswa->email); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" 
                            value="<?php echo e($siswa->password); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_siswa/edit.blade.php ENDPATH**/ ?>