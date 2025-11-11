<?= $this->extend('layouts/default') ?>
    
<?= $this->section('title') ?>
    Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        
    <h2>Welcome to Dashboard</h2>

    <table id="guestTable" class="display" width="auto">
        <thead>
            <tr>
                <th></th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Firma</th>
                <th>Osoby</th>
                <th>Opiekun</th>
                <th>Cel</th>
                <th>Brama</th>
                <th>Data wejścia</th>
                <th>Potwierdzenie wizyty</th>
                <th>Data wyjścia</th>
                <th>Trwałość</th>
                <th>Zgoda</th>
                <th>Wyjście</th>
                <th>Komentarz</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guest_entry_logs as $guest_entry_log): ?>
            <tr>
                <td class="dt-control"></td>
                <td>
                    <a href="<?= site_url('/dashboard/' . $guest_entry_log["id"]) ?>">
                        <?= esc($guest_entry_log["fname"]) ?>
                    </a>
                </td>
                <td>
                    <a href="<?= site_url('/dashboard/' . $guest_entry_log["id"]) ?>">
                        <?= esc($guest_entry_log["sname"]) ?>
                    </a>
                </td>
                <td><?= esc($guest_entry_log["guest_company"]) ?></td>
                <td><?= esc($guest_entry_log["guest_count"]) ?></td>
                <td><?= esc($guest_entry_log["guardian"]) ?></td>
                <td><?= esc($guest_entry_log["purpose"]) ?></td>
                <td><?= esc($guest_entry_log["zone"]) ?></td>
                <td><?= esc($guest_entry_log["entry_date"]) ?></td>
                <td><?= esc($guest_entry_log["confirmation_date"]) ?></td>
                <td><?= esc($guest_entry_log["exit_date"]) ?></td>
                <td><?= esc($guest_entry_log["permanent"]) ?></td>
                <td><?= esc($guest_entry_log["consent"]) ?></td>
                <td><a>cofnij</a></td>
                <td><?=esc($guest_entry_log["comment"]) ?></td>
                <td><a>View</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>

    <script>
    
        function format(d) {
        let columnsToShow = [
            { header: 'Imie', key: 'fname' },
            { header: 'Nazwisko', key: 'sname' },
            { header: 'Firma', key: 'guest_company' },
            { header: 'Opiekun', key: 'guardian' },
            { header: 'Cel wizyty', key: 'purpose' },
            { header: 'Komentarz', key: 'comment' }
        ];
        
        let html = '<div>';
        
        columnsToShow.forEach(function(column) {
            html += '<div><b>' + column.header + ':</b> ' + d[column.key] + '</div>';
        });
        
        html += '</div>';
        return html;
        }

        $(document).ready(function() {
            let table = new DataTable('#guestTable');
        
        $('#guestTable').on('click', 'td.dt-control', function () {
            let $this = $(this);
            let $tr = $this.closest('tr');
            let row = table.row($tr);
            
            let rowData = {
                fname: $tr.find('td:eq(1)').text(),
                sname: $tr.find('td:eq(2)').text(),
                guest_company: $tr.find('td:eq(3)').text(),
                guardian: $tr.find('td:eq(5)').text(),
                purpose: $tr.find('td:eq(6)').text(),
                comment: $tr.data('comment')
            };
            
            if (row.child.isShown()) {
                row.child.hide();
                
            } else {
                row.child(format(rowData)).show();
                
            }
        });
    });
    </script>

<?= $this->endSection() ?>