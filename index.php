<?php
include_once 'db_func/asuransi_func.php';
include_once 'db_func/pasien_func.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="datatables.min.css">
    <script type="text/javascript" src="datatables.min.js"></script>
</head>
<body marginwidth=7.5%>
<nav>
    <h1>
        <a href="?menu=pasien"> Data Pasien</a>
          |
        <a href="?menu=asuransi"> Data Asuransi </a>
    </h1>
</nav>
<main>
    <?php
    $targetmenu = filter_input(INPUT_GET, 'menu');
    switch ($targetmenu) {
        case 'pasien':
            include_once 'view/pasien.php';
            break;
        case 'asuransi':
            include_once 'view/asuransi.php';
            break;
        default:
            include_once 'index.php';
            break;
    }
    ?>
</main>
</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</html>
