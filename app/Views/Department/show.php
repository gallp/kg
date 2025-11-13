<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
          
        <h2>Id: <?= esc($data->id)?></h2>
        <h2>Nazwa: <?= esc($data->name)?></h2>       

    <a href="<?=url_to('Department::edit', $data->id)?>">edytuj</a>

    <?= $this->endSection() ?>
