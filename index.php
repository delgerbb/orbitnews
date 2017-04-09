<?php
include($_SERVER['DOCUMENT_ROOT'] . "/orbitnews/cfg_khovdgov.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Orbit News</title>

        <?php
        include(SEC_ROOT . "sec_head.php");
        ?>

    </head>
    <body>
        <?php
        echo($printFace->printPostNames());
        include(SEC_ROOT . "sec_header.php");
        ?>

        <?php
        include(SEC_ROOT . "sec_main_content.php");
        ?>

        <?php
        include(SEC_ROOT . "sec_scripts.php");
        ?>
    </body>
</html>