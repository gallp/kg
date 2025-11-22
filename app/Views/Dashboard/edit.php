<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Edytuj Wejście<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Edycja Wejścia</h2>
    
    <?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <?//= dd($guardian['name'])?>
    
    <?= form_open("dashboard/update/" . $data["id"]) //helper form - submit wywołanie funkcji update konrolera Dashboard?>
    
        <?= $this->include("Dashboard/form") ?>
    
    </form>


<?= $this->endSection() ?>