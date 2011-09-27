<?php
global $thumbnailSize;
if (!$thumbnailSize) {
    $thumbnailSize = 'home-page-small';
}
?>
<article>
    <h4>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h4>
    <span class="authorMeta">
        <?php echo get_the_date("F jS, Y"); ?> <?php the_author(); ?>
    </span>
    <p>
        <?php
        if (has_post_thumbnail()) {
            $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            ?>
            <a href="<? echo $image_data[0]; ?>" rel="lightbox"> <?php the_post_thumbnail($thumbnailSize); ?></a>
            <?php
        }
        ?>

        <?php
        global $getExcerpt;
        if ($getExcerpt == true) {
            the_excerpt();
        } else {
            the_content();
        }
        ?>
    </p>
</article>