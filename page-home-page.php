<?php get_header(); ?>
<div id="contentWrapper" class="container">
    <div id="introContent">
        <div class="introBlock span-8">
            <h4>Intro 1</h4>
            <p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intro.png" />
                Tortor lorem orci at sapien eget. Praesent in, luctus sit libero diam tellus, sociis wisi taciti diam amet. Lacus morbi augue ante, at justo sit semper, elit mi enim magna etiam. Massa quis eleifend placerat at venenatis euismod.
            </p>
        </div>
        <div class="introBlock span-8">
            <h4>Intro 2</h4>
            <p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intro.png" />
                Ligula pellentesque lacus viverra donec diam egestas. Mauris tortor gravida dolor nulla phasellus velit, consequat felis parturient sodales nascetur urna elit, pellentesque rutrum accumsan, placerat curabitur euismod, pede amet congue. Vivamus nulla orci et lectus consequat donec.
            </p>
        </div>
        <div class="introBlock span-8 last">
            <h4>Intro 3</h4>
            <p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intro.png" />
                Sit euismod error tincidunt suscipit, porta tristique erat nisl diam. Sem dictum id, nec vitae rutrum pellentesque in integer, ornare wisi orci id sem in, eget sollicitudin amet sit interdum mauris, condimentum urna.
            </p>
        </div>
        <div class="clearfix"></div>
        <div class="introLink span-8">
            <p>
                <a href="#" class="learnMore">
                    Learn More
                </a>
            </p>
        </div>
        <div class="introLink span-8">
            <p>
                <a href="#" class="learnMore">
                    Learn More
                </a>
            </p>
        </div>
        <div class="introLink span-8 last">
            <p>
                <a href="#" class="learnMore">
                    Learn More
                </a>
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="primaryContent">
        <div id="homepagePortfolio">
            <div id="portfolioInfo" class="push-1 span-5">
                <div style="float:right">
                    <a class="portfolioSliderPrev" href="#">&lt;</a>
                    <a class="portfolioSliderNext" href="#">&gt;</a>
                    <br clear="all" />
                </div>
                <h3>Portfolio</h3>
                <p>
                    Semper ante wisi ac nisl nec augue, justo dapibus taciti morbi nunc fringilla adipiscing, magna suspendisse varius, rutrum duis lacinia et tortor posuere.
                </p>
                <p>
                    <a href="#" class="button">View Portfolio</a>
                </p>
            </div>
            <div id="portfolioSlider" class="push-3 span-15 last">
                <div class="span-5">
                    <div class="portfolioSlide"></div>
                </div>
                <div class="span-5">
                    <div class="portfolioSlide"></div>
                </div>
                <div class="span-5 last">
                    <div class="portfolioSlide"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div id="subContent">
        <div id="testimonial" class="span-10">
            <h3>What Our Clients Say:</h3>
            <blockquote>
                <p>
                Dis eu neque nulla tincidunt, cursus ac euismod sodales eros vestibulum, at nam id tincidunt in elementum nibh, amet donec ac justo nullam vitae pretium. Felis vel suspendisse, ante cum suspendisse convallis nulla in sapien, rutrum luctus commodi libero elit tincidunt.
                </p>
            </blockquote>
        </div>
        <div id="onTheBlog" class="span-11 last">
            <h3>From the Blog</h3>
                <?php
                global $thumbnailSize;
                $thumbnailSize="home-page-small";
                global $getExcerpt;
                $getExcerpt = true;
                $args = array(
                    'posts_per_page' => 2,
                );
                $myposts = get_posts($args);
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    get_template_part("content", "loop");
                }
                ?>
            <p>
                <a href="#" class="button">More From the Blog</a>
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- End div primaryContent -->
</div>
<!-- End div contentWrapper -->
<?php get_footer(); ?>