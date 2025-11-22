<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>New<?= $this->endSection() ?>

<?= $this->section('content') ?>
    
    <?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <?= validation_list_errors() ?>
    <?= form_open('card/create') //helper form - submit wywołanie funkcji create konrolera Card?>
    
        <?= $this->include("card/form");?>
        
    <?= form_close() ?>

<?= $this->endSection() ?>