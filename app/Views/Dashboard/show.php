<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h3>Welcome to Show</h3>
  
        <?php //dd($data); ?>
        
        <person>
            <h3>Imie: <?= esc($data["fname"])?></h3>
            <h3>Nazwisko: <?= esc($data["sname"])?></h3>
            <h3>Firma: <?= esc($data["guest_company"])?></h3>
            <h3>Liczba gości: <?= esc($data["guest_count"])?></h3>
            <h3>Komentarz: <?= esc($data["comment"])?></h3>
        </person>

    <a href="<?=url_to("Dashboard::edit", $data["id"])?>">edytuj</a>

    <?= $this->endSection() ?>
