<?php
include '../autoload.php';
if (!defined('_LOGADO_')) {
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Suporte 1.0</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/style.man.css" rel="stylesheet">
        <link href="../css/main-css.css" rel="stylesheet">
        <link href="../css/style_neoinovat.css" rel="stylesheet">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../css/DT_bootstrap.css" rel="stylesheet">
        <script src="../js/jquery-1.10.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.form.js"></script>
        <script src="../js/jquery.cookie.js"></script>
        <script src="../js/plugins_neoinovat.js"></script>
        <script src="../js/jquery.dataTables.js"></script>
        <script src="../js/DT_bootstrap.js"></script>
        <script src="../js/main.js"></script>
    </head>
    <body>
        <?php
        include '../_views/topo.php';
        ?>
        <br/><br/>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <?php include '../_views/menus.php'; ?>
                </div>
                <div class="span9 text-center">
                    <div class="row-fluid">
                        <h2>Uploads de Arquivos</h2>
                    </div>
                    <?php
                    include '_views/content.php';
                    ?>
                </div>
            </div>
        </div>
    </script>
</body>
</html>
