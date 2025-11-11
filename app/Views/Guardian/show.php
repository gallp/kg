<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
  
        <?php //dd($data); ?>
        
        <guardian>
            <h2><?= esc($data["name"])?></h2>
            <p><?= esc($data["email"])?></p>
            <p><?= esc($data["phone"])?></p>
            <p><?= esc($data["department_name"])?></p>
        </guardian>

    <a href="<?=url_to("Guardian::edit", $data["id"])?>">edytuj</a>

    <?= $this->endSection() ?>
