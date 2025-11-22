<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
        <?php //dd($data)?>
          
        <h2>Id: <?= esc($data->id_card)?></h2>
        <h2>Nazwa: <?= esc($data->card_number)?></h2>       

    <a href="<?=url_to('Card::edit', $data->id_card)?>">edytuj</a>

    <?= $this->endSection() ?>
