  

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Insert Class Baru</h1>
            <a href="/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus"></i> 
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="/kelas">
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama-kelas" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama-kelas">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah-siswa" class="form-label">Jumlah Siswa</label>
                        <input type="password" class="form-control" id="jumlah-siswa">
                    </div>
                    <div class="mb-3">
                        <label for="wali-kelas" class="form-label">Wali Kelas</label>
                        <input type="password" class="form-control" id="wali-kelas">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_class/create.blade.php ENDPATH**/ ?>