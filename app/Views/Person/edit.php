<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Edit Person<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Edycja</h2>
    
    <?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <?= form_open("person/update/" . $persons["id"]) //helper form - submit wywołanie funkcji update konrolera Person?>
    
        <?= $this->include("Person/form") ?>
    
    </form>


<?= $this->endSection() ?>