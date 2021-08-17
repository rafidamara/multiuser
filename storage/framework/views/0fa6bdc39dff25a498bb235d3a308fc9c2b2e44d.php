  

<?php $__env->startSection('title_web'); ?>
    Edit Kompetensi Dasar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Kompetensi Dasar</h1>
            <a href="/kompetensidasar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="/kompetensidasar/<?php echo e($kompetensidasar->id_kd); ?>">
                <?php echo method_field('PATCH'); ?>
                <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="kd_pengetahuan" style="height: 100px" rows="7" name="kd_pengetahuan"><?php echo e($kompetensidasar->kd_pengetahuan); ?></textarea>
                                    <label for="kd_pengetahuan">KD Pengetahuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="kd_keterampilan" style="height: 100px" rows="7" name="kd_keterampilan"><?php echo e($kompetensidasar->kd_keterampilan); ?></textarea>
                                    <label for="kd_keterampilan">KD Keterampilan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="materi_pokok" style="height: 100px" rows="7" name="materi_pokok"><?php echo e($kompetensidasar->materi_pokok); ?></textarea>
                            <label for="materi_pokok">Materi Pokok</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="pembelajaran" style="height: 100px" rows="7" name="pembelajaran"><?php echo e($kompetensidasar->pembelajaran); ?></textarea>
                            <label for="pembelajaran">Pembelajaran</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="penilaian" style="height: 100px" rows="7" name="penilaian"><?php echo e($kompetensidasar->penilaian); ?></textarea>
                            <label for="penilaian">Penilaian</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" placeholder="Alokasi Waktu" name="alokasi_waktu" value="<?php echo e($kompetensidasar->alokasi_waktu); ?>">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="sumber_belajar" style="height: 100px" rows="7" name="sumber_belajar"><?php echo e($kompetensidasar->sumber_belajar); ?></textarea>

                            <label for="sumber_belajar">Sumber Belajar</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="mapel" class="form-label">Mata Pelajaran</label>
                                <select class="form-select" name="mapel" id="mapel">

                                    <option value="<?php echo e($kompetensidasar->mapel); ?>" selected>
                                        <?php
                                            $get = DB::table('mapel')->where('id_mapel', $kompetensidasar->mapel)->get('nama_mapel');
                                        ?>
                                        <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <?php echo e($mapel->nama_mapel); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </option>

                                    <?php
                                        $get = DB::table('mapel')->get();
                                    ?>
                                    <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($mapel->id_mapel); ?>"><?php echo e($mapel->nama_mapel); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="guru" class="form-label">Guru</label>
                                <select class="form-select" name="guru" id="guru">

                                    <option value="<?php echo e($kompetensidasar->guru); ?>" selected>
                                        <?php
                                            $get = DB::table('guru')->where('id_guru', $kompetensidasar->guru)->get('nama_guru');
                                        ?>
                                        <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <?php echo e($guru->nama_guru); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </option>

                                    <?php
                                        $get = DB::table('guru')->get();
                                    ?>
                                    <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($guru->id_guru); ?>"><?php echo e($guru->nama_guru); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_kompetensidasar/edit.blade.php ENDPATH**/ ?>