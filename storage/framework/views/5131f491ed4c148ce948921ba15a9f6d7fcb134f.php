<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Kategori Lembur</center></div>

                <div class="panel-body">
                    <table class="table" border='2'>
                        <thead>
                            <th><center>No</th></center>
                            <th><center>Kode Lembur</th></center>
                            <th><center>Nama Jabatan</th></center>
                            <th><center>Nama Golongan</th></center>
                            <th><center>Besaran Uang</th></center>
                        </thead>
                        <?php 
                        $a=1;
                         ?>
                        <?php $__currentLoopData = $kategori_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tbody>
                            <td><center><?php echo e($a++); ?></td></center>
                            <td><center><?php echo e($data->kode_lembur); ?></td></center>
                            <td><center><?php echo e($data->jabatan->nama_jabatan); ?></td></center>
                            <td><center><?php echo e($data->golongan->nama_golongan); ?></td></center>
                            <td><center><?php echo e($data->besaran_uang); ?></td></center>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>