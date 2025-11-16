<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Admin/groups
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Admingroups</h2>


<table id="groupTable" class="display">
    
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
    $('#groupTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: null,
                orderable: false,
                render: function(data, type, row) {
                return `
                    <div class="action-buttons">
                    <a href="<?= site_url('admin/users') ?>/${row.id}" class="btn-icon view" onclick="event.stopPropagation()">🔍</a>
                    <a href="<?= site_url('admin/users/edit') ?>/${row.id}" class="btn-icon edit" onclick="event.stopPropagation()">✎</a>
                    <a href="<?= site_url('admin/users/delete') ?>/${row.id}" class="btn-icon delete" onclick="return confirm('Usunąć?') && event.stopPropagation()">🗑️</a>
                    </div>
                    `;
                }
            }
        ],
        order: [[0, 'desc']],
        columnDefs: [
            { width: '2%', targets: 0 },
            { width: '5%', targets: 4 }
        ]   
    });
});

</script>
<?= $this->endSection() ?>
