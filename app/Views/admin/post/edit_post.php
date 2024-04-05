<?= $this->extend('admin/layout/page_layout') ?>
<?= $this->section('content') ?>
            <!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">Edit Artikel</h2>
        <div class="row">
            <div class="col">
            <?php 
                $success = session()->getFlashdata('success');
                $error = session()->getFlashdata('error');
                if ($success) {
                    echo '<div class="alert alert-success" role="alert">' . $success . '</div>';
                }
                if ($error) {
                    echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                }
            ?>

            <form method="post" action="/admin/post/update" class="bg-white p-5"  enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $post['id']; ?>">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border" id="exampleInputEmail1" name="title" required value="<?= $post['title']; ?>">
                    <label for="exampleInputEmail1">Judul</label>
                </div>
                <div class="form-control mb-3">
                    <label for="floatingTextarea" >Konten</label>
                    <textarea class="form-control" id="floatingTextarea" style="height: 200px;" name="content"><?= $post['content']; ?></textarea>
                </div>  

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</main>
<script src="/admin-page/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image',
    });
</script>

<?= $this->endSection() ?>