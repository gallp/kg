<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
  
        <?php //dd($data); ?>
        
        <person>
            <h2><?= esc($data["fname"])?></h2>
            <h2><?= esc($data["sname"])?></h2>
            <p><?= esc($data["guest_company"])?></p>
            <p><?= esc($data["guest_count"])?></p>
            <h2><?= esc($data["fname"])?></h2>
            <p><?= esc($data["comment"])?></p>
        </person>

    <a href="<?=url_to("Dashboard::edit", $data["id"])?>">edytuj</a>

    <?= $this->endSection() ?>
