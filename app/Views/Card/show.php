<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Show<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Show</h2>
        <?php //dd($data)?>
          
        <h3><b>Id: </b><?= esc($data->id_card)?></h3>
        <h3><b>Numer: </b><?= esc($data->card_number)?></h3>       

    <a href="<?=url_to('Card::edit', $data->id_card)?>">edytuj</a>

    <?= $this->endSection() ?>
