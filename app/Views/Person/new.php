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
    
    <?= form_open("person/create") //helper form - submit wywołanie funkcji create konrolera Person?>
    
        <?= $this->include("Person/form");?>
    
    </form>

<?= $this->endSection() ?>