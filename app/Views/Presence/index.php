<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Obecność<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Obecność</h2>
    
    <!-- Tabela dla DataTables -->
    
<table id="PresenceTable" class="display">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Numer Karty</th>
            <th>Numer Czytnika</th>
            <th>Imie i Nazwisko</th>
            <th>Rok</th>
            <th>Miesiąc</th>
            <th>Dzień</th>
            <th>Godzina</th>
            <th>Minuta</th>
            <th>Sekunda</th>
        </tr>
    </thead>

</table>

<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"> </script>

<script >

$(document).ready(function() {
    $('#PresenceTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'ID' },
            { data: 'NR_KARTY' },
            { data: 'NR_CZYTNIKA' },
            { data: 'name' },
            { data: 'ROK'},
            { data: 'MIESIAC'},
            { data: 'DZIEN'},
            { data: 'GODZINA'},
            { data: 'MINUTA'},
            { data: 'SEKUNDA'},
            
        ],
        order: [[0, 'desc']],
        columnDefs: [
            { width: '2%', targets: 0 },
            { width: '2%', targets: 1 },
            { width: '1%', targets: 2 }

            
        ]   
    });
});
</script>
<?= $this->endSection() ?>