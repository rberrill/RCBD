<?php
$args = array(
    'posts_per_page' => 6,
);
$myposts = get_posts($args);
foreach ($myposts as $post) {
    setup_postdata($post);
    global $thumbnailSize;
    $thumbnailSize="home-page-large";
    get_template_part("content", "loop");
}
?>
