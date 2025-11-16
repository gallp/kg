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
    
    <?= form_open("department/create") //helper form - submit wywołanie funkcji create konrolera Guardian?>
    
        <?= $this->include("Department/form");?>
        
    </form>

<?= $this->endSection() ?>