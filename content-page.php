<?php
while (have_posts()) {
    the_post();
    ?>
    <article>
        <?php
        the_content();
        ?>
    </article>
    <?php
}