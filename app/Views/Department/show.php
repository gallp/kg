<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
          
        <h3><b>Id: </b><?= esc($data->id)?></h3>
        <h3><b>Nazwa: </b><?= esc($data->name)?></h3>       

    <a href="<?=url_to('Department::edit', $data->id)?>">edytuj</a>

    <?= $this->endSection() ?>
