<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title><?= $this->renderSection('title') ?></title>
    <base href="<?= base_url()?>" />
    <style>
        /* PODSTAWOWE STYLE STRONY */
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 1em;
            background: #fff;
        }

        main {
            max-width: 100%; /* lub 100% dla pełnej szerokości */
            width: auto;
            margin: 20px auto;
            padding: 20px;
        }

        /* Pasek menu */
        nav {
            background-color: #333;
            overflow: hidden;
            width: 100vw;
            margin-left: calc(-50vw + 50%);
        }

        /* Linki w menu */
        nav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        /* Po najechaniu */
        nav a:hover {
            background-color: #575757;
        }

        /* Aktywny link */
        .active {
            background-color: #ec1f04ff;
        }

        /* STOPKA */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            width: 100vw;
            margin-left: calc(-50vw + 50%);
        }

        /* STYLE DLA DATATABLES - PEŁNA SZEROKOŚĆ */
        .dataTables_wrapper {
            width: 100% !important;
            max-width: 100% !important;
            margin: 20px auto !important;
        }

        table.dataTable {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 auto !important;
        }

        /* Wszystkie tabele z klasą 'display' */
        table.display {
            width: 100% !important;
            max-width: 100% !important;
        }


        .action-buttons {
            display: flex;
            gap: 6px;
            justify-content: center;
        }

        .btn-icon {
            text-decoration: none !important;
            font-size: 16px;
            padding: 6px 8px;
            border-radius: 4px;
            transition: all 0.2s ease;
            display: inline-flex;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
        }

        .btn-icon:hover {
            transform: scale(1.1);
            text-decoration: none !important;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .btn-icon.confirm:hover { background: #28a745; color: white; border-color: #28a745;}
        .btn-icon.exit:hover { background: #6c757d; color: white; border-color: #6c757d;}
        .btn-icon.view:hover { background: #007bff; color: white; border-color: #007bff; }
        .btn-icon.edit:hover { background: #ffc107; color: black; border-color: #ffc107; }
        .btn-icon.delete:hover { background: #dc3545; color: white; border-color: #dc3545; }
    </style>
</head>
<body>
        
    <!-- Menu -->
    <nav>
        <a href="<?= base_url('dashboard') ?>" class="<?= url_is('dashboard') && !url_is('dashboard/admin') ? 'active' : '' ?>">Goście</a>
        <a href="<?= base_url('guardian') ?>" class="<?= url_is('guardian*') ? 'active' : '' ?>">Opiekunowie</a>
        <a href="<?= base_url('department') ?>" class="<?= url_is('department*') ? 'active' : '' ?>">Działy</a>
        <a href="<?= base_url('person') ?>" class="<?= url_is('person*') ? 'active' : '' ?>">Osoby</a>
        <a href="<?= base_url('admin') ?>" class="<?= url_is('admin*') ? 'active' : '' ?>">Admin</a>
        <a href="<?= base_url('contact') ?>" class="<?= url_is('contact*') ? 'active' : '' ?>">Kontakt</a>
        <?php if (auth()->loggedIn()): ?>
            <a href="<?=url_to('logout')?>">Wyloguj</a>
        <?php else: ?>
            <a href="<?=url_to('login')?>">Zaloguj</a>
        <?php endif;?>
    </nav>

    
    <!-- Content -->
    <main>
        <?php if(session()->has('message')): ?>
            <?= session('message') ?>
        <?php endif; ?>
        
        <?= $this->renderSection('content') ?>
    </main>
    
    <!-- Footer -->
    <footer>
        &copy; <?php echo date("Y"); ?> Księga Gości PEC - Gliwice | Wszelkie prawa zastrzeżone
    </footer>

    <!-- DataTables JS -->
     <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    
</body>
</html>