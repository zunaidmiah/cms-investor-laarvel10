



<script type='text/javascript' src='/assets/new/js/jquery.js'></script>
<script type='text/javascript' src='/assets/new/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='/assets/new/js/masonry.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/jquery.lazy.js'></script>
<script type='text/javascript'>
jQuery(function($) {
jQuery("img.lazy").each(function() {
    var currentImg = jQuery(this);
    jQuery(this).Lazy({
        onFinishedAll: function() {
            currentImg.parent("div.post-featured-image-hover").removeClass("lazy");
            currentImg.parent(".tg_gallery_lightbox").parent("div.gallery_grid_item").removeClass("lazy");
            currentImg.parent("div.gallery_grid_item").removeClass("lazy");
        }
    });
});
});
</script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/modulobox.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/jquery.parallax-scroll.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/jquery.smoove.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/parallax.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/jquery.sticky-kit.min.js'></script>
<script type='text/javascript'>
jQuery(function($) {
jQuery("#page-content-wrapper .sidebar-wrapper").stick_in_parent({
    offset_top: 100
});
if (jQuery(window).width() < 768 || is_touch_device()) {
    jQuery("#page-content-wrapper .sidebar-wrapper").trigger("sticky_kit:detach");
}
});
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var tgAjax = {
    "ajaxurl": "http://",
    "ajax_nonce": "9b0db167ee"
};
/* ]]> */
</script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/avante-elementor.js'></script>
<script type='text/javascript' src='/assets/new/js/ui/core.min.js'></script>
<script type='text/javascript' src='/assets/new/js/ui/effect.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/tweenmax.min.js'></script>
<script type='text/javascript' src='/assets/new/js/waypoints.min.js'></script>
<script type='text/javascript' src='/assets/new/js/jquery.stellar.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var avantePluginParams = {
    "backTitle": "Back"
};
/* ]]> */
</script>
<script type='text/javascript' src='/assets/new/js/core/custom_plugins.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var avanteParams = {
    "menulayout": "leftalign",
    "fixedmenu": "1",
    "footerreveal": "1",
    "headercontent": "content",
    "lightboxthumbnails": "thumbnail",
    "lightboxtimer": "7000"
};
/* ]]> */
</script>
<script type='text/javascript' src='/assets/new/js/core/custom.js'></script>
<script type='text/javascript' src='/assets/new/js/jquery.tooltipster.min.js'></script>
<script type='text/javascript'>
jQuery(function($) {
    jQuery(".demotip").tooltipster({
        position: "left",
        multiple: true,
        theme: "tooltipster-shadow",
        delay: 0
    });
});
</script>
<script type='text/javascript' src='/assets/new/js/plugins/loftloader/assets/js/loftloader.min.js'></script>
{{-- <script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script> --}}
<script type='text/javascript' src='/assets/new/js/plugins/webfont.js'></script>
<script type='text/javascript'>
WebFont.load({
    google: {
        families: ['Roboto:400,500', 'Cabin:700,600']
    }
});
</script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/js/frontend-modules.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/flickity.pkgd.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/tilt.jquery.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/js/frontend-modules.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/avante-elementor/assets/js/momentum-slider.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/lib/swiper/swiper.min.js'></script>
<script type='text/javascript' src='/assets/new/js/ui/position.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/lib/dialog/dialog.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/lib/waypoints/waypoints.min.js'></script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/lib/swiper/swiper.min.js'></script>
<script type='text/javascript'>
var elementorFrontendConfig = {
    "environmentMode": {
        "edit": false,
        "wpPreview": false
    },
    "is_rtl": false,
    "breakpoints": {
        "xs": 0,
        "sm": 480,
        "md": 768,
        "lg": 1025,
        "xl": 1440,
        "xxl": 1600
    },
    "version": "2.8.2",
    "urls": {
        "assets": "http://"
    },
    "settings": {
        "page": [],
        "general": {
            "elementor_global_image_lightbox": "yes"
        },
        "editorPreferences": []
    },
    "post": {
        "id": 4074,
        "title": "Home 1",
        "excerpt": ""
    }
};
</script>
<script type='text/javascript' src='/assets/new/js/plugins/elementor/assets/js/frontend.min.js'></script>

<script>
// $('#onload').fancybox();
$(window).load(function() {
    $('#onload').click();
    $('.available-booking').removeClass('hidden');
});

</script>