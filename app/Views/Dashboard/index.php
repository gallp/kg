<?= $jsonData ?>
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Goście
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Goście</h2>
   
    <!-- Do podglądu JSON -->
     <details><?= $jsonData ?></details>

     <h3><a href="<?= url_to("Dashboard::new") ?>">Nowy</a></h3>
    
<div class="table-container">

    <table id="guestsTable" class="display" width="auto">
    <thead>
        <tr>
            <th>Id</th>
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
            { data: 'entry_datetime' },
            { data: 'confirmation_datetime' },
            { data: 'exit_datetime' },
            { data: 'permanent' },
            { data: 'consent' },
            { data: 'comment' },
            { data: null,
                    orderable: false,
                    render: function(data, type, row) {
                    return `
                        <div class="action-buttons">
                            <a href="<?= site_url('dashboard/confirm/') ?>${row.id}" class="btn-icon confirm" onclick="event.stopPropagation()" title="Potwierdź wejście">✅</a>
                            <a href="<?= site_url('dashboard/exit/') ?>${row.id}" class="btn-icon exit" onclick="event.stopPropagation()" title="Zarejestruj wyjście">🚪</a>    
                            <a href="<?= site_url('dashboard') ?>/${row.id}" class="btn-icon view" onclick="event.stopPropagation()">🔍</a>
                            <a href="<?= site_url('dashboard/edit') ?>/${row.id}" class="btn-icon edit" onclick="event.stopPropagation()">✎</a>
                            <a href="<?= site_url('dashboard/delete') ?>/${row.id}" class="btn-icon delete" onclick="return confirm('Usunąć?') && event.stopPropagation()">🗑️</a>
                        </div>
                    `;
                }
            }
        ],
        order: [[0, 'desc']],
        columnDefs: [
            { width: '3%', targets: 0 },
            { width: '7%', targets: 1 },
            { width: '7%', targets: 2 },
            { width: '5%', targets: 4 }
        ],
        responsive: true,
    });
});
</script>
<?= $this->endSection() ?>

