<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
        Dashboard

        <!-- button logout  -->
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
</div>
<?= $this->endSection() ?>