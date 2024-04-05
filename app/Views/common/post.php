<?php $this->extend('common/layout/page_layout') ?>

<?= $this->section('content') ?>

            <div class="row mb-5 align-items-center justify-content-between">
                <div class="col">
                    <div class="w-full mb-4">
                        <div class="mb-3">
                        </div>
                        <img class="img-fluid" src="<?= base_url('uploads/' . $post['image_url']) ?>">
                        <h2 class="heading my-3"><?= $post['title']; ?></h2>
                    </div>
                    <div>
                        <?= $post['content'] ?>
                    </div>  
                </div>
            </div>
<?= $this->endSection() ?>