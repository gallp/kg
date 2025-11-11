<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Person<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Person</h2>

    <?php //dd($persons, $pager); ?>

    <h3><a href="<?= url_to("Person::new") ?>">Nowy</a></h3>
    
    <!-- Tabela dla DataTables -->
    
<table id="personsTable" class="display" style="width:100%">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Comment</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($persons as $person): ?>
        <tr>
            <td><?= esc($person["id"]) ?></td>
            <td>
                <a href="<?= site_url('/person/' . $person["id"]) ?>">
                    <?= esc($person["name"]) ?>
                </a>
            </td>
            <td><?= esc($person["comment"]) ?></td>
            <td>
                <a href="<?= site_url('/person/' . $person["id"]) ?>" class="btn btn-sm btn-info">View</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>

<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"> </script>

<script >
new DataTable('#personsTable',{
    order:[[0,'desc']],
    columnDefs: [   {width: '7%', targets: 0},
                    {width: '25%', targets: 1},
                    {width: '10%', targets: 3}]
    
});
</script>
<?= $this->endSection() ?>