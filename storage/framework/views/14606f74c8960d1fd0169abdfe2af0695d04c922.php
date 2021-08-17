  

<?php $__env->startSection('title_web'); ?>
    Data Guru
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">JUDUL</th>
                            <th scope="col">CONTENT</th>
                            <th scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center">
                                    <img src="<?php echo e(Storage::url('public/blogs/').$blog->image); ?>" class="rounded" style="width: 150px">
                                </td>
                                <td><?php echo e($blog->title); ?></td>
                                <td><?php echo $blog->content; ?></td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('blog.destroy', $blog->id)); ?>" method="POST">
                                        <a href="<?php echo e(route('blog.edit', $blog->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                              <div class="alert alert-danger">
                                  Data Blog belum Tersedia.
                              </div>
                          <?php endif; ?>
                        </tbody>
                      </table>  
                      <?php echo e($blogs->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    //message with toastr
    <?php if(session()->has('success')): ?>
    
        toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!'); 

    <?php elseif(session()->has('error')): ?>

        toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!'); 
        
    <?php endif; ?>
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\4_u\resources\views/blog/index.blade.php ENDPATH**/ ?>