<?php
require "clases/library.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="fa/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <?php
    require "clases/header.php";
    ?>
    <div id="main">
        <?php
        foreach ($mainModules as $module) {
            $module->render();
        }
        ?>
    </div><!-- end #main -->
    <div id="sidebar">
        <?php
        foreach ($sidemodules as $module) {
            $module->render();
        }
        ?>
    </div><!-- end #sidebar -->
    <div id="footer">
        <p>Copyright &copy; Alija Delic 2018</p>
    </div><!-- end #footer -->
</div><!-- end #wrapper -->
</body>
</html>












