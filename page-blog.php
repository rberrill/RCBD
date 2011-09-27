<?php
/**
 * Template Name: Blog 
 */
?>
<?php get_header(); ?>
<div id="contentWrapper" class="container">
    <div id="primaryContent">
        <div id="pageHeader" class="span-24 append-bottom">
            <h1 class="fancyFont">
                <?php the_title(); ?>
            </h1>
        </div>
        <div id="pageContent" class="span-18 push-6 last">
            <?php
            if (have_posts()) {
                get_template_part("content", "blogpage");
            } else {
                get_template_part("content", "search");
            }
            ?>
        </div>
        <!-- End div primaryContent -->
        <aside class="span-6 pull-18">
            <div id="sidebarContent">
                <?php get_sidebar(); ?>
            </div>
        </aside>
        <div class="clearfix"></div>
    </div>
</div>
<!-- End div contentWrapper -->
<?php get_footer(); ?>
