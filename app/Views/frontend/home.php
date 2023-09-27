<!-- This is Header -->
<?= $this->extend('includes/header') ?>

<?= $this->section('content') ?>
    <h1>Hello World! This is home</h1>

    <?= $this->include('frontend/card') ?>

    <!-- This is footer -->
    <?= $this->include('includes/footer') ?>
<?= $this->endSection() ?>