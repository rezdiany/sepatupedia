<div class="container">

    
    <div class="banner">
        <img src="<?php echo e(url ('assets/slider/slider1.png')); ?>" alt="">
    </div>
    
    <section class="pilih-brand mt-4">
        <h3><strong>Pilih Brand </strong>
            <a href="<?php echo e(route('products')); ?>" class="btn btn-dark float-right"><i class="far fa-eye"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <a href="<?php echo e(route('products.brand', $brand->id)); ?>">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="<?php echo e(url ('assets/logo')); ?>/<?php echo e($brand->gambar); ?>" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    
    <section class="products mt-5 mb-5">
        <h3><strong>Best Products</strong></h3>
        <div class="row mt-4">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img src="<?php echo e(url ('assets/sepatu')); ?>/<?php echo e($product->gambar); ?>" class="img-fluid">
                        <div class="row mt-2 tinggi">
                            <div class="col-md-12">
                                <h5 class="tinggi"><strong><?php echo e($product->nama); ?></strong></h5>
                                <h5>Rp. <?php echo e(number_format($product->harga)); ?></h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="<?php echo e(route('products.detail', $product->id)); ?>" class="btn btn-dark btn-block"><i class="far fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
</div><?php /**PATH C:\xampp\htdocs\sepatupedia\resources\views/livewire/home.blade.php ENDPATH**/ ?>