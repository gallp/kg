<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
  
        <?php //dd($persons); ?>
        
        <person>
            <h2><?= esc($persons["name"])?></h2>
            <p><?= esc($persons["comment"])?></p>
        </person>

    <a href="<?=url_to("Person::edit", $persons["id"])?>">edytuj</a>

    <?= $this->endSection() ?>
