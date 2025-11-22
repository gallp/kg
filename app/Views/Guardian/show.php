<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
  
        <?php //dd($data); ?>
        
        <guardian>
            <h3><b>Imie i nazwisko: </b><?= esc($data["name"])?></h3>
            <h3><b>Email: </b><?= esc($data["email"])?></h3>
            <h3><b>Telefon: </b> <?= esc($data["phone"])?></h3>
            <h3><b>Dział: </b><?= esc($data["department_name"])?></h3>
        </guardian>

    <a href="<?=url_to("Guardian::edit", $data["id"])?>">edytuj</a>

    <?= $this->endSection() ?>
