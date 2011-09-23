<?php
if (!is_page()) {
    while (have_posts()) {
        the_post();
        ?>
        <article>
            <h1>
                <?php the_title(); ?>
            </h1>
            <?php
            the_content();
            ?>
        </article>
        <?php
    }
} else {
    while (have_posts()) {
        the_post();
        ?>
        <div id="pageHeader" class="span-24 append-bottom">
            <h1 class="fancyFont">
                <?php the_title(); ?>
            </h1>
        </div>
        <div id="pageContent" class="span-18 push-6 last">
            <article>
                <?php
                the_content();
                ?>
            </article>
        </div>
        <?php
    }
}