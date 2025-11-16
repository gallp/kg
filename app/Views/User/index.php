<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    User
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>User</h2>

    <table id="userTable" class="display">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Nazwa</th>
            <th>Email</th>
            <th>Role</th>
            <th>Akcje</th>
        </tr>
    </thead>
    
</table>


<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"> </script>

<script >

$(document).ready(function() {
    $('#userTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'id' },
            { data: 'username' },
            { data: 'email'},
            { data: 'groups'},
            { data: null,
                    orderable: false,
                    render: function(data, type, row) {
                    return `
                        <div class="action-buttons">
                            <a href="<?= site_url('/user') ?>/${row.id}" class="btn-icon view" onclick="event.stopPropagation()">🔍</a>
                            <a href="<?= site_url('/user/edit') ?>/${row.id}" class="btn-icon edit" onclick="event.stopPropagation()">✎</a>
                            <a href="<?= site_url('/user/delete') ?>/${row.id}" class="btn-icon delete" onclick="return confirm('Usunąć?') && event.stopPropagation()">🗑️</a>
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