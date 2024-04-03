<?= $this->extend('admin/layout/page_layout') ?>
<?= $this->section('content') ?>
            <!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">Tambah Artikel</h2>
        <div class="row">
            <div class="col">
            <form method="post" action="/admin/post/add" class="bg-white p-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border" id="exampleInputEmail1" name="title" required>
                    <label for="exampleInputEmail1">Judul</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="floatingTextarea" style="height: 200px;" name="content" required></textarea>
                    <label for="floatingTextarea">Konten</label>
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
<?= $this->endSection() ?>