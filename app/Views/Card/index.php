<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>Card<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Karty RCP</h2>

    <h3><a href="<?= url_to("Card::new") ?>">Nowy</a></h3>
    
    <!-- Tabela dla DataTables -->
    
<table id="CardTable" class="display">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Numer</th>
            <th>Aktywna</th>
            <th>Akcje</th>
        </tr>
    </thead>

</table>

<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"> </script>

<script >

$(document).ready(function() {
    $('#CardTable').DataTable({
        data: <?= $jsonData ?>,
        columns: [
            { data: 'id_card' },
            { data: 'card_number' },
            { data: 'active' },
            { data: null,
                    orderable: false,
                    render: function(data, type, row) {
                    return `
                        <div class="action-buttons">
                            <a href="<?= site_url('card') ?>/${row.id_card}" class="btn-icon view" onclick="event.stopPropagation()">🔍</a>
                            <a href="<?= site_url('card/edit') ?>/${row.id_card}" class="btn-icon edit" onclick="event.stopPropagation()">✎</a>
                            <a href="<?= site_url('card/delete') ?>/${row.id_card}" class="btn-icon delete" onclick="return confirm('Usunąć?') && event.stopPropagation()">🗑️</a>
                        </div>
                    `;
                }
            }
        ],
        order: [[0, 'desc']],
        columnDefs: [
            { width: '2%', targets: 0 },
            { width: '5%', targets: 3 }
        ]   
    });
});
</script>
<?= $this->endSection() ?>