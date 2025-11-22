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
    
    <?= form_open("department/update/$data->id") //helper form - submit wywołanie funkcji update konrolera Department?>
    
        <?= $this->include("Department/form");?>
    
    </form>

<?= $this->endSection() ?>