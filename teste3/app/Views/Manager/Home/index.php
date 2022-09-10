<?= $this->extend('Manager/Layout/main.php'); ?>
<!-- Envio para o templete principal os arquivos css e stylesdessa view-->
<?= $this->section('title') ?>

<?php echo $title ?? ''; ?>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>


<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<!-- Envio para o templete principal o conteúdo dessa view-->

<div class="container-fluid">

<h1><?php echo $title ?? ''; ?></h1>

</div>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<!-- Envio para o templete principal os arquivos scripts dessa view-->


<?= $this->endSection() ?>