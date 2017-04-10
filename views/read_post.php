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
        include(SEC_ROOT . "sec_header.php");
        ?>

        <!-- Container -->
        <section class="container row clearfix">
            <?php
            include(SEC_ROOT . "sec_content_header.php");
            ?>

            <!-- Inner Container -->
            <section class="inner-container clearfix">
                <?php
                include(SEC_ROOT . "sec_read_post.php");
                ?>

                <?php
                include(SEC_ROOT . "sec_sidebar.php");
                ?>

                <?php
                include(SEC_ROOT . "sec_footer.php");
                ?>
            </section>
            <!-- End Inner Container -->
        </section>
        <!-- End Container -->

        <?php
        include(SEC_ROOT . "sec_scripts.php");
        ?>
    </body>
</html>