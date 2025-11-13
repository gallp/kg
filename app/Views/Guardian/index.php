<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Guardian<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Opiekunowie</h2>

    <?php //dd($jsonData);?>

    <h3><a href="<?= url_to("Guardian::new") ?>">Nowy</a></h3>
    
    <!-- Tabela dla DataTables -->
    
<table id="guardianTable" class="display">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Imie i Nazwisko</th>
            <th>E-mail</th>
            <th>Dział</th>
            <th>Telefon</th>
            <th>Akcje</th>
        </tr>
    </thead>

</table>

<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"> </script>

<script >

$(document).ready(function() {
    $('#guardianTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'email' },
            { data: 'department_name'},
            { data: 'phone' },
            { data: null,
                    orderable: false,
                    render: function(data, type, row) {
                    return `
                        <div class="action-buttons">
                            <a href="<?= site_url('guardian') ?>/${row.id}" class="btn-icon view" onclick="event.stopPropagation()">🔍</a>
                            <a href="<?= site_url('guardian/edit') ?>/${row.id}" class="btn-icon edit" onclick="event.stopPropagation()">✎</a>
                            <a href="<?= site_url('guardian/delete') ?>/${row.id}" class="btn-icon delete" onclick="return confirm('Usunąć?') && event.stopPropagation()">🗑️</a>
                        </div>
                    `;
                }
            }
        ],
        order: [[0, 'desc']],
        columnDefs: [
            { width: '2%', targets: 0 },
            { width: '25%', targets: 1 },
            { width: '5%', targets: 5 }
        ]   
    });
});
</script>
<?= $this->endSection() ?>