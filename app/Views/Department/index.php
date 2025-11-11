<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Department<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Działy</h2>

    <!-- Do podglądu JSON -->
     <details><?= $jsonData ?></details>
    
    <?php //dd($jsonData);?>
    
    <h3><a href="<?= url_to("Department::new") ?>">Nowy</a></h3>
    
    <!-- Tabela dla DataTables -->
    
<table id="departmentTable" class="display">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Nazwa</th>
            <th>Akcje</th>
        </tr>
    </thead>

</table>

<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"> </script>

<script >

$(document).ready(function() {
    $('#departmentTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'id' },
            { data: 'name' },
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
            { width: '3%', targets: 0 },
            { width: '82%', targets: 1 },
            { width: '5%', targets: 2 }
        ]   
    });
});
</script>
<?= $this->endSection() ?>