<?= $this->extend('admin/layout/page_layout') ?>
<?= $this->section('content') ?>
<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">Semua Postingan</h2>
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
                <div class="users-table table-wrapper">
                    <table class="posts-table">
                        <thead>
                            <tr class="users-table-info">
                                <th>
                                    <label class="users-table__checkbox ms-20">
                                        <input type="checkbox" class="check-all">Thumbnail
                                    </label>
                                </th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $post): ?>
                            <tr>
                                <td>
                                    <label class="users-table__checkbox">
                                        <input type="checkbox" class="check">
                                        <div class="categories-table-img">
                                            <picture>
                                                <source srcset="/uploads/<?= $post['image_url']; ?>" type="image/webp"><img src="/admin-page/img/categories/01.jpg" alt="category">
                                            </picture>
                                        </div>
                                    </label>
                                </td>
                                <td>
                                <?= $post['title']; ?>
                                </td>
                                <td>
                                    <div class="pages-table-img">
                                        <picture>
                                            <source srcset="/admin-page/img/avatar/avatar-face-04.webp" type="image/webp"><img src="/admin-page/img/avatar/avatar-face-04.png" alt="User Name">
                                        </picture>
                                        <?= $post['author']; ?>
                                    </div>
                                </td>
                                <td><?php if($post['status'] == 'publish'): ?>
                                <span class="badge-active text-capitalize">
                                <?php else: ?>
                                <span class="badge-pending text-capitalize">
                                <?php endif ?>
                                <?= $post['status']; ?>
                                </span>
                                </td>
                                <td><?= $post['created_at']; ?></td>
                                <td>
                                    <span class="p-relative">
                                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                            <div class="sr-only">More info</div>
                                            <i data-feather="more-horizontal" aria-hidden="true"></i>
                                        </button>
                                        <ul class="users-item-dropdown dropdown">
                                            <li><a href="/admin/post/edit/<?= $post['id']; ?>">Edit</a></li>
                                            <li><a href="/admin/post/delete/<?= $post['id']; ?>">Delete</a></li>
                                        </ul>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</main>
<?= $this->endSection() ?>