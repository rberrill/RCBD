/*
* slides_load: Setup information for Jill and Rich Wedding Site
* Intructions: http://slidesjs.com
* By: Nathan Searles, http://nathansearles.com
* Version: 1.0.0
* Updated: August 15th, 2011
*/

jQuery(function(){
    jQuery('#slides').slides({
        preload: true,
        preloadImage: '<?php echo get_stylesheet_directory_uri(); ?>/img/slides/loading.gif',
        play: 2500,
        pause: 1250,
        effect: 'fade',
        hoverPause: true,
        crossfade: true,
        generatePagination: true,
    });
});

            jQuery(document).ready(function() {

                jQuery(".rollover").hover(
                    function()
                    {
                        this.src = this.src.replace("_off","_on");
                    },
                    function()
                    {
                        this.src = this.src.replace("_on","_off");
                    }
                );

                jQuery('a.prev').hide();
                jQuery("div.prev").hover(
                    function()
                    {
                        jQuery('a.prev').fadeIn(300);
                    },
                    function()
                    {
                        jQuery('a.prev').fadeOut(300);
                    }
                );

                jQuery('a.next').hide();
                jQuery("div.next").hover(
                    function()
                    {
                        jQuery('a.next').fadeIn(300);
                    },
                    function()
                    {
                        jQuery('a.next').fadeOut(300);
                    }
                );

            });

