<?php get_header(); ?>
<div id="contentWrapper" class="container">
    <div id="primaryContent">
        <?php
        if (have_posts()) {
            get_template_part("content", "loop");
        } else {
            get_template_part("content", "search");
        }
        ?>
    </div>
    <!-- End div primaryContent -->
</div>
<!-- End div contentWrapper -->
<?php get_footer(); ?>