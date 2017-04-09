<!-- Container -->
<section class="container row clearfix">
    <?php
    include(SEC_ROOT . "sec_content_header.php");
    ?>

    <!-- Inner Container -->
    <section class="inner-container clearfix">
        <!-- Content -->
        <section id="content" class="eight column row pull-left">

            <?php
            include(SEC_ROOT . "sec_front_slider.php");
            ?>

            <?php
            include(SEC_ROOT . "sec_category_posts_1.php");
            ?>

            <?php
            include(SEC_ROOT . "sec_carousel_posts.php");
            ?>

            <?php
            include(SEC_ROOT . "sec_front_ads.php");
            ?>

            <?php
            include(SEC_ROOT . "sec_category_posts_2.php");
            ?>

            <?php
            include(SEC_ROOT . "sec_gallery_posts.php");
            ?>

        </section>
        <!-- Content -->

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