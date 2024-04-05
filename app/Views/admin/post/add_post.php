<?= $this->extend('admin/layout/page_layout') ?>
<?= $this->section('content') ?>
            <!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">Tambah Artikel</h2>
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

            <form method="post" action="/admin/post/add" class="bg-white p-5"  enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border" id="title" name="title" required>
                    <label for="title">Judul</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border" id="slug" name="slug">
                    <label for="slug">Slug</label>
                </div>
                <div class="form-control mb-3">
                    <label for="floatingTextarea">Konten</label>
                    <textarea class="form-control" id="floatingTextarea" name="content"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add</button>
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
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    // Fungsi untuk menghasilkan slug dari judul
    function generateSlug(title) {
        return title.toLowerCase().trim().replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
    }

    // Event listener untuk memperbarui nilai slug saat judul berubah
    titleInput.addEventListener('input', function() {
        const title = titleInput.value;
        const slug = generateSlug(title);
        slugInput.value = slug;
    });
</script>

<?= $this->endSection() ?>