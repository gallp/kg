<?= $jsonData ?>
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Admin
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Admin</h2>
   
    <!-- Do podglądu JSON -->
     <details><?= $jsonData ?></details>
    
<div class="table-container">

    <table id="guestsTable" class="display" width="auto">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Firma</th>
            <th>Liczba osób</th>
            <th>Opiekun</th>
            <th>Cel</th>
            <th>Strefa</th>
            <th>Wejście</th>
            <th>Potwierdzenie</th>
            <th>Wyjście</th>
            <th>Stały</th>
            <th>Zgoda</th>
            <th>Komentarz</th>
            <th>Akcje</th>
        </tr>
    </thead>
</table>
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>


$(document).ready(function() {
    $('#guestsTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'id' },
            { data: 'fname' },
            { data: 'sname' },
            { data: 'guest_company' },
            { data: 'guest_count' },
            { data: 'guardian_name' },
            { data: 'purpose' },
            { data: 'zone_name' },
            { data: 'entry_date' },
            { data: 'confirmation_date' },
            { data: 'exit_date' },
            { data: 'permanent' },
            { data: 'consent' },
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
        ]
        
    });
});
</script>
<?= $this->endSection() ?>

