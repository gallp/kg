<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Admin
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Admin</h2>

    <div>
        <a href="<?= site_url('user')?>">Użytkownicy</a>
    </div><br>
    
    <div>
        <a href="<?= site_url('admin/group')?>">Grupy</a>
    </div><br>

<?= $this->endSection() ?>
