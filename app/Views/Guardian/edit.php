<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Edytuj<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to edit</h2>
    
    <?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    
    <?= form_open("guardian/update/" . $data["id"]) //helper form - submit wywołanie funkcji create konrolera Guardian?>
    
        <?= $this->include("Guardian/form");?>
    
    </form>

<?= $this->endSection() ?>