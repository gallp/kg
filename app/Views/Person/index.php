<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Person<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Person</h2>

    <!-- Do podglądu JSON -->
     <details><?= $jsonData ?></details>
    
    <?php //dd($jsonData);?>

    
    <h3><a href="<?= url_to("Person::new") ?>">Nowy</a></h3>
    

    <!-- Tabela dla DataTables -->
    
<table id="personsTable" class="display">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Imie i Nazwisko</th>
            <th>Firma</th>
            <th>Komentarz</th>
            <th>Akcje</th>
        </tr>
    </thead>

</table>

<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"> </script>

<script >

$(document).ready(function() {
    $('#personsTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'company_name' },
            { data: 'comment' },
            { data: null,
                    orderable: false,
                    render: function(data, type, row) {
                    return `
                        <div class="action-buttons">
                            <a href="<?= site_url('person') ?>/${row.id}" class="btn-icon view" onclick="event.stopPropagation()">🔍</a>
                            <a href="<?= site_url('person/edit') ?>/${row.id}" class="btn-icon edit" onclick="event.stopPropagation()">✎</a>
                            <a href="<?= site_url('person/delete') ?>/${row.id}" class="btn-icon delete" onclick="return confirm('Usunąć?') && event.stopPropagation()">🗑️</a>
                        </div>
                    `;
                }
            }
        ],
        order: [[0, 'desc']],
        columnDefs: [
            { width: '3%', targets: 0 },
            { width: '25%', targets: 1 },
            { width: '5%', targets: 4 }
        ]   
    });
});
</script>
</script>
<?= $this->endSection() ?>