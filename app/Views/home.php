<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<div ng-controller="homeController">
    <h4>{{title}}</h4>
</div>


<?= $this->endSection(); ?>