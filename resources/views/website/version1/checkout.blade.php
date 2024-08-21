<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="pingback" href="https://chuijhal.com/xmlrpc.php" />
    <meta name="robots" content="noindex, follow" />

    <title>চেকআউট - চুইঝাল</title>
    <link rel="canonical" href="https://chuijhal.com/checkout/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="চেকআউট - চুইঝাল" />
    <meta property="og:url" content="https://chuijhal.com/checkout/" />
    <meta property="og:site_name" content="চুইঝাল" />
    <meta property="article:publisher" content="https://www.facebook.com/chuijhal.cooking/" />
    <meta property="article:modified_time" content="2019-02-28T07:58:49+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@chuijhal" />

    <script type="application/javascript" id="pys-version-script">console.log('PixelYourSite Free version 9.6.2');</script>
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="alternate" type="application/rss+xml" title="চুইঝাল &raquo; Feed" href="https://chuijhal.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="চুইঝাল &raquo; Comments Feed"
        href="https://chuijhal.com/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/chuijhal.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=a091ed573bab13050d805822863c35a1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel="stylesheet" id="epico_icomoon-style-css"
        href="https://chuijhal.com/wp-content/themes/vitrine/assets/css/icomoon.min.css?ver=4.2" type="text/css"
        media="all" />
    <link rel="stylesheet" id="epico_fonts-css"
        href="//fonts.googleapis.com/css?family=Hind+Siliguri%3A300%2C400%2C500%2C600%2C700&#038;ver=6.5.5"
        type="text/css" media="all" />
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css"
        href="https://chuijhal.com/wp-includes/css/dist/block-library/style.min.css?ver=a091ed573bab13050d805822863c35a1"
        type="text/css" media="all" />
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css"
        href="https://chuijhal.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.6" type="text/css"
        media="all" />
    <link rel="stylesheet" id="thwcfd-checkout-style-css"
        href="https://chuijhal.com/wp-content/plugins/woo-checkout-field-editor-pro/public/assets/css/thwcfd-public.min.css?ver=a091ed573bab13050d805822863c35a1"
        type="text/css" media="all" />
    <link rel="stylesheet" id="select2-css"
        href="https://chuijhal.com/wp-content/plugins/woocommerce/assets/css/select2.css?ver=9.0.2" type="text/css"
        media="all" />
    <link rel="stylesheet" id="woocommerce-layout-css"
        href="https://chuijhal.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=9.0.2"
        type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css"
        href="https://chuijhal.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=9.0.2"
        type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" id="woocommerce-general-css"
        href="https://chuijhal.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=9.0.2" type="text/css"
        media="all" />
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" id="wpsms-subscribe-css"
        href="https://chuijhal.com/wp-content/plugins/greenwebsms/assets/css/subscribe.css?ver=75.0.0" type="text/css"
        media="all" />
    <link rel="stylesheet" id="js_composer_front-css"
        href="https://chuijhal.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.9.0"
        type="text/css" media="all" />
    <link rel="stylesheet" id="vc-pricing-box-front-css"
        href="https://chuijhal.com/wp-content/plugins/vc-pricing-box/assets/pricing-box-frontend.css?ver=a091ed573bab13050d805822863c35a1"
        type="text/css" media="all" />
    <link rel="stylesheet" id="epico_theme-style-css"
        href="https://chuijhal.com/wp-content/themes/vitrine/assets/css/theme-styles.min.css?ver=4.2" type="text/css"
        media="all" />
    <link rel="stylesheet" id="epico_woocommerce-style-css"
        href="https://chuijhal.com/wp-content/themes/vitrine/assets/css/woocommerce.min.css?ver=4.2" type="text/css"
        media="all" />
    <style id="epico_woocommerce-style-inline-css" type="text/css">
        /* cart bg color */
        header.type9 .widget.widget_woocommerce-dropdown-cart,
        header.type1 .widget.widget_woocommerce-dropdown-cart,
        header.type2_3 .widget.widget_woocommerce-dropdown-cart,
        header.type4_5_6 .widget.widget_woocommerce-dropdown-cart {
            background-color: #1e1e1e;
            background-color: #fdfdfd;
        }

        /* toggle sidebar bg color */
        header .sidebartogglebtn {
            background-color: #ffffff;
        }

        /* Menu */
        aside.vertical_menu_area {
            background-color: #ffffff;
        }

        .vertical_menu_enabled .vertical_background_image {
            opacity: 0.3;
        }

        #menuBgColor {
            background-color: #ffffff;
        }

        /* background image in vertical menu opacity */
        .vertical_menu_enabled #menuBgColor {
            opacity: 0.3;
        }

        #epHeader #headerFirstState {
            border-bottom: 1px solid rgba(238, 238, 238, 0.29);
        }

        header #headerFirstState .sidebartogglebtn,
        header #headerFirstState .widget.widget_woocommerce-dropdown-cart {
            border: 1px solid rgba(238, 238, 238, 0.29);
        }

        #epHeader #headerSecondState {
            border-bottom: 1px solid #eee;
        }

        header #headerSecondState .sidebartogglebtn,
        header #headerSecondState .widget.widget_woocommerce-dropdown-cart {
            border: 1px solid #eee;
        }

        header.underlineHover #headerSecondState .navigation>ul>li:hover>a,
        header.underlineHover #headerSecondState .navigation li.active>a,
        header.underlineHover #headerSecondState .navigation>ul>li.current_page_item>a,
        header.underlineHover #headerSecondState .navigation>ul>li.current-menu-ancestor>a,
        header.fillhover #headerSecondState .navigation>ul>li:hover>a span,
        header.fillhover #headerSecondState .navigation li.active>a span,
        header.fillhover #headerSecondState .navigation>ul>li.current_page_item>a span,
        header.fillhover #headerSecondState .navigation>ul>li.current-menu-ancestor>a span,
        header.borderhover #headerSecondState .navigation>ul>li:hover>a span,
        header.borderhover #headerSecondState .navigation>ul>li.current_page_item>a span,
        header.borderhover #headerSecondState .navigation>ul>li.current-menu-ancestor>a span {
            color: #000000;
        }

        header.underlineHover #headerFirstState .navigation>ul>li:hover>a,
        header.underlineHover #headerFirstState .navigation>ul>li.active>a,
        header.underlineHover #headerFirstState .navigation>ul>li.current_page_item>a,
        header.underlineHover #headerFirstState .navigation>ul>li.current-menu-ancestor>a,
        header.fillhover #headerFirstState .navigation>ul>li:hover>a span,
        header.fillhover #headerFirstState .navigation li.active>a span,
        header.fillhover #headerFirstState .navigation>ul>li.current_page_item>a span,
        header.fillhover #headerFirstState .navigation>ul>li.current-menu-ancestor>a span,
        header.borderhover #headerFirstState .navigation>ul>li:hover>a span,
        header.borderhover #headerFirstState .navigation>ul>li.active>a span,
        header.borderhover #headerFirstState .navigation>ul>li.current_page_item>a span,
        header.borderhover #headerFirstState .navigation>ul>li.current-menu-ancestor>a span {
            color: #ffffff;
        }

        header.underlineHover #headerSecondState .navigation ul>li hr {
            background-color: #000000;
        }

        header.underlineHover #headerFirstState .navigation ul>li hr {
            background-color: #ffffff;
        }

        /* Submenu */

        header .navigation li div.menu-item-wrapper,
        header .navigation li ul {
            background-color: #fff;
        }


        header .navigation li.mega-menu-parent>.menu-item-wrapper>ul>li.special-last-child>ul>li:last-of-type:before,
        header .navigation li li>a {
            color: #222;
        }

        header .navigation>ul>li:not(.mega-menu-parent) li.menu-item-has-children:before,
        header .navigation>ul>li:not(.mega-menu-parent) li.menu-item-has-children:after {
            background: #222;
        }

        header.submenu_underlined .navigation ul li li>a span:not(.icon) span.menu_title:before {
            background-color: #222;
        }


        header .navigation li.mega-menu-parent div>ul>li.menu-item-has-children>a,
        header .navigation li.mega-menu-parent div>ul>li:not(.menu-item-has-children)>a {
            color: #111;
        }

        header.submenu_underlined .navigation li li>a:before,
        header .navigation li.mega-menu-parent li ul li.bottom-line:before,
        header .navigation li.mega-menu-parent div>ul>li.menu-item-has-children>a:after {
            background-color: #111;
        }


        header .search-button,
        aside.vertical_menu_area .search-button,
        header .navigation>ul>li>a,
        .vertical_menu_enabled .vertical_menu_area .vertical_menu_navigation li a {
            color: #000000;
        }

        .vertical_menu_enabled .vertical_menu_area .vertical_menu_navigation li a:hover,
        .vertical_menu_enabled .vertical_menu_area .vertical_menu_navigation li.active a.mp-back,
        .vertical_menu_enabled .vertical_menu_area .vertical_menu_navigation li.active>a {
            color: #000000 !important;
        }

        .vertical_menu_enabled .vertical_menu_area .vertical_menu_navigation li:hover,
        .vertical_menu_enabled .vertical_menu_area .vertical_menu_navigation li.active {
            background-color: #e8e8e8 !important;
        }

        #headerFirstState .menuBgColor {
            background-color: #ffffff;
        }

        header .navigation>ul>li .spanHover {
            background-color: #e8e8e8;
        }

        header .navigation>ul>li:hover .spanHover {
            background-color: #e8e8e8 !important;
        }

        #headerFirstState .search-button,
        #headerFirstState .navigation>ul>li>a {
            color: #282828;
        }

        header #headerFirstState .navigation>ul>li .spanHover {
            background-color: #ff692c !important;
        }

        header.borderhover #headerFirstState .navigation>ul>li>a:before,
        header.borderhover #headerFirstState .navigation>ul>li.active>a:before,
        header.borderhover #headerFirstState .navigation>ul>li.current_page_item>a:before,
        header.borderhover #headerFirstState .navigation>ul>li.current-menu-ancestor>a:before {
            background-color: #ff692c;
        }

        header.borderhover .navigation>ul>li>a:before,
        header.borderhover .navigation>ul>li.active>a:before,
        header.borderhover .navigation>ul>li.current_page_item>a:before,
        header.borderhover .navigation>ul>li.current-menu-ancestor>a:before {
            background-color: #e8e8e8;
        }

        /* Anchor */
        a {
            color: #ff4c2f;
        }

        a:hover {
            color: #cbcbcb;
        }

        /* Text Selection */
        ::-moz-selection {
            background: #ff4c2f;
            /* Firefox */
        }

        ::selection {
            background: #ff4c2f;
            /* Safari */
        }

        .woocommerce #content input.button,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce-page #content input.button,
        .woocommerce-page a.button,
        .woocommerce-page button.button,
        .woocommerce-page input.button,
        .woocommerce.single-product .nice-select ul.list li:first-child:hover,
        .woocommerce a.button,
        .woocommerce-page a.button,
        .woocommerce a.button.alt,
        .woocommerce-page a.button.alt,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce input.button#place_order,
        .product.woocommerce.add_to_cart_inline a.added_to_cart,
        #ep-modal.shown a[rel="next"]:hover,
        #ep-modal.shown a[rel="prev"]:hover,
        .widget.widget_woocommerce-wishlist a span.wishlist_items_number,
        .vertical_menu_enabled .vertical_menu_area .widget.widget_woocommerce-dropdown-cart .cartContentsCount,
        .woocommerce ul.products li.product a.added_to_cart,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active:before,
        .woocommerce div.product .woocommerce-tabs ul.tabs li:before,
        #product-fullview-thumbs .swiper-button-prev:hover:before,
        #product-fullview-thumbs .swiper-button-prev:hover:after,
        #product-fullview-thumbs .swiper-button-next:hover:before,
        #product-fullview-thumbs .swiper-button-next:hover:after,
        .woocommerce.single-product .nice-select ul.list li:first-child:hover,
        #prev-product a[rel="next"]:hover,
        #next-product a[rel="prev"]:hover,
        .woocommerce ul.products.infoOnClick li.product span.show-hover,
        div.woocommerce.single-product2 .product-fullview-thumbs .swiper-button-prev:hover:before,
        div.woocommerce.single-product2 .product-fullview-thumbs .swiper-button-prev:hover:after,
        div.woocommerce.single-product2 .product-fullview-thumbs .swiper-button-next:hover:before,
        div.woocommerce.single-product2 .product-fullview-thumbs .swiper-button-next:hover:after,
        .masonryBlog .swiper-button-prev:hover:after,
        .masonryBlog .swiper-button-next:hover:after,
        .masonryBlog .swiper-button-prev:hover:before,
        .masonryBlog .swiper-button-next:hover:before,
        .blog-masonry-container.ep_quote,
        .progress_bar .progressbar_percent:after,
        .progress_bar .progressbar_percent,
        .post-meta .hr-extra-small.hr-margin-small,
        .cblog .readmore_button:hover,
        .touchevents #comment-text .button.button-large,
        #comment-text .button.button-large:hover,
        .touchevents .woocommerce #commentform .button.button-large,
        .woocommerce #commentform .button.button-large:hover,
        .testimonials .quot-icon,
        .tabletBlog .moretag:hover,
        .desktopBlog .moretag:hover,
        .pieChart .dot-container .dot,
        .wpb_toggle.wpb_toggle_title_active:after,
        #content h4.wpb_toggle.wpb_toggle_title_active:after,
        .team-member:hover .member-plus,
        .iconbox.circle .icon span.glyph,
        .iconbox.rectangle .icon span.glyph,
        .custom-title .shape-container .hover-line,
        .portfolioSection #loader:before,
        .portfolioSection #loader:after,
        .showcase .item-list li span:before,
        .toggleSidebar .cartSidebarHeader .cartContentsCount,
        .lazy-load-hover-container:before,
        .lazy-load-hover-container:after,
        .widget.widget_woocommerce-dropdown-cart li .qbutton.chckoutbtn,
        header .widget.widget_woocommerce-dropdown-cart .cartContentsCount,
        .woocommerce form.register input.button,
        .woocommerce form.login input.button,
        .woocommerce form.login input.button:hover,
        .woocommerce form.register input.button:hover,
        .woocommerce button.button.alt,
        input[type="submit"].dokan-btn-theme,
        a.dokan-btn-theme,
        .dokan-btn-theme,
        input[type="submit"].dokan-btn-theme:hover,
        a.dokan-btn-theme:hover,
        .dokan-btn-theme:hover,
        .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.active,
        .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover,
        .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover,
        input[type="submit"].dokan-btn-theme:hover,
        .dokan-btn-theme:hover,
        input[type="submit"].dokan-btn-theme:focus,
        a.dokan-btn-theme:focus,
        .dokan-btn-theme:focus,
        input[type="submit"].dokan-btn-theme:active,
        a.dokan-btn-theme:active,
        .dokan-btn-theme:active,
        input[type="submit"].dokan-btn-theme.active,
        a.dokan-btn-theme.active,
        .dokan-btn-theme.active,
        .open .dropdown-toggleinput[type="submit"].dokan-btn-theme,
        .open .dropdown-togglea.dokan-btn-theme,
        .open .dropdown-toggle.dokan-btn-theme,
        .widget-area .product-categories li.cat-item.current-cat>a:before,
        #ep-modal .woocommerce #customer_login a.register-link:before,
        .galleryexternallink,
        .page-load-status .view-more-button:hover,
        .ep-popup-newsletter-shortcode .widget_wysija_cont .wysija-submit {
            background-color: #ff4c2f;
        }

        .nice-select .option:hover,
        .woocommerce .woocommerce-error a:hover,
        .woocommerce .woocommerce-message a:hover,
        .woocommerce .woocommerce-info a:hover,
        table.compare-list .add-to-cart td a:hover,
        .sidebar .widget_shopping_cart_content a.checkout.wc-forward.button,
        .widget_shopping_cart_content a.wc-forward.button,
        .nice-select .option:hover,
        .toggleSidebar.cartSidebarContainer .cart-bottom-box .buttons a.checkout {
            background-color: #ff4c2f !important;
        }

        .woocommerce ul.products li.product a:hover h3,
        .woocommerce ul.products li.product a:hover h2,
        .woocommerce ul.products.infoOnClick li.product .hover-content a:hover h3,
        .woocommerce ul.products li.product .price ins,
        .woocommerce-page ul.products li.product .price ins,
        .woocommerce .cart-collaterals .cart_totals tr.order-total strong,
        .woocommerce table.shop_table td.product-subtotal span,
        .woocommerce table.shop_table form.woocommerce-shipping-calculator a,
        .woocommerce div.product p.stock,
        .woocommerce ul.products.instantShop li.product .compare.button:hover:before,
        .product-buttons .shop_wishlist_button.wishlist-link:before,
        .project-detail li:last-child .project-subtitle a:hover,
        .blog-masonry-container .post-author-meta .post-author a:hover,
        .blog-masonry-container .post-author-meta .meta-comment-count a:hover,
        .star-rating span,
        .star-rating span,
        .widget-area .product-categories li.current-cat>a,
        .widget-area .product-subcategories li.current-cat>a,
        table.compare-list .price td .amount,
        li.product .product-buttons .compare.button:hover:before,
        table.compare-list td ins .amount,
        table.compare-list .stock td span,
        .woocommerce ul.products li.product:not(.disable-hover):hover span:hover a,
        .woocommerce-page ul.products li.product:not(.disable-hover):hover span.product-button~span:hover a,
        .product_meta>span a:hover,
        .widget_ranged_price_filter li.current,
        .widget_ranged_price_filter li.current a,
        .widget_order_by_filter li.current,
        .widget_order_by_filter li.current a,
        .woocommerce .widget_shopping_cart .total .amount,
        .woocommerce.widget_shopping_cart .total .amount,
        .woocommerce ul.cart_list li .quantity,
        .woocommerce ul.product_list_widget li .quantity,
        ul.cart_list li .amount,
        .woocommerce ul.cart_list li .amount,
        ul.product_list_widget li .amount,
        .woocommerce ul.product_list_widget li .amount,
        .woocommerce form .form-row .required,
        .woocommerce table.shop_table tfoot td,
        .woocommerce div.product form.cart table.group_table label a:hover,
        .woocommerce .product .summary .price,
        .woocommerce-page .product .summary .price,
        div.woocommerce.single-product2 ul.products li.product .price,
        div.woocommerce.single-product2 ul.products li.product .price ins,
        div.woocommerce.single-product2 ul.products li.product .price del,
        #blogSingle .social_links_list i.icon-facebook:hover,
        #PDetail .social_links_list i.icon-facebook:hover,
        #portfolioDetailAjax .social_links_list i.icon-facebook:hover,
        .ep-newsletter .widget_wysija_cont .wysija-submit:hover,
        .comment-reply-title small a,
        #blogSingle .post-tags a:hover,
        #blogSingle span.post-author a:hover,
        #blogSingle span.post-categories a:hover,
        div.wpcf7-mail-sent-ok,
        #respond-wrap .graylabel.inputfocus,
        #respond .graylabel.inputfocus,
        #review_form .graylabel.inputfocus,
        .wpcf7-form .graylabel.inputfocus,
        .wpcf7-form .label.inputfocus,
        #respond-wrap .label.inputfocus,
        #respond .label.inputfocus,
        #review_form .label.inputfocus,
        .search-item .count,
        .pageNavigation .more-link-arrow:hover,
        .sticky .accordion_box10 .blogTitle,
        .sticky .accordion_box2 .accordion_title,
        .iconPchart .icon,
        .pieChart .perecent,
        .wpb_toggle.wpb_toggle_title_active .title,
        .vc_tta-accordion .vc_tta-panel:hover span.vc_tta-title-text,
        .vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-icon,
        .vc_tta-accordion .vc_tta-panel.vc_active span.vc_tta-title-text,
        .team-member .more-link-arrow:hover,
        .team-member .icons li:hover a,
        .iconbox.transparentbackground .icon span.glyph,
        .iconbox .glyph,
        .portfolio_detail_creative .home:hover,
        .lightStyle #portfoliSingle .like .jm-post-like.ep-icon:before,
        #portfoliSingle .like .jm-post-like.liked.ep-icon:before,
        .portfolioSection .like .jm-post-like.liked.ep-icon:before,
        #portfoliSingle .like a.jm-post-like.ep-icon:hover:before,
        .postphoto .like .jm-post-like.liked.ep-icon:before,
        .isotope.lightStyle .postphoto .like .jm-post-like.liked.ep-icon:before,
        .portfolio_text .portfolio_text_meta .like .jm-post-like.liked.ep-icon:before,
        .cblog span.post-author a:hover,
        .cblog span.post-comments a:hover,
        .cblog h2.post-title a:hover,
        .cblog span.post-categories a,
        #PDetail span.icon-icons2:hover,
        .showcase .showcase-item .showcase-link:hover,
        .toggleSidebar.cartSidebarContainer .cart-bottom-box .total .amount,
        #commentform p.logged-in-as a,
        .comment-edit-link,
        .comments-list .comment-reply-link,
        .navigation-mobile a:hover,
        ul li.woocommerce-MyAccount-navigation-link a:hover,
        ul li.woocommerce-MyAccount-navigation-link.is-active a,
        #ep-modal.quickview-modal #modal-content .product_title:hover,
        .widget_product_tag_cloud.collapse .show_more_tags:hover,
        .widget_product_categories .cats-toggle:hover,
        .widget_product_categories .cats-toggle.toggle-active,
        .footer-widgetized .product-categories li.current-cat>a,
        form.woocommerce-currency-switcher-form .dd-option .dd-option-text:hover {
            color: #ff4c2f;
        }

        .woocommerce div.product form.cart .group_table .woocommerce-grouped-product-list-item__price,
        .woocommerce div.product form.cart .group_table .price,
        .woocommerce .woocommerce-error a,
        .woocommerce .woocommerce-message a,
        .woocommerce .woocommerce-info a,
        .woocommerce nav.woocommerce-pagination ul li a span,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce nav.woocommerce-pagination ul li:hover a,
        .woocommerce nav.woocommerce-pagination ul li:hover span,
        .woocommerce p.stars.selected a:not(.active):before,
        .woocommerce p.stars.selected a.active:before,
        .woocommerce p.stars:hover a:before,
        .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
        .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a,
        .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a,
        .woocommerce .woocommerce-breadcrumb a:hover,
        .page-breadcrumb .woocommerce-breadcrumb a:hover,
        .vc_tta-tab.vc_active a span,
        .vc_tta-tab.vc_active .vc_tta-icon,
        .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover,
        .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:hover,
        .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:hover,
        .yith-wcwl-wishlistaddedbrowse:before,
        .yith-wcwl-wishlistexistsbrowse:before,
        .yith-wcwl-wishlistaddedbrowse:hover,
        .summary.entry-summary .button.compare.added:before,
        .lang-sel ul.lang_link>li:hover a,
        .summary.entry-summary .button.compare:hover {
            color: #ff4c2f !important;
        }


        .woocommerce .woocommerce-error a,
        .woocommerce .woocommerce-message a,
        .woocommerce .woocommerce-info a,
        .ep-newsletter .widget_wysija_cont .wysija-submit:hover,
        .iconbox.circle .icon span.glyph,
        .iconbox.rectangle .icon span.glyph,
        .showcase .item-pics:hover .swiper-button-prev:hover,
        .showcase .item-pics:hover .swiper-button-next:hover,
        input[type="submit"].dokan-btn-theme,
        a.dokan-btn-theme,
        .dokan-btn-theme,
        input[type="submit"].dokan-btn-theme:hover,
        a.dokan-btn-theme:hover,
        .dokan-btn-theme:hover,
        .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.active,
        .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover,
        .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover,
        input[type="submit"].dokan-btn-theme:hover,
        .dokan-btn-theme:hover,
        input[type="submit"].dokan-btn-theme:focus,
        a.dokan-btn-theme:focus,
        .dokan-btn-theme:focus,
        input[type="submit"].dokan-btn-theme:active,
        a.dokan-btn-theme:active,
        .dokan-btn-theme:active,
        input[type="submit"].dokan-btn-theme.active,
        a.dokan-btn-theme.active,
        .dokan-btn-theme.active,
        .open .dropdown-toggleinput[type="submit"].dokan-btn-theme,
        .open .dropdown-togglea.dokan-btn-theme,
        .open .dropdown-toggle.dokan-btn-theme,
        .widget-area .product-categories li.cat-item.current-cat>a:before,
        .widget-area .product-categories li.cat-item a:hover:before,
        .widget-area .product-categories li.cat-item a:hover:before,
        .galleryexternallink {
            border-color: #ff4c2f;
        }

        .woocommerce ..blockOverlay:after,
        .woocommerce .loader:after,
        table.compare-list .remove td ..blockOverlay:after,
        .summary.entry-summary .button.compare ..blockOverlay:after,
        .woocommerce .yith-woocompare-widget .products-list ..blockOverlay:after,
        .woocommerce #respond input#submit.:after,
        .woocommerce button.button.:after,
        .woocommerce input.button.:after,
        .woocommerce a.button.:after,
        .wc-:after,
        .showcase .swiper-button-prev:hover:before,
        .showcase .swiper-button-next:hover:before,
        .mejs-overlay-:after {
            border-right-color: #ff4c2f;
        }

        .sticky .blogAccordion .rightBorder {
            border-right-color: #ff4c2f !important;
        }

        .testimonials .quot-icon:before,
        .testimonials:after,
        .testimonials:before,
        .vc_tta-tabs-position-bottom li.vc_tta-tab:hover,
        .vc_tta-tabs-position-bottom li.vc_tta-tab.vc_active,
        .showcase .swiper-button-prev:hover:before,
        .showcase .swiper-button-next:hover:before {
            border-top-color: #ff4c2f;
        }


        .woocommerce-account .woocommerce-MyAccount-content .form-row input.input-text:focus,
        .woocommerce-account .woocommerce-MyAccount-content .form-row textarea:focus,
        .woocommerce form.login input.input-text:focus,
        .woocommerce form.register input.input-text:focus,
        .woocommerce form.checkout_coupon .form-row-first input:focus,
        .woocommerce form.checkout .form-row input.input-text:focus,
        .woocommerce form.checkout .form-row textarea:focus,
        .testimonials .quot-icon:after,
        .testimonials .quot-icon:before,
        .wpcf7-form-control-wrap input[type="email"]:focus,
        .wpcf7-form-control-wrap input[type="text"]:focus,
        #reserve_date input[type="date"]:focus,
        .wpcf7-form-control-wrap textarea:focus,
        #reserve_time div.nice-select.open,
        #Person_number div.nice-select.open,
        #wedding_services div.nice-select.open,
        #wedding_guests div.nice-select.open,
        #respond-wrap .input-text input:focus,
        #respond-wrap .input-textarea textarea:focus,
        #respond .input-text input:focus,
        #respond .input-textarea textarea:focus,
        #review_form input:focus,
        #review_form textarea:focus,
        .vc_tta-tabs-position-left li.vc_tta-tab.vc_active,
        .vc_tta-tabs-position-right li.vc_tta-tab.vc_active,
        .vc_tta-tabs-position-top li.vc_tta-tab.vc_active,
        .vc_tta-tabs-position-top li.vc_tta-tab.vc_active:hover,
        .vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-heading,
        .vc_tta-accordion .vc_tta-panel:hover .vc_tta-panel-heading,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-heading,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-accordion .vc_tta-panel:hover .vc_tta-panel-heading,
        .custom-title .shape-container.triangle .shape-line,
        .custom-title .shape-container.triangle .shape-line:after,
        .custom-title .shape-container.triangle .shape-line:before {
            border-bottom-color: #ff4c2f;
        }

        .-next-page,
        .wpb_heading,
        .testimonials .quot-icon:before,
        .textLeftBorder.fontSize123 .title,
        .textLeftBorder .title {
            border-left-color: #ff4c2f;
        }

        .touchevents #comment-text .button.button-large,
        #comment-text .button.button-large:hover,
        .touchevents .woocommerce #commentform .button.button-large,
        .woocommerce #commentform .button.button-large:hover,
        .woocommerce .widget_layered_nav ul.imagelist li.chosen a img,
        #product-fullview-thumbs .swiper-button-prev:hover,
        #product-fullview-thumbs .swiper-button-next:hover,
        div.woocommerce.single-product2 .product-fullview-thumbs .swiper-button-prev:hover,
        div.woocommerce.single-product2 .product-fullview-thumbs .swiper-button-next:hover,
        .tabletBlog .moretag:hover,
        .desktopBlog .moretag:hover,
        .custom-title .shape-container.square .shape-line,
        .custom-title .shape-container.rotated_square .shape-line,
        .custom-title .shape-container.circle .shape-line {
            border-color: #ff4c2f;
        }



        /* topbar */

        #topbar {
            background-color: #ff692c
        }


        #topbar {
            border-bottom-color: rgba(238, 238, 238, 0)
        }



        /* preloader */

        #preloader {
            background-color: #efefef
        }



        #preloader .ball {
            background: #ef5824;
        }

        .preloader_circular .path {
            stroke: #ef5824;
        }

        #preloader-simple .rect {
            stroke: #ef5824;
        }

        #preloader_box .rect {
            stroke: #ef5824;
        }



        #preloader_box {
            background: #f7f7f7
        }



        .preloader-text {
            color: #000
        }


        .footer-widgetized .section-container:before {
            background-color: #f8f8f8;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }



        /*######## Set font ########*/

        /* General font */

        /*  lato font is set by default  */
        body,
        .footer-bottom .copyright,
        .footer-bottom .socialLinkShortcode.textstyle a span,
        .woocommerce .woocommerce-ordering select,
        .woocommerce-page .woocommerce-ordering select,
        .woocommerce nav.woocommerce-pagination ul li a,
        .woocommerce nav.woocommerce-pagination ul li span,
        .woocommerce .woocommerce-product-rating .woocommerce-review-link,
        .woocommerce td.product-name dl.variation,
        .woocommerce-checkout #payment div.payment_box,
        .widget.widget_woocommerce-dropdown-cart .wc_cart_product_info .wc_cart_product_name,
        .woocommerce table.shop_table tr .shipping-td p,
        .wpb_content_element,
        .preloader-text,
        .toggleSidebar .cartSidebarWrap ul.cart_list li dl.variation,
        #fullScreenSlider .arrows-button-prev .text,
        #fullScreenSlider .arrows-button-next .text,
        .swiper-slide .caption-subtitle,
        #fullScreenImage .caption-subtitle,
        .swiper-slide .caption-subtitle2,
        #fullScreenImage .caption-subtitle2,
        .cblog span.post-categories,
        .cblog .post-date,
        .widget-area .product-categories li a,
        .widget-area .product-categories li.cat-item a,
        .footer-widgetized .product-categories li a,
        .cblog span.post-info-separator,
        .cblog span.post-author a,
        .cblog span.post-comments a,
        .cblog .post-content li,
        .singlePost .post li,
        .cblog .post-content p,
        .singlePost .post p,
        .postphoto .title,
        .portfolio_text .portfolio_text_meta .like a,
        .portfolio_text .portfolio_text_meta .like a .no_like,
        .postphoto .like a,
        .postphoto .like a .no_like,
        .subnavigation li .filter_item .post-count,
        #portfoliSingle .like a,
        ul.portfolio-filter li ul li .filter_item,
        .imageBox .content .text,
        .textBox .text,
        .iconbox .content,
        .iconbox .more-link a,
        .team-member .member-info cite,
        .team-member .member-info p,
        .pieChartBox .subtitle,
        #commentform p:first-child,
        .blogAccordion.quoteItem .quote_content,
        .tabletBlog .moretag,
        .desktopBlog .moretag,
        .blogAccordion .leftBorder .monthYear,
        .blogAccordion .accordion_title,
        .desktopBlog .accordion_content p,
        .not_found_page p,
        .pricing-box .plan-price,
        .wpcf7-form-control-wrap input[type="email"],
        .wpcf7-form-control-wrap input[type="text"],
        .input-text input[type="text"],
        .wpcf7-form-control-wrap textarea,
        .input-textarea textarea,
        .footer-widgetized .progressbar .title,
        footer .simple-menu li a,
        .simple-menu li a,
        #search-form input[type="text"],
        .testimonial blockquote,
        .testimonial .name,
        .testimonials .quote .job,
        .page-title,
        #blogSingle span.post-categories,
        #blogSingle span.post-categories a,
        #blogSingle .post-date,
        #blogSingle span.post-info-separator,
        #blogSingle span.post-author a,
        #blogSingle .post-tags,
        #blogSingle .post-content .comments-list .comment-date,
        .progress_bar .progress_title,
        .progress_percent_value,
        .vc_gitem-post-data h4,
        .vc_gitem-post-data.vc_gitem-post-data-source-post_title div,
        .ep_button,
        form input[type="submit"],
        .ep_button,
        strong,
        .topbarText,
        .topbar_login_link .topbar_login_text a,
        .woocommerce .shop-filter .special-filter ul.product-subcategories li a,
        .woocommerce .shop-filter .widget_layered_nav_filters ul li a,
        .woocommerce .shop-filter .special-filter .woocommerce-result-count,
        .woocommerce .widget_layered_nav_filters ul li a,
        .woocommerce .widget_layered_nav ul li a,
        .woocommerce .shop-filter .widget-area .on-sale-filter li a,
        .widget_ranged_price_filter li,
        .widget_ranged_price_filter li a,
        .widget_order_by_filter li,
        .widget_order_by_filter li a,
        .woocommerce ul.products li.product .price,
        .woocommerce-page ul.products li.product .price,
        .woocommerce-page .tagcloud a,
        .tagcloud a,
        .widget_recent_comments .comment-author-link,
        .widget_recent_entries .post-date,
        .footer-widgetized a,
        .woocommerce .product_list_widget li a,
        .widget_recent_entries a,
        .footer-widgetized-wrap a,
        .footer-widgetized-wrap .widget_recent_entries a,
        .widget-area a,
        ul.cart_list li .amount,
        .woocommerce ul.cart_list li .amount,
        ul.product_list_widget li .amount,
        .woocommerce ul.product_list_widget li .amount,
        .woocommerce .widget_layered_nav_filters ul li a,
        .woocommerce .widget_layered_nav ul li a,
        .woocommerce.widget_rating_filter .rating_product_count,
        .woocommerce .widget_layered_nav ul li .count,
        .woocommerce ul.products li.product.product-category h3 span,
        .instagram-feed .info span,
        .textwidget,
        .footer-widgetized-wrap .textwidget,
        header .navigation li.mega-menu-parent>.menu-item-wrapper>ul>li.special-last-child>ul>li:last-of-type .subtitle,
        .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta time,
        #review_form_wrapper form .comment-form-rating label,
        .lg-sub-html p,
        .widget_wysija_cont .wysija-submit,
        .widget .widget_wysija_cont .wysija-submit,
        .ep-popup-newsletter-content h6,
        p.ep-popup-newsletter-text {
            font-family: 'Hind Siliguri', sans-serif;
        }

        /* Heading & titles */
        /* poppins is set by default  */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .titleSpace .title h3,
        #header h1,
        .vertical_menu_enabled .vertical_menu_area .vertical_menu_navigation a,
        .toggleSidebarWidgetbar .widget-area .widget_nav_menu a,
        .widget-area .search-form input[type="text"],
        .toggleSidebar.cartSidebarContainer .cart-bottom-box .buttons a,
        .toggleSidebar.cartSidebarContainer .cart-bottom-box .total,
        .toggleSidebar.cartSidebarContainer .cartSidebarWrap .cart_list li a,
        .toggleSidebar.cartSidebarContainer .cartSidebarWrap .cart_list .empty.show-message,
        .toggleSidebar .cartSidebarWrap ul.cart_list li .quantity,
        .woocommerce ul.products li.product h3,
        .woocommerce-page ul.products li.product h3,
        .toggleSidebar .cartSidebarHeader,
        .subnavigation .filter_item,
        .swiper-slide .caption-title,
        #fullScreenImage .caption-title,
        .desktopBlog .blogAccordion .accordion_box10 .blogTitle,
        .cblog h2.post-title a,
        .cblog h2.post-title,
        #blogSingle h1.post-title,
        .cblog .readmore_button,
        .cblog .quotePostType .post-image .quote_content h3,
        #blogSingle .quotePostType .post-image .quote_content h3,
        .portfolioSection .title h3,
        .portfolio_text .portfolio_text_meta .right_meta,
        .portfolio_text .portfolio_text_meta .right_meta .title,
        .postphoto .overlay .hover-title,
        .portfolio_detail_creative .pd_creative_fixed_content .title_container .title,
        .vc_tta-tab a span,
        .blogAccordion .accordion_title .day,
        .readmore .loadMore,
        .post-pagination span,
        .post-pagination a,
        .footer-widgetized .widget-title,
        .commentsCount,
        .comment-reply-title,
        .lg-sub-html h4,
        #lg-counter,
        span.slideshowContent .firstTitle,
        .secondTitle,
        .blog-masonry-container.ep_quote .blog-masonry-content .blog-excerpt,
        #blogSingle .nextNav span.postTitle,
        #blogSingle .prevNav span.postTitle,
        #PDetail .nextNav span.postTitle,
        #PDetail .prevNav span.postTitle,
        .woocommerce ul.products li.product .onsale,
        .woocommerce-page ul.products li.product .onsale,
        .woocommerce span.onsale,
        .woocommerce-page span.onsale,
        .woocommerce div.product p.stock,
        .woocommerce div.product form.cart .variations label,
        .woocommerce .product .summary .single_variation_wrap .woocommerce-variation-price .price,
        .woocommerce div.product form.cart ul.variations li .label.image-label label,
        .woocommerce div.product form.cart ul.variations li .label.image-label .attr-value,
        .woocommerce .product .summary .single_variation_wrap .woocommerce-variation-availability .stock.in-stock,
        .woocommerce #content input.button,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce form.login input.button,
        .woocommerce-page #content input.button,
        .woocommerce-page #respond input#submit,
        .woocommerce-page a.button,
        .woocommerce-page button.button,
        .woocommerce-page input.button,
        .woocommerce #content div.product .woocommerce-tabs ul.tabs li a,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a,
        .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a,
        .woocommerce-page div.product .woocommerce-tabs ul.tabs li a,
        .woocommerce.woocommerce-result-count,
        .woocommerce-page .woocommerce-result-count,
        .woocommerce .product .summary .price,
        .woocommerce-page .product .summary .price,
        .woocommerce div.product p.price ins,
        .woocommerce div.product span.price ins,
        .woocommerce div.product p.price del,
        .woocommerce div.product span.price del,
        .woocommerce div.product form.cart .group_table .price,
        .woocommerce table.shop_table,
        .woocommerce-page table.shop_table,
        .woocommerce input[type='text'],
        .woocommerce input[type='password'],
        .woocommerce input[type='email'],
        .woocommerce-page input[type='text'],
        .woocommerce-page input[type='password'],
        .woocommerce-page input[type='email'],
        .woocommerce input[type='tel'],
        .woocommerce textarea,
        .woocommerce-page textarea,
        .woocommerce #reviews h3,
        .woocommerce ul.product_list_widget li .reviewer,
        .woocommerce ul.cart_list li .quantity,
        .woocommerce ul.product_list_widget li .quantity,
        .woocommerce .widget_shopping_cart .total strong,
        .woocommerce.widget_shopping_cart .total strong,
        .woocommerce .widget_shopping_cart .total .amount,
        .woocommerce.widget_shopping_cart .total .amount,
        form.woocommerce-product-search input[type="search"],
        .woocommerce .widget_price_filter .price_slider_wrapper .price_label,
        .woocommerce-page .widget_price_filter .price_slider_wrapper .price_label,
        .widget_price_filter .price_slider_amount .button,
        .woocommerce ul.products li.product span.product-button .txt,
        .woocommerce-page ul.products li.product span.product-button .txt,
        .select2-container .select2-choice>.select2-chosen,
        .out_of_stock_badge_loop,
        .woocommerce div.product .out-of-stock,
        .woocommerce-ordering .select2-container .select2-choice,
        .woocommerce-checkout form.login p,
        form.woocommerce-checkout p,
        .woocommerce form.login .lost_password,
        .woocommerce form .form-row label,
        .woocommerce-checkout #payment ul.payment_methods li label,
        .compare-list.dataTable p,
        table.compare-list .stock td span,
        table.dataTable tr,
        table.compare-list tr th:first-child,
        .yith-woocompare-widget li,
        .yith-woocompare-widget a.clear-all,
        .yith-woocompare-widget ul.products-list a:not(.remove),
        .widget-area .widget-title,
        .widget-area .widgettitle,
        table.compare-list,
        .ep-popup-newsletter-content h4 {
            font-family: 'Hind Siliguri', sans-serif;
        }


        /* Shortcode title font */

        .socialLinkShortcode.textstyle a span,
        .ep_button,
        .widget_wysija_cont .updated,
        .widget_wysija_cont .error,
        .widget_wysija_cont .xdetailed-errors,
        .banner .title,
        .textBox .title,
        .textBox .subtitle,
        .imageBox .title .subtitle,
        .custom-title .title,
        .team-member .member-info .member-name,
        .counterBox .counterBoxNumber,
        .counterBoxDetails,
        .counterBoxDetails2,
        .pieChartBox .title,
        .pieChart .perecent,
        .testimonials .quote .name,
        .testimonials .quote .job,
        .progress_bar .progress_title,
        .progress_percent_value,
        .showcase h3,
        .showcase .showcase_item_subtitle,
        .showcase .item-list li span,
        .imageBox .content .title,
        .iconbox.iconbox-top .title,
        .iconbox.iconbox-left .title,
        .custom-iconbox .title,
        .wpb_toggle .title,
        .vc_separator,
        .animatedtext .slideshowContent,
        .animatedtext .secondTitle2,
        .wpcf7-form .label,
        #respond-wrap .label,
        #respond .label,
        #review_form .label,
        .wpcf7-form .graylabel,
        #respond-wrap .graylabel,
        #respond .graylabel,
        #review_form .graylabel,
        .time-block span.number {
            font-family: 'Hind Siliguri', sans-serif;
        }


        /* Navigation */

        .topbar_wishlist .wishlist_text,
        .topbar_lang_flag .lang-sel a,
        header .navigation>ul>li li>a span.menu_title_wrap,
        header .navigation>ul>li>a,
        .menu-list a span,
        header .navigation li.mega-menu-parent div>ul>li.menu-item-has-children>a {
            font-family: 'Hind Siliguri', sans-serif;
        }

        .socialLinkShortcode.custom1 a:before {
            background: #a7a7a7
        }

        .socialLinkShortcode.custom2 a:before {
            background: #a7a7a7
        }


        /* Snap to scroll */
        #snap-to-scroll-nav span:after {
            background: #ff4c2f;
        }


        /*######## Style Overrides ########*/


        /* Popup Newsletter */

        .ep-popup-newsletter-shortcode.ep-newsletter .widget_wysija_cont .wysija-submit:hover {
            color: #ff4c2f !important;
        }
    </style>
    <link rel="stylesheet" id="epico_responsive-style-css"
        href="https://chuijhal.com/wp-content/themes/vitrine/assets/css/responsive.min.css?ver=4.2" type="text/css"
        media="all" />
    <link rel="stylesheet" id="epico_libs-css"
        href="https://chuijhal.com/wp-content/themes/vitrine/assets/css/libs.min.css?ver=4.2" type="text/css"
        media="screen" />
    <link rel="stylesheet" id="mediaelement-css"
        href="https://chuijhal.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17"
        type="text/css" media="all" />
    <script type="text/javascript" src="https://chuijhal.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="https://chuijhal.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/jquery-/jquery..min.js?ver=2.7.0-wc.9.0.2"
        id="jquery--js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/chuijhal.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.0.2"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.0.2"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.0.2"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-country-select-js-extra">
        /* <![CDATA[ */
        var wc_country_select_params = {
            "countries": "{\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"}}",
            "i18n_select_state_text": "Select an option\u2026",
            "i18n_no_matches": "No matches found",
            "i18n_ajax_error": " failed",
            "i18n_input_too_short_1": "Please enter 1 or more characters",
            "i18n_input_too_short_n": "Please enter %qty% or more characters",
            "i18n_input_too_long_1": "Please delete 1 character",
            "i18n_input_too_long_n": "Please delete %qty% characters",
            "i18n_selection_too_long_1": "You can only select 1 item",
            "i18n_selection_too_long_n": "You can only select %qty% items",
            "i18n_load_more": " more results\u2026",
            "i18n_searching": "Searching\u2026"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=9.0.2"
        id="wc-country-select-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-address-i18n-js-extra">
        /* <![CDATA[ */
        var wc_address_i18n_params = {
            "locale": "{\"BD\":{\"postcode\":{\"required\":false},\"state\":[]},\"default\":{\"first_name\":{\"required\":true,\"autocomplete\":\"given-name\"},\"last_name\":{\"required\":true,\"autocomplete\":\"family-name\"},\"country\":{\"type\":\"country\",\"required\":true,\"autocomplete\":\"country\"},\"address_1\":{\"required\":true,\"autocomplete\":\"address-line1\"},\"city\":{\"required\":true,\"autocomplete\":\"address-level2\"},\"state\":{\"type\":\"state\",\"required\":true,\"validate\":[\"state\"],\"autocomplete\":\"address-level1\"},\"postcode\":{\"required\":true,\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\"},\"0\":\"country\",\"1\":\"first_name\",\"2\":\"last_name\",\"3\":\"company\",\"4\":\"address_1\",\"5\":\"address_2\",\"6\":\"city\",\"7\":\"state\",\"8\":\"postcode\",\"9\":\"phone\"}}",
            "locale_fields": "{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}",
            "i18n_required_text": "required",
            "i18n_optional_text": "optional"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=9.0.2"
        id="wc-address-i18n-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-checkout-js-extra">
        /* <![CDATA[ */
        var wc_checkout_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "update_order_review_nonce": "b06e2515fc",
            "apply_coupon_nonce": "36c44b0a90",
            "remove_coupon_nonce": "ecd17ae178",
            "option_guest_checkout": "yes",
            "checkout_url": "\/?wc-ajax=checkout",
            "is_checkout": "1",
            "debug_mode": "",
            "i18n_checkout_error": "There was an error processing your order. Please check for any charges in your payment method and review your <a href=\"https:\/\/chuijhal.com\/%e0%a6%85%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%95%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%9f\/orders\/\">order history<\/a> before placing the order again."
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/frontend/checkout.min.js?ver=9.0.2"
        id="wc-checkout-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="ajax-script-js-extra">
        /* <![CDATA[ */
        var ajax_object = {
            "ajaxurl": "https:\/\/chuijhal.com\/wp-json\/wpsms\/v1\/newsletter"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://chuijhal.com/wp-content/plugins/greenwebsms/assets/js/script.js?ver=75.0.0"
        id="ajax-script-js"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/pixelyoursite/dist/scripts/jquery.bind-first-0.2.3.min.js?ver=a091ed573bab13050d805822863c35a1"
        id="jquery-bind-first-js"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/pixelyoursite/dist/scripts/js.cookie-2.1.3.min.js?ver=2.1.3"
        id="js-cookie-pys-js"></script>
    <script type="text/javascript" id="pys-js-extra">
        /* <![CDATA[ */
        var pysOptions = {
            "staticEvents": {
                "facebook": {
                    "woo_initiate_checkout": [{
                        "delay": 0,
                        "type": "static",
                        "name": "InitiateCheckout",
                        "pixelIds": ["427272935467605"],
                        "eventID": "6b99ebb9-9bee-4ecf-b018-16e0c34b1d34",
                        "params": {
                            "content_type": "product",
                            "content_ids": ["32614", "33077", "36170", "15026", "25254"],
                            "content_name": "Pickle Combo Offer 01, Combo \u09e9 \u09ac\u09bf\u09ad\u09be\u0997\u09c7\u09b0 \u09e9 \u099f\u09be \u099d\u09be\u09b2 \u09ae\u09b0\u09bf\u099a\u09c7\u09b0 \u0985\u09ab\u09be\u09b0, \u099f\u0995 \u099d\u09be\u09b2 \u09ae\u09bf\u09b7\u09cd\u099f\u09bf \u0986\u099a\u09be\u09b0  \u09a4\u09c7\u0981\u09a4\u09c1\u09b2,  \u09b0\u09b8\u09c1\u09a8, \u0986\u09b2\u09c1\u09ac\u09cb\u0996\u09be\u09b0\u09be, Chuijhal (\u099a\u09c1\u0987\u099d\u09be\u09b2) 1 \u0995\u09c7\u099c\u09bf, \u09a6\u09c7\u09b6\u09bf \u09b0\u09b8\u09c1\u09a8 \u098f\u09b0 \u0986\u099a\u09be\u09b0  \u09ea\u09e8\u09e6 \u0997\u09cd\u09b0\u09be\u09ae",
                            "category_name": "\u0986\u099a\u09be\u09b0, \u0986\u099a\u09be\u09b0, \u0986\u099a\u09be\u09b0, \u09ae\u09b8\u09b2\u09be, \u0986\u099a\u09be\u09b0",
                            "contents": [{
                                "id": "32614",
                                "quantity": 16
                            }, {
                                "id": "33077",
                                "quantity": 1
                            }, {
                                "id": "36170",
                                "quantity": 1
                            }, {
                                "id": "15026",
                                "quantity": 1
                            }, {
                                "id": "25254",
                                "quantity": 1
                            }],
                            "tags": "\u098f\u0995 \u0995\u09cb\u09df\u09be \u09b0\u09b8\u09c1\u09a8",
                            "num_items": 20,
                            "subtotal": 25990,
                            "value": 25990,
                            "currency": "BDT",
                            "page_title": "\u099a\u09c7\u0995\u0986\u0989\u099f",
                            "post_type": "page",
                            "post_id": 557,
                            "plugin": "PixelYourSite",
                            "user_role": "guest",
                            "event_url": "chuijhal.com\/checkout\/"
                        },
                        "e_id": "woo_initiate_checkout",
                        "ids": [],
                        "hasTimeWindow": false,
                        "timeWindow": 0,
                        "woo_order": "",
                        "edd_order": ""
                    }],
                    "init_event": [{
                        "delay": 0,
                        "type": "static",
                        "name": "PageView",
                        "pixelIds": ["427272935467605"],
                        "eventID": "146ae92e-b7e9-4568-b3e2-93400835f920",
                        "params": {
                            "page_title": "\u099a\u09c7\u0995\u0986\u0989\u099f",
                            "post_type": "page",
                            "post_id": 557,
                            "plugin": "PixelYourSite",
                            "user_role": "guest",
                            "event_url": "chuijhal.com\/checkout\/"
                        },
                        "e_id": "init_event",
                        "ids": [],
                        "hasTimeWindow": false,
                        "timeWindow": 0,
                        "woo_order": "",
                        "edd_order": ""
                    }]
                },
                "ga": {
                    "woo_initiate_checkout": [{
                        "delay": 0,
                        "type": "static",
                        "name": "begin_checkout",
                        "trackingIds": ["G-Q4NWW12SW2"],
                        "params": {
                            "event_category": "ecommerce",
                            "currency": "BDT",
                            "items": [{
                                "id": "32614",
                                "name": "Pickle Combo Offer 01",
                                "quantity": 16,
                                "price": 1350,
                                "item_category": "\u0986\u099a\u09be\u09b0"
                            }, {
                                "id": "33077",
                                "name": "Combo \u09e9 \u09ac\u09bf\u09ad\u09be\u0997\u09c7\u09b0 \u09e9 \u099f\u09be \u099d\u09be\u09b2 \u09ae\u09b0\u09bf\u099a\u09c7\u09b0 \u0985\u09ab\u09be\u09b0",
                                "quantity": 1,
                                "price": 1350,
                                "item_category": "\u0986\u099a\u09be\u09b0"
                            }, {
                                "id": "36170",
                                "name": "\u099f\u0995 \u099d\u09be\u09b2 \u09ae\u09bf\u09b7\u09cd\u099f\u09bf \u0986\u099a\u09be\u09b0  \u09a4\u09c7\u0981\u09a4\u09c1\u09b2,  \u09b0\u09b8\u09c1\u09a8, \u0986\u09b2\u09c1\u09ac\u09cb\u0996\u09be\u09b0\u09be",
                                "quantity": 1,
                                "price": 1350,
                                "item_category": "\u0986\u099a\u09be\u09b0"
                            }, {
                                "id": "15026",
                                "name": "Chuijhal (\u099a\u09c1\u0987\u099d\u09be\u09b2) 1 \u0995\u09c7\u099c\u09bf",
                                "quantity": 1,
                                "price": 1200,
                                "item_category": "\u09ae\u09b8\u09b2\u09be"
                            }, {
                                "id": "25254",
                                "name": "\u09a6\u09c7\u09b6\u09bf \u09b0\u09b8\u09c1\u09a8 \u098f\u09b0 \u0986\u099a\u09be\u09b0  \u09ea\u09e8\u09e6 \u0997\u09cd\u09b0\u09be\u09ae",
                                "quantity": 1,
                                "price": 490,
                                "item_category": "\u0986\u099a\u09be\u09b0"
                            }],
                            "page_title": "\u099a\u09c7\u0995\u0986\u0989\u099f",
                            "post_type": "page",
                            "post_id": 557,
                            "plugin": "PixelYourSite",
                            "user_role": "guest",
                            "event_url": "chuijhal.com\/checkout\/"
                        },
                        "e_id": "woo_initiate_checkout",
                        "ids": [],
                        "hasTimeWindow": false,
                        "timeWindow": 0,
                        "pixelIds": [],
                        "eventID": "",
                        "woo_order": "",
                        "edd_order": ""
                    }]
                }
            },
            "dynamicEvents": [],
            "triggerEvents": [],
            "triggerEventTypes": [],
            "facebook": {
                "pixelIds": ["427272935467605"],
                "advancedMatching": [],
                "advancedMatchingEnabled": true,
                "removeMetadata": false,
                "contentParams": {
                    "post_type": "page",
                    "post_id": 557,
                    "content_name": "\u099a\u09c7\u0995\u0986\u0989\u099f"
                },
                "commentEventEnabled": true,
                "wooVariableAsSimple": false,
                "downloadEnabled": true,
                "formEventEnabled": true,
                "serverApiEnabled": true,
                "wooCRSendFromServer": false,
                "send_external_id": null
            },
            "ga": {
                "trackingIds": ["G-Q4NWW12SW2"],
                "commentEventEnabled": true,
                "downloadEnabled": true,
                "formEventEnabled": true,
                "crossDomainEnabled": false,
                "crossDomainAcceptIncoming": false,
                "crossDomainDomains": [],
                "isDebugEnabled": ["index_0"],
                "serverContainerUrls": {
                    "G-Q4NWW12SW2": {
                        "enable_server_container": "",
                        "server_container_url": "",
                        "transport_url": ""
                    }
                },
                "additionalConfig": {
                    "G-Q4NWW12SW2": {
                        "first_party_collection": true
                    }
                },
                "disableAdvertisingFeatures": false,
                "disableAdvertisingPersonalization": false,
                "wooVariableAsSimple": true
            },
            "debug": "",
            "siteUrl": "https:\/\/chuijhal.com",
            "ajaxUrl": "https:\/\/chuijhal.com\/wp-admin\/admin-ajax.php",
            "ajax_event": "0c0480eb0f",
            "enable_remove_download_url_param": "1",
            "cookie_duration": "7",
            "last_visit_duration": "60",
            "enable_success_send_form": "",
            "ajaxForServerEvent": "1",
            "ajaxForServerStaticEvent": "1",
            "send_external_id": "1",
            "external_id_expire": "180",
            "google_consent_mode": "1",
            "gdpr": {
                "ajax_enabled": false,
                "all_disabled_by_api": false,
                "facebook_disabled_by_api": false,
                "analytics_disabled_by_api": false,
                "google_ads_disabled_by_api": false,
                "pinterest_disabled_by_api": false,
                "bing_disabled_by_api": false,
                "externalID_disabled_by_api": false,
                "facebook_prior_consent_enabled": true,
                "analytics_prior_consent_enabled": true,
                "google_ads_prior_consent_enabled": null,
                "pinterest_prior_consent_enabled": true,
                "bing_prior_consent_enabled": true,
                "cookiebot_integration_enabled": false,
                "cookiebot_facebook_consent_category": "marketing",
                "cookiebot_analytics_consent_category": "statistics",
                "cookiebot_tiktok_consent_category": "marketing",
                "cookiebot_google_ads_consent_category": null,
                "cookiebot_pinterest_consent_category": "marketing",
                "cookiebot_bing_consent_category": "marketing",
                "consent_magic_integration_enabled": false,
                "real_cookie_banner_integration_enabled": false,
                "cookie_notice_integration_enabled": false,
                "cookie_law_info_integration_enabled": false,
                "analytics_storage": {
                    "enabled": true,
                    "value": "granted",
                    "filter": false
                },
                "ad_storage": {
                    "enabled": true,
                    "value": "granted",
                    "filter": false
                },
                "ad_user_data": {
                    "enabled": true,
                    "value": "granted",
                    "filter": false
                },
                "ad_personalization": {
                    "enabled": true,
                    "value": "granted",
                    "filter": false
                }
            },
            "cookie": {
                "disabled_all_cookie": false,
                "disabled_start_session_cookie": false,
                "disabled_advanced_form_data_cookie": false,
                "disabled_landing_page_cookie": false,
                "disabled_first_visit_cookie": false,
                "disabled_trafficsource_cookie": false,
                "disabled_utmTerms_cookie": false,
                "disabled_utmId_cookie": false
            },
            "tracking_analytics": {
                "TrafficSource": "simple-ecommece.test",
                "TrafficLanding": "https:\/\/chuijhal.com\/cart\/",
                "TrafficUtms": [],
                "TrafficUtmsId": []
            },
            "woo": {
                "enabled": true,
                "enabled_save_data_to_orders": true,
                "addToCartOnButtonEnabled": true,
                "addToCartOnButtonValueEnabled": true,
                "addToCartOnButtonValueOption": "price",
                "singleProductId": null,
                "removeFromCartSelector": "form.woocommerce-cart-form .remove",
                "addToCartCatchMethod": "add_cart_hook",
                "is_order_received_page": false,
                "containOrderId": false
            },
            "edd": {
                "enabled": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/pixelyoursite/dist/scripts/public.js?ver=9.6.2" id="pys-js"></script>
    <link rel="https://api.w.org/" href="https://chuijhal.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://chuijhal.com/wp-json/wp/v2/pages/557" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://chuijhal.com/xmlrpc.php?rsd" />
    <link rel="alternate" type="application/json+oembed"
        href="https://chuijhal.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fchuijhal.com%2Fcheckout%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://chuijhal.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fchuijhal.com%2Fcheckout%2F&#038;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.22.3; features: e_optimized_assets_, e_optimized_css_, e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">

    <script type="application/ld+json" class="saswp-schema-markup-output">
[{"@context":"https://schema.org/","@graph":[{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#298 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"শপ","url":"https://chuijhal.com/shop/"},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Organic Tea","url":"http://epicomedia.com/vitrine-demo37/product-category/organic-tea/"},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Vegetables","url":"http://epicomedia.com/vitrine-demo37/product-category/vegetables/"},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"BLOG","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Masonry - Blog","url":"https://chuijhal.com/blog/"},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"GALLERY","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"PORTFOLIO","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"PAGES","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Creative","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#11895 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#11899 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Simple","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#11901 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"যোগাযোগ","url":"https://chuijhal.com/%e0%a6%af%e0%a7%8b%e0%a6%97%e0%a6%be%e0%a6%af%e0%a7%8b%e0%a6%97/"},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Minimal","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#11907 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"About us","url":"https://chuijhal.com/about-us/"},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#11913 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Modern","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#11915 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"#11921 (no title)","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Coming soon - fullwidth","url":""},{"@context":"https://schema.org/","@type":"SiteNavigationElement","@id":"https://chuijhal.com#Main Menu","name":"Coming soon - split","url":""}]}]
</script>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <link rel="icon" href="https://chuijhal.com/wp-content/uploads/2019/03/cropped-chuijhal-favicon-32x32.png"
        sizes="32x32" />
    <link rel="icon" href="https://chuijhal.com/wp-content/uploads/2019/03/cropped-chuijhal-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://chuijhal.com/wp-content/uploads/2019/03/cropped-chuijhal-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://chuijhal.com/wp-content/uploads/2019/03/cropped-chuijhal-favicon-270x270.png" />
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <meta name="facebook-domain-verification" content="r2a6d7bfatqpc6bo6j8w3pwh96ozkb" />
</head>

<body data-rsssl="1"
    class="page-template-default page page-id-557 theme-vitrine woocommerce-checkout woocommerce-page woocommerce-no-js no-preloader no-page-transition fade wpb-js-composer js-comp-ver-6.9.0 vc_responsive elementor-default elementor-kit-34415"
    data-pageid="557">
    <div id="top"></div>
    <div class="scrollToTop visible-desktop">
        <a href="#top"></a>
    </div>
    <div class="layout">

        <div class="toggleSidebar toggleSidebarWidgetbar">
            <div id="toggle-sidebar-close-btn"></div>
            <div class="sidebar widget-area">
                <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h4 class="widget-title">Product categories</h4>
                    <ul class="product-categories">
                        <li class="cat-item cat-item-254"><a
                                href="https://chuijhal.com/product-category/%e0%a6%86%e0%a6%9a%e0%a6%be%e0%a6%b0/">আচার</a>
                            <span class="count">(34)</span>
                        </li>
                        <li class="cat-item cat-item-248"><a
                                href="https://chuijhal.com/product-category/%e0%a6%a1%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%87-%e0%a6%ab%e0%a7%8d%e0%a6%b0%e0%a7%81%e0%a6%9f/">ড্রাই-ফ্রুট</a>
                            <span class="count">(1)</span>
                        </li>
                        <li class="cat-item cat-item-245"><a
                                href="https://chuijhal.com/product-category/%e0%a6%ad%e0%a7%87%e0%a6%b7%e0%a6%9c-%e0%a6%ac%e0%a6%be%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a6%be%e0%a6%a4%e0%a7%80/">ভেষজ
                                বানিয়াতী</a> <span class="count">(3)</span></li>
                        <li class="cat-item cat-item-246"><a
                                href="https://chuijhal.com/product-category/%e0%a6%ae%e0%a6%a7%e0%a7%81-%e0%a6%93-%e0%a6%a4%e0%a7%87%e0%a6%b2/">মধু
                                ও তেল</a> <span class="count">(5)</span></li>
                        <li class="cat-item cat-item-247"><a
                                href="https://chuijhal.com/product-category/%e0%a6%ae%e0%a6%b8%e0%a6%b2%e0%a6%be/">মসলা</a>
                            <span class="count">(12)</span>
                        </li>
                        <li class="cat-item cat-item-249"><a
                                href="https://chuijhal.com/product-category/%e0%a6%ae%e0%a6%be%e0%a6%b9%e0%a7%87%e0%a6%b0%e0%a6%ae%e0%a6%9c%e0%a6%be%e0%a6%a8-%e0%a6%b8%e0%a7%8d%e0%a6%aa%e0%a7%87%e0%a6%b6%e0%a6%be%e0%a6%b2/">মাহেরমজান
                                স্পেশাল</a> <span class="count">(3)</span></li>
                        <li class="cat-item cat-item-671"><a
                                href="https://chuijhal.com/product-category/%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a8%e0%a6%be-%e0%a6%ae%e0%a6%be%e0%a6%82%e0%a6%b8/">রান্না
                                মাংস</a> <span class="count">(1)</span></li>
                        <li class="cat-item cat-item-252"><a
                                href="https://chuijhal.com/product-category/%e0%a6%b0%e0%a7%81%e0%a6%9f%e0%a6%bf-%e0%a6%ae%e0%a7%87%e0%a6%95%e0%a6%be%e0%a6%b0/">রুটি
                                মেকার</a> <span class="count">(3)</span></li>
                    </ul>
                </div>
                <div id="woocommerce_product_tag_cloud-2" class="widget woocommerce widget_product_tag_cloud">
                    <h4 class="widget-title">Product tags</h4>
                    <div class="tagcloud"><a
                            href="https://chuijhal.com/product-tag/%e0%a6%8f%e0%a6%95-%e0%a6%95%e0%a7%8b%e0%a7%9f%e0%a6%be-%e0%a6%b0%e0%a6%b8%e0%a7%81%e0%a6%a8/"
                            class="tag-cloud-link tag-link-412 tag-link-position-1" style="font-size: 22pt;"
                            aria-label="এক কোয়া রসুন (2 products)">এক কোয়া রসুন</a>
                        <a href="https://chuijhal.com/product-tag/%e0%a6%95%e0%a6%be%e0%a6%9a%e0%a6%be-%e0%a6%ae%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%9a%e0%a6%be%e0%a6%b0/"
                            class="tag-cloud-link tag-link-407 tag-link-position-2" style="font-size: 8pt;"
                            aria-label="কাচা মরিচের আচার (1 product)">কাচা মরিচের আচার</a>
                        <a href="https://chuijhal.com/product-tag/%e0%a6%ac%e0%a7%8b%e0%a6%ae%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%87-%e0%a6%ae%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%9a%e0%a6%be%e0%a6%b0/"
                            class="tag-cloud-link tag-link-406 tag-link-position-3" style="font-size: 8pt;"
                            aria-label="বোম্বাই মরিচের আচার (1 product)">বোম্বাই মরিচের আচার</a>
                        <a href="https://chuijhal.com/product-tag/%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%b0-%e0%a6%ae%e0%a6%b8%e0%a6%b2%e0%a6%be/"
                            class="tag-cloud-link tag-link-450 tag-link-position-4" style="font-size: 8pt;"
                            aria-label="স্টার মসলা (1 product)">স্টার মসলা</a>
                        <a href="https://chuijhal.com/product-tag/%e0%a6%b8%e0%a7%8d%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b8%e0%a6%a1-%e0%a6%9c%e0%a6%b2%e0%a6%aa%e0%a6%be%e0%a6%87-%e0%a6%86%e0%a6%9a%e0%a6%be%e0%a6%b0/"
                            class="tag-cloud-link tag-link-376 tag-link-position-5" style="font-size: 8pt;"
                            aria-label="স্ম্যাসড জলপাই আচার (1 product)">স্ম্যাসড জলপাই আচার</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="toggleSidebar cartSidebarContainer">
            <div class="cartSidebarWrap">
                <div class="wc-"></div>
                <span class="wc--bg"></span>
                <div class="widget_shopping_cart_content">
                    <div class="cartSidebarHeader">
                        <div id="cart-close-btn"></div>
                        <div class="cartSidebarTitle">
                            Shopping Bag </div>
                        <div class="cartContentsCount">
                            20 </div>
                    </div>
                    <ul class="cart_list product_list_widget ">
                        <li class="mini_cart_item">

                            <a href="https://chuijhal.com/cart/?remove_item=32c92c5a9c391d8a2a2a05770f1a3395&#038;_wpnonce=61822a9bf3"
                                class="remove" aria-label="Remove this item" data-product_id="32614"
                                data-product_sku="Combo1" data-item-key="32c92c5a9c391d8a2a2a05770f1a3395"></a>

                            <div class="wc- hide"></div>

                            <a href="https://chuijhal.com/cart/?undo_item=32c92c5a9c391d8a2a2a05770f1a3395&#038;_wpnonce=61822a9bf3"
                                class="icon icon-undo undo" title="Undo this item" data-product_id="32614"
                                data-product_sku="Combo1"
                                data-item-key="32c92c5a9c391d8a2a2a05770f1a3395"><span></span></a>

                            <a href="https://chuijhal.com/product/pickle-combo-offer-01/">
                                <img width="300" height="300"
                                    src="//chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-300x300.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt
                                    decoding="async"
                                    srcset="//chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-300x300.png 300w, //chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-768x768.png 768w, //chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-340x340.png 340w, //chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-680x680.png 680w, //chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-600x600.png 600w, //chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-400x400.png 400w, //chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1-100x100.png 100w, //chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1.png 1080w"
                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            <span>Pickle Combo Offer 01</span>


                            <span class="quantity">16 &times; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>1,350.00</bdi></span></span>
                        </li>
                        <li class="mini_cart_item">

                            <a href="https://chuijhal.com/cart/?remove_item=32bb9f32e97807c36a1b1a881b31d33b&#038;_wpnonce=61822a9bf3"
                                class="remove" aria-label="Remove this item" data-product_id="33077"
                                data-product_sku="Chilli Combo" data-item-key="32bb9f32e97807c36a1b1a881b31d33b"></a>

                            <div class="wc- hide"></div>

                            <a href="https://chuijhal.com/cart/?undo_item=32bb9f32e97807c36a1b1a881b31d33b&#038;_wpnonce=61822a9bf3"
                                class="icon icon-undo undo" title="Undo this item" data-product_id="33077"
                                data-product_sku="Chilli Combo"
                                data-item-key="32bb9f32e97807c36a1b1a881b31d33b"><span></span></a>

                            <a href="https://chuijhal.com/product/combo-3-jhal-pickle/">
                                <img width="300" height="300"
                                    src="//chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-300x300.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="৩ টা ঝাল আচার বোম্বাই, নাগা কাঁচা মরিচ" decoding="async"
                                    srcset="//chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-300x300.png 300w, //chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-768x768.png 768w, //chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-340x340.png 340w, //chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-680x680.png 680w, //chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-600x600.png 600w, //chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-400x400.png 400w, //chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle-100x100.png 100w, //chuijhal.com/wp-content/uploads/2023/08/3-chilli-pickle.png 1080w"
                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            <span>Combo ৩ বিভাগের ৩ টা ঝাল মরিচের অফার</span>


                            <span class="quantity">1 &times; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>1,350.00</bdi></span></span>
                        </li>
                        <li class="mini_cart_item">

                            <a href="https://chuijhal.com/cart/?remove_item=23c7963ec66989c155759d1ed3a6cbea&#038;_wpnonce=61822a9bf3"
                                class="remove" aria-label="Remove this item" data-product_id="36170" data-product_sku
                                data-item-key="23c7963ec66989c155759d1ed3a6cbea"></a>

                            <div class="wc- hide"></div>

                            <a href="https://chuijhal.com/cart/?undo_item=23c7963ec66989c155759d1ed3a6cbea&#038;_wpnonce=61822a9bf3"
                                class="icon icon-undo undo" title="Undo this item" data-product_id="36170"
                                data-product_sku data-item-key="23c7963ec66989c155759d1ed3a6cbea"><span></span></a>

                            <a href="https://chuijhal.com/product/tok-jhal-misti-tetul-rorun-alubookhara-achar/">
                                <img width="300" height="300"
                                    src="//chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-300x300.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="টক ঝাল মিষ্টি" decoding="async"
                                    srcset="//chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-300x300.png 300w, //chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-768x768.png 768w, //chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-340x340.png 340w, //chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-680x680.png 680w, //chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-600x600.png 600w, //chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-400x400.png 400w, //chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo-100x100.png 100w, //chuijhal.com/wp-content/uploads/2024/05/3-Pcs-Pickle-Combo.png 1080w"
                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            <span>টক ঝাল মিষ্টি আচার তেঁতুল, রসুন, আলুবোখারা</span>


                            <span class="quantity">1 &times; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>1,350.00</bdi></span></span>
                        </li>
                        <li class="mini_cart_item">

                            <a href="https://chuijhal.com/cart/?remove_item=bfdbc88767ec7e391c7ceb9dd747f440&#038;_wpnonce=61822a9bf3"
                                class="remove" aria-label="Remove this item" data-product_id="15026" data-product_sku
                                data-item-key="bfdbc88767ec7e391c7ceb9dd747f440"></a>

                            <div class="wc- hide"></div>

                            <a href="https://chuijhal.com/cart/?undo_item=bfdbc88767ec7e391c7ceb9dd747f440&#038;_wpnonce=61822a9bf3"
                                class="icon icon-undo undo" title="Undo this item" data-product_id="15026"
                                data-product_sku data-item-key="bfdbc88767ec7e391c7ceb9dd747f440"><span></span></a>

                            <a
                                href="https://chuijhal.com/product/chuijhal-%e0%a6%9a%e0%a7%81%e0%a6%87%e0%a6%9d%e0%a6%be%e0%a6%b2-%e0%a7%a7%e0%a6%95%e0%a7%87%e0%a6%9c%e0%a6%bf/">
                                <img width="300" height="300"
                                    src="//chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-300x300.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="খুলনার চুইঝাল" decoding="async"
                                    srcset="//chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-300x300.png 300w, //chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-100x100.png 100w, //chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-600x600.png 600w, //chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-768x768.png 768w, //chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-340x340.png 340w, //chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-680x680.png 680w, //chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special-400x400.png 400w, //chuijhal.com/wp-content/uploads/2019/01/Chuijhal-EiD-Special.png 800w"
                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            <span>Chuijhal (চুইঝাল) 1 কেজি</span>


                            <span class="quantity">1 &times; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>1,200.00</bdi></span></span>
                        </li>
                        <li class="mini_cart_item">

                            <a href="https://chuijhal.com/cart/?remove_item=596676c0468e1aa77be2d247aa42455e&#038;_wpnonce=61822a9bf3"
                                class="remove" aria-label="Remove this item" data-product_id="25254" data-product_sku
                                data-item-key="596676c0468e1aa77be2d247aa42455e"></a>

                            <div class="wc- hide"></div>

                            <a href="https://chuijhal.com/cart/?undo_item=596676c0468e1aa77be2d247aa42455e&#038;_wpnonce=61822a9bf3"
                                class="icon icon-undo undo" title="Undo this item" data-product_id="25254"
                                data-product_sku data-item-key="596676c0468e1aa77be2d247aa42455e"><span></span></a>

                            <a href="https://chuijhal.com/product/deshi-rosuner-achar-420gram/">
                                <img width="300" height="300"
                                    src="//chuijhal.com/wp-content/uploads/2020/05/Desi-rosun-achar-300x300.jpg"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="Deshi-rosuner-achar" decoding="async"
                                    srcset="//chuijhal.com/wp-content/uploads/2020/05/Desi-rosun-achar-300x300.jpg 300w, //chuijhal.com/wp-content/uploads/2020/05/Desi-rosun-achar-100x100.jpg 100w, //chuijhal.com/wp-content/uploads/2020/05/Desi-rosun-achar-340x340.jpg 340w"
                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            <span>দেশি রসুন এর আচার ৪২০ গ্রাম</span>


                            <span class="quantity">1 &times; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>490.00</bdi></span></span>
                        </li>
                    </ul>
                    <div class="cart-bottom-box">
                        <p class="total"><strong>Subtotal:</strong> <span
                                class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>25,990.00</bdi></span>
                        </p>
                        <p class="buttons">
                            <a href="https://chuijhal.com/cart/" class="button wc-forward">
                                <span data-hover="View Cart">View Cart</span>
                            </a><a href="https://chuijhal.com/checkout/" class="button checkout wc-forward">
                                <span data-hover="Checkout">Checkout</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @include('website.version1.layouts.include.header')

        <span id="sidebar-open-overlay"></span>
        <div id="search-form">
            <div class="search-form searchContainer">
                <form role="search" method="get" class="searchform popUp" action="https://chuijhal.com/">
                    <label class="screen-reader-text" for="s"></label>
                    <div class="searchWrapper">
                        <input type="text" placeholder="Search" value name="s" class="searchInput"
                            autocomplete="off" />
                        <div class="typing-indicator">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="searchIcon"><span class="icon icon-search"></span></div>
                        <div class="searchResults close"></div>
                        <div class="showAllResults close">See All Results</div>
                    </div>
                </form>
            </div>
        </div>
        <div class="toggleSidebarContainer">
            <div id="main-content" class="main-content   type1  ">
                <div id="main">
                    <div id="home" class="hidehome"></div>
                    <style>
                        #header h1,
                        #header .subtitle,
                        #header ul li a,
                        .page-breadcrumb .woocommerce-breadcrumb,
                        .page-breadcrumb .woocommerce-breadcrumb a,
                        .page-breadcrumb .woocommerce-breadcrumb span.delimiter {
                            color: #191919;
                        }

                        #header ul li a:before {
                            background-color: #191919;
                        }
                    </style>
                    <div id="header" class>
                        <div id="header-content">
                            <div class="page-breadcrumb">
                                <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a
                                        href="{{ route('/') }}">Home</a><span class="delimiter">/</span>চেকআউট
                                </nav>
                                </nav>
                            </div>
                            <h1>চেকআউট</h1>
                        </div>
                    </div>

                    <div class="wrap" id="pageHeight">
                        <div class="container">

                            <div id="post-557" class="post-557 page type-page status-publish hentry">
                                <div id="vc_row_1" class="ep-section background_cover row_section  section ">
                                    <div class="section-container">
                                        <div class="clearfix"></div>
                                        <div class="section-content-container" style="padding-bottom:100px;">
                                            <div class="container">
                                                <div
                                                    class="wpb_row vc_row-fluid parallax_content  vc_row vc_column-gap vc_column-gap-30">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="  vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="woocommerce">
                                                                    {{-- <div class="woocommerce-notices-wrapper"></div> --}}
                                                                    {{-- <div class="woocommerce-form-coupon-toggle">
                                                                        <div class="woocommerce-info">
                                                                            Have a coupon? <a href="#"
                                                                                class="showcoupon">Click here to enter
                                                                                your code</a> </div>
                                                                    </div>
                                                                    <form
                                                                        class="checkout_coupon woocommerce-form-coupon"
                                                                        method="post" style="display:none">
                                                                        <p>If you have a coupon code, please apply it
                                                                            below.</p>
                                                                        <p class="form-row form-row-first">
                                                                            <label for="coupon_code"
                                                                                class="screen-reader-text">Coupon:</label>
                                                                            <input type="text" name="coupon_code"
                                                                                class="input-text"
                                                                                placeholder="Coupon code"
                                                                                id="coupon_code" value />
                                                                        </p>
                                                                        <p class="form-row form-row-last">
                                                                            <button type="submit" class="button"
                                                                                name="apply_coupon"
                                                                                value="Apply coupon">Apply
                                                                                coupon</button>
                                                                        </p>
                                                                        <div class="clear"></div>
                                                                    </form> --}}
                                                                    <div class="woocommerce-notices-wrapper"></div>
                                                                    <form name="checkout" method="post"
                                                                        class="checkout woocommerce-checkout"
                                                                        action="{{ route('place.order') }}"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="span8" id="customer_details">
                                                                            <wc-order-attribution-inputs></wc-order-attribution-inputs>
                                                                            <div class="woocommerce-billing-fields">
                                                                                <div class="row">
                                                                                    <div class="span4">
                                                                                        <h3>বিলিং এবং শিপিং</h3>
                                                                                    </div>
                                                                                    <div class="span8">
                                                                                        <div
                                                                                            class="woocommerce-billing-fields__field-wrapper">
                                                                                            <p class="form-row form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text validate-required"
                                                                                                id="billing_first_name_field"
                                                                                                data-priority="10">
                                                                                                <label
                                                                                                    for="billing_first_name"
                                                                                                    class>আপনার পূর্ণ
                                                                                                    নাম &nbsp;<abbr
                                                                                                        class="required"
                                                                                                        title="required">*</abbr></label><span
                                                                                                    class="woocommerce-input-wrapper"><input
                                                                                                        type="text"
                                                                                                        class="input-text "
                                                                                                        name="customer_name"
                                                                                                        id="billing_first_name"
                                                                                                        placeholder="নাম লিখুন"
                                                                                                        value
                                                                                                        autocomplete="given-name" /></span>
                                                                                            </p>
                                                                                            <p class="form-row form-row-wide address-field update_totals_on_change thwcfd-required thwcfd-field-wrapper thwcfd-field-country validate-required"
                                                                                                id="billing_country_field"
                                                                                                data-priority="30">
                                                                                                <label
                                                                                                    for="billing_country"
                                                                                                    class>Country /
                                                                                                    Region&nbsp;<abbr
                                                                                                        class="required"
                                                                                                        title="required">*</abbr></label><span
                                                                                                    class="woocommerce-input-wrapper"><strong>Bangladesh</strong><input
                                                                                                        type="hidden"
                                                                                                        name="billing_country"
                                                                                                        id="billing_country"
                                                                                                        value="BD"
                                                                                                        autocomplete="country"
                                                                                                        class="country_to_state"
                                                                                                        readonly="readonly" /></span>
                                                                                            </p>
                                                                                            <p class="form-row form-row-wide address-field thwcfd-required thwcfd-field-wrapper thwcfd-field-text validate-required"
                                                                                                id="billing_address_1_field"
                                                                                                data-priority="40">
                                                                                                <label
                                                                                                    for="billing_address_1"
                                                                                                    class>আপনার ঠিকানা
                                                                                                    &nbsp;<abbr
                                                                                                        class="required"
                                                                                                        title="required">*</abbr></label><span
                                                                                                    class="woocommerce-input-wrapper"><input
                                                                                                        type="text"
                                                                                                        class="input-text "
                                                                                                        name="customer_address"
                                                                                                        id="billing_address_1"
                                                                                                        placeholder="বাড়ি, রোড, ব্লক, এরিয়া, থানা, জেলা"
                                                                                                        value
                                                                                                        autocomplete="address-line1" /></span>
                                                                                            </p>
                                                                                            <p class="form-row form-row-wide thwcfd-required thwcfd-field-wrapper thwcfd-field-tel validate-required"
                                                                                                id="billing_phone_field"
                                                                                                data-priority="80">
                                                                                                <label
                                                                                                    for="billing_phone"
                                                                                                    class>মোবাইল
                                                                                                    &nbsp;<abbr
                                                                                                        class="required"
                                                                                                        title="required">*</abbr></label><span
                                                                                                    class="woocommerce-input-wrapper"><input
                                                                                                        type="tel"
                                                                                                        class="input-text "
                                                                                                        name="customer_phone"
                                                                                                        id="billing_phone"
                                                                                                        placeholder="আপনার ১১ ডিজিটের মোবাইল নম্বর ইংরেজিতে"
                                                                                                        value
                                                                                                        autocomplete="tel" /></span>
                                                                                            </p>
                                                                                            <p class="form-row form-row-wide thwcfd-optional thwcfd-field-wrapper thwcfd-field-email validate-email"
                                                                                                id="billing_email_field"
                                                                                                data-priority="90">
                                                                                                <label
                                                                                                    for="billing_email"
                                                                                                    class>আপনার ইমেইল
                                                                                                    এড্রেস &nbsp;<span
                                                                                                        class="optional">(optional)</span></label><span
                                                                                                    class="woocommerce-input-wrapper"><input
                                                                                                        type="email"
                                                                                                        class="input-text "
                                                                                                        name="billing_email"
                                                                                                        id="billing_email"
                                                                                                        placeholder="আপনার ইমেইল"
                                                                                                        value
                                                                                                        autocomplete="email username" /></span>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="woocommerce-shipping-fields">
                                                                                <div class="row">
                                                                                    <div class="span3">
                                                                                        <h3>Additional Information</h3>
                                                                                    </div>
                                                                                    <div class="span8">
                                                                                        <p class="form-row notes thwcfd-field-wrapper thwcfd-field-textarea"
                                                                                            id="order_comments_field"
                                                                                            data-priority="10"><label
                                                                                                for="order_comments"
                                                                                                class>অর্ডারের নির্দেশনা
                                                                                                &nbsp;<span
                                                                                                    class="optional">(optional)</span></label><span
                                                                                                class="woocommerce-input-wrapper">
                                                                                                <textarea name="order_comments" class="input-text " id="order_comments"
                                                                                                    placeholder="আপনি কম্বো নিজের মনের মত তৈরি করতে কি কি আচার নিতে চান লিখুন" rows="2" cols="5"></textarea>
                                                                                            </span></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="span4 order-review-container">
                                                                            <h3 id="order_review_heading">আপনার অর্ডার
                                                                            </h3>
                                                                            <div id="order_review"
                                                                                class="woocommerce-checkout-review-order">
                                                                                <table
                                                                                    class="shop_table woocommerce-checkout-review-order-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="product-name">
                                                                                                Product</th>
                                                                                            <th class="product-total">
                                                                                                Subtotal</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @php
                                                                                            $carts = session()->get(
                                                                                                'cart',
                                                                                            );
                                                                                        @endphp

                                                                                        @forelse ($carts ?? [] as $info)
                                                                                            <tr class="cart_item">
                                                                                                <td
                                                                                                    class="product-name">
                                                                                                    {{ $info['name'] }}
                                                                                                    ({{ $info['size'] ?? '' }})
                                                                                                    (
                                                                                                    {{ $info['qty'] }}&nbsp;
                                                                                                    <strong
                                                                                                        class="product-quantity">&times;&nbsp;৳{{ $info['price'] }}</strong>)
                                                                                                </td>
                                                                                                <td
                                                                                                    class="product-total">
                                                                                                    <span
                                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{ $info['price'] * $info['qty'] }}</bdi></span>
                                                                                                </td>
                                                                                            </tr>

                                                                                        @empty
                                                                                        @endforelse

                                                                                    </tbody>
                                                                                    <tfoot>
                                                                                        <tr class="cart-subtotal">
                                                                                            <th>Subtotal</th>
                                                                                            <td><span
                                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>
                                                                                                            @if (session('cart'))
                                                                                                            @php
                                                                                                                $net_total = 0;
                                                                                                            @endphp

                                                                                                            @foreach (session('cart') as $id => $details)
                                                                                                                @php
                                                                                                                    $net_total =
                                                                                                                        $net_total +
                                                                                                                        $details[
                                                                                                                            'qty'
                                                                                                                        ] *
                                                                                                                            $details[
                                                                                                                                'price'
                                                                                                                            ];
                                                                                                                @endphp
                                                                                                            @endforeach
                                                                                                            {{ $net_total }}
                                                                                                        @endif
                                                                                                        </bdi></span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr
                                                                                            class="woocommerce-shipping-totals shipping">
                                                                                            <th colspan="2">Shipping
                                                                                            </th>
                                                                                        </tr>
                                                                                        <tr
                                                                                            class="woocommerce-shipping-totals shipping">
                                                                                            <td colspan="2"
                                                                                                data-title="Shipping">
                                                                                                <ul id="shipping_method"
                                                                                                    class="woocommerce-shipping-methods">
                                                                                                    <li>
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            name="delivery_cost"
                                                                                                            data-index="0"
                                                                                                            id="shipping_method_0_flat_rate8"
                                                                                                            value="{{ delivery_policy()->inside_dhaka ?? 0 }}"
                                                                                                           checked="checked"
                                                                                                            class="shipping_method" /><label
                                                                                                            for="shipping_method_0_flat_rate8">ঢাকার
                                                                                                            মধ্যে: <span
                                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                        class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>75.00</bdi></span></label>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            name="delivery_cost"
                                                                                                            data-index="0"
                                                                                                            id="shipping_method_0_flat_rate9"
                                                                                                            value="{{ delivery_policy()->outside_dhaka ?? 0 }}"
                                                                                                            class="shipping_method" /><label
                                                                                                            for="shipping_method_0_flat_rate9 ">ঢাকার
                                                                                                            বাইরে: <span
                                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                        class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>120.00</bdi></span></label>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            name="delivery_cost"
                                                                                                            data-index="0"
                                                                                                            id="shipping_method_0_local_pickup10"
                                                                                                            value="0"
                                                                                                            class="shipping_method"
                                                                                                             /><label
                                                                                                            for="shipping_method_0_local_pickup10">Pickup
                                                                                                            From
                                                                                                            Store</label>
                                                                                                    </li>
                                                                                                </ul>

                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr class="order-total">
                                                                                            <th>Total</th>
                                                                                            <td><strong>৳<span
                                                                                                        class="woocommerce-Price-amount"><bdi><span
                                                                                                                class="woocommerce-Price-currencySymbol"></span>
                                                                                                            @if (session('cart'))
                                                                                                                @php
                                                                                                                    $net_total = 0;
                                                                                                                @endphp

                                                                                                                @foreach (session('cart') as $id => $details)
                                                                                                                    @php
                                                                                                                        $net_total =
                                                                                                                            $net_total +
                                                                                                                            $details[
                                                                                                                                'qty'
                                                                                                                            ] *
                                                                                                                                $details[
                                                                                                                                    'price'
                                                                                                                                ];
                                                                                                                    @endphp
                                                                                                                @endforeach
                                                                                                                <span class="total-amount">{{ $net_total }}</span>

                                                                                                                <input type="hidden" class="total-amount-input" value="{{ $net_total }}">
                                                                                                            @endif
                                                                                                        </bdi></span></strong>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tfoot>
                                                                                </table>
                                                                                <div id="payment"
                                                                                    class="woocommerce-checkout-payment">
                                                                                    <ul
                                                                                        class="wc_payment_methods payment_methods methods">
                                                                                        <li
                                                                                            class="wc_payment_method payment_method_cod">
                                                                                            <input
                                                                                                id="payment_method_cod"
                                                                                                type="radio"
                                                                                                class="input-radio"
                                                                                                name="payment_method"
                                                                                                value="cod"
                                                                                                checked="checked"
                                                                                                data-order_button_text />
                                                                                            <label
                                                                                                for="payment_method_cod">
                                                                                                Cash on delivery
                                                                                            </label>
                                                                                            <div
                                                                                                class="payment_box payment_method_cod">
                                                                                                <p>Pay with cash upon
                                                                                                    delivery.</p>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li
                                                                                            class="wc_payment_method payment_method_sslcommerz">
                                                                                            <input
                                                                                                id="payment_method_sslcommerz"
                                                                                                type="radio"
                                                                                                class="input-radio"
                                                                                                name="payment_method"
                                                                                                value="sslcommerz"
                                                                                                data-order_button_text />
                                                                                            <label
                                                                                                for="payment_method_sslcommerz">
                                                                                                Mobile Banking and
                                                                                                Debit/Credit Cards
                                                                                            </label>
                                                                                            <div class="payment_box payment_method_sslcommerz"
                                                                                                style="display:none;">
                                                                                                <p>Pay securely by
                                                                                                    Credit or Debit card
                                                                                                    or mobile banking.
                                                                                                    You can shop using
                                                                                                    local credit/debit
                                                                                                    cards like VISA,
                                                                                                    MasterCard, DBBL
                                                                                                    Nexus Card and any
                                                                                                    kind of credit card
                                                                                                    or bank accounts
                                                                                                    right from your
                                                                                                    home.<br />
                                                                                                    <a><img decoding="async"
                                                                                                            style="width:400px;height:auto"
                                                                                                            src="https://chuijhal.com/wp-content/uploads/2019/03/Chuijhal-Pay-With-logo-All-Size-1.png" /></a>banking
                                                                                                    through SSLCommerz
                                                                                                    Secure Servers.
                                                                                                </p>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="form-row place-order">
                                                                                        <noscript>
                                                                                            Since your browser does not
                                                                                            support JavaScript, or it is
                                                                                            disabled, please ensure you
                                                                                            click the <em>Update
                                                                                                Totals</em> button
                                                                                            before placing your order.
                                                                                            You may be charged more than
                                                                                            the amount stated above if
                                                                                            you fail to do so.
                                                                                            <br /><button
                                                                                                type="submit"
                                                                                                class="button alt"
                                                                                                name="woocommerce_checkout_update_totals"
                                                                                                value="Update totals">Update
                                                                                                totals</button>
                                                                                        </noscript>
                                                                                        <div
                                                                                            class="woocommerce-terms-and-conditions-wrapper">
                                                                                            <div
                                                                                                class="woocommerce-privacy-policy-text">
                                                                                            </div>
                                                                                        </div>
                                                                                        <button type="submit"
                                                                                            class="button alt"
                                                                                            name="woocommerce_checkout_place_order"
                                                                                            id="place_order"
                                                                                            value="Place order"
                                                                                            data-value="Place order">Place
                                                                                            order</button>
                                                                                        <input type="hidden"
                                                                                            id="woocommerce-process-checkout-nonce"
                                                                                            name="woocommerce-process-checkout-nonce"
                                                                                            value="1e5f3ce801" /><input
                                                                                            type="hidden"
                                                                                            name="_wp_http_referer"
                                                                                            value="/checkout/" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer-bottom dark">
            <div class="wrap">

                <div class="footer_content ">
                    <div class="footer_content_left">
                        <div class="copyright_logo">

                            <div class="copyright">
                                Copyright 2016 - 2024 Chuijhal.com , All Right Reserved </div>
                        </div>
                    </div>
                    <div class="footer_content_right">

                        <ul class="social-icons">
                            <li class="socialLinkShortcode textstyle facebook">
                                <a href="https://www.facebook.com/chuijhal.cooking/" target="_blank">
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="socialLinkShortcode textstyle youtube">
                                <a href="https://www.youtube.com/channel/UChjwisbZJ9Yz-JRCR9NGqyg" target="_blank">
                                    <span>YouTube</span>
                                </a>
                            </li>
                            <li class="socialLinkShortcode textstyle pinterest">
                                <a href="https://www.pinterest.com/chuijhalbd/" target="_blank">
                                    <span>Pinterest</span>
                                </a>
                            </li>
                            <li class="socialLinkShortcode textstyle instagram">
                                <a href="https://www.instagram.com/chuijhal.cooking/" target="_blank">
                                    <span>Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <div id="ep_wc_notices">
        <div class="wc-notice-content"></div>
    </div>
    <div id="ep-modal">
        <a href="#" rel="prev">
            <span></span>
        </a>
        <a href="#" rel="next">
            <span></span>
        </a>
        <span class="wc-"></span>
        <div class="modal-content-wrapper">
            <div class="modal-main">
                <div class="modal-head">
                    <a href="#" id="modal-close"></a>
                </div>
                <div id="modal-content" class="woocommerce single-product"></div>
            </div>
        </div>
    </div>
    <div class="cart fixed-add-to-cart-container">
        <div class="fixed-add-to-cart">
            <a class="single_add_to_cart_button button alt product_type_simple add_to_cart_button" href="#"
                title>
                <span class="icon"></span>
                <span class="txt" data-hover>
                </span>
            </a>
            <a href="https://chuijhal.com/cart/" class="added_to_cart wc-forward hide"></a>
        </div>
    </div>
    <div id="customer_login" class="hide-login ">
        <h2>Login</h2>
        <a class="register-link"
            href="https://chuijhal.com/%e0%a6%85%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%95%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%9f/">Create
            an account</a>
        <form class="woocommerce-form woocommerce-form-login login" method="post">
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <label for="username">Username or email address <span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
                    id="username" value />
            </p>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <label for="password">Password <span class="required">*</span></label>
                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password"
                    id="password" />
            </p>
            <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LcqYfMkAAAAAHfV7_4lM45iYaeFXMMKmyckF1Fs"
                data-callback="submitEnable" data-expired-callback="submitDisable"></div>
            <script>
                function submitEnable() {
                    var button = document.getElementById('wp-submit');
                    if (button === null) {
                        button = document.getElementById('submit');
                    }
                    if (button !== null) {
                        button.removeAttribute('disabled');
                    }
                    var woo_buttons = [".woocommerce-form-login button", ".woocommerce-form-register button",
                        ".woocommerce-ResetPassword button"
                    ];
                    if (typeof jQuery != 'undefined') {
                        jQuery.each(woo_buttons, function(i, btn) {
                            jQuery(btn).removeAttr('disabled');
                        });
                    }
                }

                function submitDisable() {
                    var button = document.getElementById('wp-submit');
                    if (button === null) {
                        button = document.getElementById('submit');
                    }
                    if (button !== null) {
                        button.setAttribute('disabled', 'disabled');
                    }
                    var woo_buttons = [".woocommerce-form-login button", ".woocommerce-form-register button",
                        ".woocommerce-ResetPassword button"
                    ];
                    if (typeof jQuery != 'undefined') {
                        jQuery.each(woo_buttons, function(i, btn) {
                            jQuery(btn).attr('disabled', 'disabled');
                        });
                    }
                }
            </script>
            <noscript>
                <div style="width: 100%; height: 473px;">
                    <div style="width: 100%; height: 422px; position: relative;">
                        <div style="width: 302px; height: 422px; position: relative;">
                            <iframe
                                src="https://www.google.com/recaptcha/api/fallback?k=6LcqYfMkAAAAAHfV7_4lM45iYaeFXMMKmyckF1Fs"
                                frameborder="0" title="captcha" scrolling="no"
                                style="width: 302px; height:422px; border-style: none;">
                            </iframe>
                        </div>
                        <div
                            style="width: 100%; height: 60px; border-style: none;
              bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" title="response" class="g-recaptcha-response"
                                style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                  margin: 10px 25px; padding: 0px; resize: none;"
                                value="">
              </textarea>
                        </div>
                    </div>
                </div><br>
            </noscript>
            <p class="form-row">
                <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                    value="5919beadcf" /><input type="hidden" name="_wp_http_referer" value="/checkout/" /> <input
                    type="submit" class="woocommerce-Button button" name="login" value="Login" />
                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme"
                        type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
                </label>
                <span class="woocommerce-LostPassword lost_password">
                    <a
                        href="https://chuijhal.com/%e0%a6%85%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%95%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%9f/lost-password/">Lost
                        your password?</a>
                </span>
            </p>
        </form>
    </div>
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
    <script type="text/html" id="wpb-modifications"></script><noscript><img height="1" width="1" style="display: none;"
            src="https://www.facebook.com/tr?id=427272935467605&ev=InitiateCheckout&noscript=1&cd%5Bcontent_type%5D=product&cd%5Bcontent_ids%5D=%5B%2232614%22%2C%2233077%22%2C%2236170%22%2C%2215026%22%2C%2225254%22%5D&cd%5Bcontent_name%5D=Pickle+Combo+Offer+01%2C+Combo+%E0%A7%A9+%E0%A6%AC%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A6%97%E0%A7%87%E0%A6%B0+%E0%A7%A9+%E0%A6%9F%E0%A6%BE+%E0%A6%9D%E0%A6%BE%E0%A6%B2+%E0%A6%AE%E0%A6%B0%E0%A6%BF%E0%A6%9A%E0%A7%87%E0%A6%B0+%E0%A6%85%E0%A6%AB%E0%A6%BE%E0%A6%B0%2C+%E0%A6%9F%E0%A6%95+%E0%A6%9D%E0%A6%BE%E0%A6%B2+%E0%A6%AE%E0%A6%BF%E0%A6%B7%E0%A7%8D%E0%A6%9F%E0%A6%BF+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0++%E0%A6%A4%E0%A7%87%E0%A6%81%E0%A6%A4%E0%A7%81%E0%A6%B2%2C++%E0%A6%B0%E0%A6%B8%E0%A7%81%E0%A6%A8%2C+%E0%A6%86%E0%A6%B2%E0%A7%81%E0%A6%AC%E0%A7%8B%E0%A6%96%E0%A6%BE%E0%A6%B0%E0%A6%BE%2C+Chuijhal+%28%E0%A6%9A%E0%A7%81%E0%A6%87%E0%A6%9D%E0%A6%BE%E0%A6%B2%29+1+%E0%A6%95%E0%A7%87%E0%A6%9C%E0%A6%BF%2C+%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A6%BF+%E0%A6%B0%E0%A6%B8%E0%A7%81%E0%A6%A8+%E0%A6%8F%E0%A6%B0+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0++%E0%A7%AA%E0%A7%A8%E0%A7%A6+%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AE&cd%5Bcategory_name%5D=%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0%2C+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0%2C+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0%2C+%E0%A6%AE%E0%A6%B8%E0%A6%B2%E0%A6%BE%2C+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0&cd%5Bcontents%5D=%5B%7B%22id%22%3A%2232614%22%2C%22quantity%22%3A16%7D%2C%7B%22id%22%3A%2233077%22%2C%22quantity%22%3A1%7D%2C%7B%22id%22%3A%2236170%22%2C%22quantity%22%3A1%7D%2C%7B%22id%22%3A%2215026%22%2C%22quantity%22%3A1%7D%2C%7B%22id%22%3A%2225254%22%2C%22quantity%22%3A1%7D%5D&cd%5Btags%5D=%E0%A6%8F%E0%A6%95+%E0%A6%95%E0%A7%8B%E0%A7%9F%E0%A6%BE+%E0%A6%B0%E0%A6%B8%E0%A7%81%E0%A6%A8&cd%5Bnum_items%5D=20&cd%5Bsubtotal%5D=25990&cd%5Bvalue%5D=25990&cd%5Bcurrency%5D=BDT&cd%5Bpage_title%5D=%E0%A6%9A%E0%A7%87%E0%A6%95%E0%A6%86%E0%A6%89%E0%A6%9F&cd%5Bpost_type%5D=page&cd%5Bpost_id%5D=557&cd%5Bplugin%5D=PixelYourSite&cd%5Buser_role%5D=guest&cd%5Bevent_url%5D=chuijhal.com%2Fcheckout%2F"
            alt=""></noscript>
    <noscript><img height="1" width="1" style="display: none;"
            src="https://www.facebook.com/tr?id=427272935467605&ev=PageView&noscript=1&cd%5Bpage_title%5D=%E0%A6%9A%E0%A7%87%E0%A6%95%E0%A6%86%E0%A6%89%E0%A6%9F&cd%5Bpost_type%5D=page&cd%5Bpost_id%5D=557&cd%5Bplugin%5D=PixelYourSite&cd%5Buser_role%5D=guest&cd%5Bevent_url%5D=chuijhal.com%2Fcheckout%2F"
            alt=""></noscript>
    <noscript><img height="1" width="1" style="display: none;"
            src="https://www.google-analytics.com/collect?v=1&tid=G-Q4NWW12SW2&t=event&ec=ecommerce&pr0id=32614&pr0nm=Pickle+Combo+Offer+01&pr0pr=1350&pr0qt=16&pr1id=33077&pr1nm=Combo+%E0%A7%A9+%E0%A6%AC%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A6%97%E0%A7%87%E0%A6%B0+%E0%A7%A9+%E0%A6%9F%E0%A6%BE+%E0%A6%9D%E0%A6%BE%E0%A6%B2+%E0%A6%AE%E0%A6%B0%E0%A6%BF%E0%A6%9A%E0%A7%87%E0%A6%B0+%E0%A6%85%E0%A6%AB%E0%A6%BE%E0%A6%B0&pr1pr=1350&pr1qt=1&pr2id=36170&pr2nm=%E0%A6%9F%E0%A6%95+%E0%A6%9D%E0%A6%BE%E0%A6%B2+%E0%A6%AE%E0%A6%BF%E0%A6%B7%E0%A7%8D%E0%A6%9F%E0%A6%BF+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0++%E0%A6%A4%E0%A7%87%E0%A6%81%E0%A6%A4%E0%A7%81%E0%A6%B2%2C++%E0%A6%B0%E0%A6%B8%E0%A7%81%E0%A6%A8%2C+%E0%A6%86%E0%A6%B2%E0%A7%81%E0%A6%AC%E0%A7%8B%E0%A6%96%E0%A6%BE%E0%A6%B0%E0%A6%BE&pr2pr=1350&pr2qt=1&pr3id=15026&pr3nm=Chuijhal+%28%E0%A6%9A%E0%A7%81%E0%A6%87%E0%A6%9D%E0%A6%BE%E0%A6%B2%29+1+%E0%A6%95%E0%A7%87%E0%A6%9C%E0%A6%BF&pr3pr=1200&pr3qt=1&pr4id=25254&pr4nm=%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A6%BF+%E0%A6%B0%E0%A6%B8%E0%A7%81%E0%A6%A8+%E0%A6%8F%E0%A6%B0+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0++%E0%A7%AA%E0%A7%A8%E0%A7%A6+%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AE&pr4pr=490&pr4qt=1&pa=detail"
            alt="google_analytics"></noscript>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>

    <script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
    <link rel="stylesheet" id="login_nocaptcha_css-css"
        href="https://chuijhal.com/wp-content/plugins/login-recaptcha/css/style.css?ver=1710394054" type="text/css"
        media="all" />
    <link rel="stylesheet" id="wc-blocks-style-css"
        href="https://chuijhal.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-9.0.2"
        type="text/css" media="all" />
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.6" id="swv-js">
    </script>
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
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.6" id="contact-form-7-js">
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.9.0.2"
        id="selectWoo-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="thwcfd-checkout-script-js-extra">
        /* <![CDATA[ */
        var thwcfd_public_var = {
            "is_override_required": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woo-checkout-field-editor-pro/public/assets/js/thwcfd-public.min.js?ver=2.0.2"
        id="thwcfd-checkout-script-js"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.0.2"
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
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.0.2"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="https://chuijhal.com/wp-content/themes/vitrine/assets/js/allscripts.min.js?ver=1.0"
        id="epico_allscripts-js"></script>
    <script type="text/javascript" src="https://chuijhal.com/wp-content/themes/vitrine/assets/js/modernizr.min.js?ver=2.8.3"
        id="epico_modernizr-js"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/themes/vitrine/assets/js/modifiedscripts.min.js?ver=1.0"
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
    <script type="text/javascript"
        src="https://chuijhal.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.17"
        id="mediaelement-core-js"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=a091ed573bab13050d805822863c35a1"
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
            "nonce": "808fc2c6f5",
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
            "no_ajax_pages": ["https:\/\/chuijhal.com\/wp-login.php?action=logout&_wpnonce=b087614dd4"]
        };
        var paged_data = {
            "startPage": "1",
            "maxPages": "98",
            "nextLink": "https:\/\/chuijhal.com\/checkout\/page\/2\/",
            "Text": "...",
            "loadMoreText": "more posts",
            "noMorePostsText": "No More Posts"
        };
        var wc_single_product_params = {
            "i18n_required_rating_text": "Please select a rating",
            "review_rating_required": "yes"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://chuijhal.com/wp-content/themes/vitrine/assets/js/custom.min.js?ver=4.2"
        id="epico_custom-js"></script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-content/themes/vitrine/assets/js/lg-custom-package.min.js?ver=1.2.22"
        id="epico_lightGallery-js"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=submitDisable"
        id="login_nocaptcha_google_api-js"></script>
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
        src="https://chuijhal.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.9.0"
        id="wpb_composer_front_js-js"></script>
    <script type="text/javascript" src="https://chuijhal.com/wp-includes/js/underscore.min.js?ver=1.13.4"
        id="underscore-js"></script>
    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://chuijhal.com/wp-includes/js/wp-util.min.js?ver=a091ed573bab13050d805822863c35a1" id="wp-util-js">
    </script>
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
        src="https://chuijhal.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=9.0.2"
        id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
           $(document).ready(function() {
        // When any radio button is clicked
        $('input[name="delivery_cost"]').on('click', function() {
            // Get the checked value
              // Get the checked value and total amount
        var checkedValue = parseFloat($('input[name="delivery_cost"]:checked').val());
        var totalAmount = parseFloat($('.total-amount-input').val());

        // Calculate the sum
        var sum = totalAmount + checkedValue;
        $('.total-amount').text(sum)
        // Log the results
        console.log('Total Amount:', totalAmount);
        console.log('Checked Value:', checkedValue);
        console.log('Sum:', sum);
            // You can also perform any other actions here
        });
    });
        </script>

</body>

</html>
