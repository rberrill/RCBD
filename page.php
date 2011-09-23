<?php get_header(); ?>
<div id="contentWrapper" class="container">
    <div id="primaryContent">
        <?php
        if (have_posts()) {
            get_template_part("content", "page");
        } else {
            get_template_part("content", "search");
        }
        ?>
        <!-- End div primaryContent -->
        <aside class="span-6 pull-18">
            <div id="sidebarContent">
                <?php get_sidebar(); ?>
            </div>
        </aside>
    </div>
</div>
<!-- End div contentWrapper -->
<?php get_footer(); ?>