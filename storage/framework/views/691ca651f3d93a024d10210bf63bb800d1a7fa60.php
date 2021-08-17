

<?php $__env->startSection('content'); ?>

<form action="/insertpengiriman" method="POST" enctype="multipart/form-data" name="formInput">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group mt-4">
                <label>Jenis pengiriman</label>
                <select name="jenis_pengiriman">
                    <option name="jenis" value="yes">yes</option>
                    <option name="jenis" value="oke">oke</option>
                    <option name="jenis" value="reg">reg</option>
                    <option name="jenis" value="ss">ss</option>
                </select>

                <div class="text-danger">
                    <?php $__errorArgs = ['jenis_pengiriman'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>  

            
           
            <div class="form-group mt-4">
                <label>asuransi</label>
                <input type="text" name="asuransi" class="form-control">
                <div class="text-danger">
                    <?php $__errorArgs = ['asuransi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>   
           
            <div class="form-group">
                <button class="btn btn-primary btn-sm">simpan</button>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\projekjne\resources\views/addPengiriman.blade.php ENDPATH**/ ?>