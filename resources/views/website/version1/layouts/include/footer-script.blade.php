<div id="pys_ajax_events"></div>
<script>
    var node = document.getElementsByClassName('woocommerce-message')[0];
    if (node && document.getElementById('pys_late_event')) {
        var messageText = node.textContent.trim();
        if (!messageText) {
            node.style.display = 'none';
        }
    }
</script>
<script type="text/html" id="wpb-modifications"></script>
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<script type="text/template" id="tmpl-variation-template">

</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<link rel="stylesheet" id="wc-blocks-style-css"
    href="{{asset('version1/')}}/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksa294.css?ver=wc-9.0.2" type="text/css"
    media="all" />
<script type="text/javascript" src="{{asset('version1/')}}/wp-content/plugins/contact-form-7/includes/swv/js/indexa950.js?ver=5.9.6"
    id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/chuijhal.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-content/plugins/contact-form-7/includes/js/indexa950.js?ver=5.9.6"
    id="contact-form-7-js"></script>
<script type="text/javascript"
    src="{{asset('version1/')}}/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min9e2b.js?ver=9.0.2"
    id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
    /* <![CDATA[ */
    var wc_order_attribution = {
        "params": {
            "lifetime": 1.0e-5,
            "session": 30,
            "base64": false,
            "ajaxurl": "https:\/\/chuijhal.com\/wp-admin\/admin-ajax.php",
            "prefix": "wc_order_attribution_",
            "allowTracking": true
        },
        "fields": {
            "source_type": "current.typ",
            "referrer": "current_add.rf",
            "utm_campaign": "current.cmp",
            "utm_source": "current.src",
            "utm_medium": "current.mdm",
            "utm_content": "current.cnt",
            "utm_id": "current.id",
            "utm_term": "current.trm",
            "utm_source_platform": "current.plt",
            "utm_creative_format": "current.fmt",
            "utm_marketing_tactic": "current.tct",
            "session_entry": "current_add.ep",
            "session_start_time": "current_add.fd",
            "session_pages": "session.pgs",
            "session_count": "udata.vst",
            "user_agent": "udata.uag"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{asset('version1/')}}/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min9e2b.js?ver=9.0.2"
    id="wc-order-attribution-js"></script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-content/themes/vitrine/assets/js/allscripts.min5152.js?ver=1.0"
    id="epico_allscripts-js"></script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-content/themes/vitrine/assets/js/modernizr.minf7ff.js?ver=2.8.3"
    id="epico_modernizr-js"></script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-content/themes/vitrine/assets/js/modifiedscripts.min5152.js?ver=1.0"
    id="epico_modifiedscripts-js"></script>
<script type="text/javascript" id="mediaelement-core-js-before">
    /* <![CDATA[ */
    var mejsL10n = {
        "language": "en",
        "strings": {
            "mejs.download-file": "Download File",
            "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
            "mejs.fullscreen": "Fullscreen",
            "mejs.play": "Play",
            "mejs.pause": "Pause",
            "mejs.time-slider": "Time Slider",
            "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
            "mejs.live-broadcast": "Live Broadcast",
            "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
            "mejs.unmute": "Unmute",
            "mejs.mute": "Mute",
            "mejs.volume-slider": "Volume Slider",
            "mejs.video-player": "Video Player",
            "mejs.audio-player": "Audio Player",
            "mejs.captions-subtitles": "Captions\/Subtitles",
            "mejs.captions-chapters": "Chapters",
            "mejs.none": "None",
            "mejs.afrikaans": "Afrikaans",
            "mejs.albanian": "Albanian",
            "mejs.arabic": "Arabic",
            "mejs.belarusian": "Belarusian",
            "mejs.bulgarian": "Bulgarian",
            "mejs.catalan": "Catalan",
            "mejs.chinese": "Chinese",
            "mejs.chinese-simplified": "Chinese (Simplified)",
            "mejs.chinese-traditional": "Chinese (Traditional)",
            "mejs.croatian": "Croatian",
            "mejs.czech": "Czech",
            "mejs.danish": "Danish",
            "mejs.dutch": "Dutch",
            "mejs.english": "English",
            "mejs.estonian": "Estonian",
            "mejs.filipino": "Filipino",
            "mejs.finnish": "Finnish",
            "mejs.french": "French",
            "mejs.galician": "Galician",
            "mejs.german": "German",
            "mejs.greek": "Greek",
            "mejs.haitian-creole": "Haitian Creole",
            "mejs.hebrew": "Hebrew",
            "mejs.hindi": "Hindi",
            "mejs.hungarian": "Hungarian",
            "mejs.icelandic": "Icelandic",
            "mejs.indonesian": "Indonesian",
            "mejs.irish": "Irish",
            "mejs.italian": "Italian",
            "mejs.japanese": "Japanese",
            "mejs.korean": "Korean",
            "mejs.latvian": "Latvian",
            "mejs.lithuanian": "Lithuanian",
            "mejs.macedonian": "Macedonian",
            "mejs.malay": "Malay",
            "mejs.maltese": "Maltese",
            "mejs.norwegian": "Norwegian",
            "mejs.persian": "Persian",
            "mejs.polish": "Polish",
            "mejs.portuguese": "Portuguese",
            "mejs.romanian": "Romanian",
            "mejs.russian": "Russian",
            "mejs.serbian": "Serbian",
            "mejs.slovak": "Slovak",
            "mejs.slovenian": "Slovenian",
            "mejs.spanish": "Spanish",
            "mejs.swahili": "Swahili",
            "mejs.swedish": "Swedish",
            "mejs.tagalog": "Tagalog",
            "mejs.thai": "Thai",
            "mejs.turkish": "Turkish",
            "mejs.ukrainian": "Ukrainian",
            "mejs.vietnamese": "Vietnamese",
            "mejs.welsh": "Welsh",
            "mejs.yiddish": "Yiddish"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-includes/js/mediaelement/mediaelement-and-player.min1f61.js?ver=4.2.17"
    id="mediaelement-core-js"></script>
<script type="text/javascript"
    src="{{asset('version1/')}}/wp-includes/js/mediaelement/mediaelement-migrate.min2718.js?ver=a091ed573bab13050d805822863c35a1"
    id="mediaelement-migrate-js"></script>
<script type="text/javascript" id="mediaelement-js-extra">
    /* <![CDATA[ */
    var _wpmejsSettings = {
        "pluginPath": "\/wp-includes\/js\/mediaelement\/",
        "classPrefix": "mejs-",
        "stretching": "responsive",
        "audioShortcodeLibrary": "mediaelement",
        "videoShortcodeLibrary": "mediaelement"
    };
    /* ]]> */
</script>
<script type="text/javascript" id="epico_custom-js-extra">
    /* <![CDATA[ */
    var epico_theme_vars = {
        "url": "https:\/\/chuijhal.com",
        "home_url": "https:\/\/chuijhal.com\/",
        "img": "https:\/\/chuijhal.com\/wp-content\/themes\/vitrine\/assets\/img",
        "ajax_url": "https:\/\/chuijhal.com\/wp-admin\/admin-ajax.php",
        "nonce": "3f309553af",
        "zoomLevel": "1",
        "iconMap": "https:\/\/chuijhal.com\/wp-content\/themes\/vitrine\/assets\/img\/marker.png",
        "customMap": "1",
        "cityMapCenterLat": "",
        "cityMapCenterLng": "",
        "customApiKey": "",
        "ApiKey": "0",
        "scrolling_speed": "1005",
        "scrolling_easing": "easeInOutQuart",
        "additionaljs": ""
    };
    var no_ajax_objects = {
        "no_ajax_pages": ["https:\/\/chuijhal.com\/wp-login.php?action=logout&_wpnonce=fbb9ec52a0"]
    };
    var paged_data = {
        "startPage": "1",
        "maxPages": "98",
        "nextLink": "https:\/\/chuijhal.com\/page\/2\/",
        "loadingText": "Loading...",
        "loadMoreText": "more posts",
        "noMorePostsText": "No More Posts"
    };
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-content/themes/vitrine/assets/js/custom.minbc19.js?ver=4.2" id="epico_custom-js">
</script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-content/themes/vitrine/assets/js/lg-custom-package.min01e0.js?ver=1.2.22"
    id="epico_lightGallery-js"></script>
<script type="text/javascript" id="wpb_composer_front_js-js-extra">
    /* <![CDATA[ */
    var vcData = {
        "currentTheme": {
            "slug": "vitrine"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{asset('version1/')}}/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.mine1b2.js?ver=6.9.0"
    id="wpb_composer_front_js-js"></script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('version1/')}}/wp-includes/js/wp-util.min2718.js?ver=a091ed573bab13050d805822863c35a1"
    id="wp-util-js"></script>
<script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{asset('version1/')}}/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min9e2b.js?ver=9.0.2"
    id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
