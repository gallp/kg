<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Edytuj<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php //print_r(get_defined_vars());?>
    <h2>Edycja</h2>
    
    <?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <?php //print_r(get_defined_vars())?>
    
    <?= validation_list_errors() ?>
    <?= form_open("card/update/$data->id_card") //helper form - submit wywołanie funkcji update konrolera Card?>
    
        <?= $this->include("Card/form");?>
    
    <?= form_close() ?>

<?= $this->endSection() ?>