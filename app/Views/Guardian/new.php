<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>New<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to New</h2>
    
    <?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <?= form_open("guardian/create") //helper form - submit wywołanie funkcji create konrolera Guardian?>
    
        <?= $this->include("Guardian/form");?>
        
    
    </form>

<?= $this->endSection() ?>