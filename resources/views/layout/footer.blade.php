<div class="uk-section-primary uk-section">






    <div class="uk-container uk-container-expand">



        <div class="uk-grid-divider uk-grid-margin" uk-grid="">

            <div class="uk-width-expand@m">

                <div class="uk-h4 uk-heading-line">
                    <span>Reach Us</span>
                </div>

                <ul id="footer#5" class="uk-text-left uk-list">

                    <li class="el-item">
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle" uk-grid="">
                            <div class="uk-width-auto">
                                <a href="{{ url('mailto:info@bridgecorllc.com') }}" class="uk-link-reset"><span
                                        uk-icon="icon: mail;ratio: 1.5" class="el-image"></span></a>
                            </div>
                            <div>
                                <div class="el-content uk-h5">
                                    <a href="{{ url('mailto:info@bridgecorllc.com') }}" target="_blank" class="el-link">
                                        <p style="color: white;">info@BridgecorLLC.com</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="el-item">
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle" uk-grid="">
                            <div class="uk-width-auto">
                                <a href="{{ url('tel:+18332744267') }}" class="uk-link-reset"><span
                                        uk-icon="icon: receiver;ratio: 1.5" class="el-image"></span></a>
                            </div>
                            <div>
                                <div class="el-content uk-h5">
                                    <a href="{{ url('tel:+18332744267') }}" target="_blank" class="el-link">
                                        <p><a class="c-link" href="{{ url('tel:4078016254') }}" target="_blank"
                                                rel="noopener noreferrer" data-stringify-link="tel:4078016254"
                                                data-sk="tooltip_parent">(407)-801 6254</a></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>




            </div>

            <div class="uk-width-expand@m">






                <div class="uk-h4 uk-heading-line">
                    <span>Newsletter Signup</span>
                </div>

                <div>

                    <form class="uk-form uk-panel js-form-newsletter" method="post"
                        action="{{ route('newsletter.subscribe') }}">
                        @csrf
                        <div uk-grid class="uk-child-width-1-1">
                            <div>
                                <input class="uk-input el-input" type="email" name="email" id="email"
                                    placeholder="Email address" required>
                            </div>
                            <div>
                                <button class="el-button uk-button uk-button-default" type="button"
                                    id="subscribeBtn">Subscribe</button>
                            </div>
                        </div>
                        <div class="message uk-margin uk-hidden" id="message"></div>
                    </form>

                </div>




            </div>

            <div class="uk-width-expand@m">






                <div class="uk-h4 uk-heading-line">
                    <span>Follow Us</span>
                </div>

                <div class="uk-margin">
                    <div class="uk-child-width-auto uk-grid-small" uk-grid="">

                        <div>
                            <a uk-icon="icon: facebook" href="https://www.facebook.com/Bridgecorllc-115061103954266"
                                class="el-link uk-icon-button"></a>
                        </div>
                        <div>
                            <a uk-icon="icon: twitter" href="https://twitter.com/Bridgecor1"
                                class="el-link uk-icon-button"></a>
                        </div>
                        <div>
                            <a uk-icon="icon: linkedin" href="https://www.linkedin.com/company/bridgecor/"
                                class="el-link uk-icon-button"></a>
                        </div>
                        <div>
                            <a uk-icon="icon: instagram" href="https://www.instagram.com/bridgecorllc/"
                                class="el-link uk-icon-button"></a>
                        </div>

                    </div>
                </div>




            </div>
        </div>


    </div>




</div>

<div class="uk-section-secondary uk-section uk-section-xsmall">






    <div class="uk-container">



        <div class="uk-flex-middle uk-grid-margin" uk-grid="">

            <div class="uk-width-expand@m">






                <div class="uk-margin uk-text-left@m uk-text-center uk-text-meta">
                    <br>
                    <p>© 2023 BridgeCor LLC</p>
                </div>




            </div>

            <div class="uk-width-expand@m">






                <div class="uk-margin uk-text-left@m uk-text-center uk-text-meta">
                    <br>
                    <p><a href="http://brandboosters.us/">Designed & Maintained By Brand Boosters Global
                            (BBG)</a> </p>
                </div>




            </div>
        </div>


    </div>




</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.js-form-newsletter');
        const emailInput = document.getElementById('email');
        const messageElement = document.getElementById('message');
        const subscribeBtn = document.getElementById('subscribeBtn');

        subscribeBtn.addEventListener('click', function() {
            const email = emailInput.value.trim();

            if (!email) {
                showMessage('error', 'Please enter an email address.');
                return;
            }

            axios.post('/subscribe', {
                    email: email
                })
                .then(function(response) {
                    if (response.data.success) {
                        showMessage('success', response.data.message);
                    } else {
                        showMessage('error', response.data.message);
                    }
                })
                .catch(function(error) {
                    showMessage('error', 'Failed to subscribe. Please try again later.');
                });
        });

        function showMessage(type, message) {
            messageElement.textContent = message;
            messageElement.classList.remove('uk-hidden');
            messageElement.classList.add(type === 'success' ? 'uk-text-success' : 'uk-text-danger');
        }
    });
</script>



<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
</script>
<style>
    #footer\#5 p {
        margin: 0px;
        text-transform: normal !important;
    }
</style>
<link rel='stylesheet' id='hfe-widgets-style-css'
    href='{{ asset('/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.26') }}'
    type='text/css' media='all'>
<link rel='stylesheet' id='e-animations-css'
    href='{{ asset('/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.20.1') }}'
    type='text/css' media='all'>
<link rel='stylesheet' id='rs-plugin-settings-css'
    href='{{ asset('/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.18') }}' type='text/css'
    media='all'>
<style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>
<script type="text/javascript" id="wpcf7-redirect-script-js-extra">
    /* <![CDATA[ */
    var wpcf7_redirect_forms = {
        "6365": {
            "page_id": "0",
            "external_url": "",
            "use_external_url": "",
            "open_in_new_tab": "",
            "http_build_query": "",
            "http_build_query_selectively": "",
            "http_build_query_selectively_fields": "",
            "delay_redirect": "0",
            "after_sent_script": "",
            "thankyou_page_url": ""
        },
        "5703": {
            "page_id": "5854",
            "external_url": "https:\/\/bridgecorllc.comthankyou\/",
            "use_external_url": "",
            "open_in_new_tab": "",
            "http_build_query": "",
            "http_build_query_selectively": "",
            "http_build_query_selectively_fields": "",
            "delay_redirect": "0",
            "after_sent_script": "",
            "thankyou_page_url": false
        },
        "98": {
            "page_id": "5854",
            "external_url": "https:\/\/bridgecorllc.comthankyou\/",
            "use_external_url": "",
            "open_in_new_tab": "",
            "http_build_query": "",
            "http_build_query_selectively": "",
            "http_build_query_selectively_fields": "",
            "delay_redirect": "0",
            "after_sent_script": "",
            "thankyou_page_url": false
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('/wp-content/plugins/cf7-redirection/js/wpcf7-redirect-script.js') }}"
    id="wpcf7-redirect-script-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.2') }}" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/bridgecorllc.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var loader = document.getElementById("preloader");
        var ukBody = document.querySelector('body');
        var ukHtml = document.querySelector('html');

        function preLoader() {
            ukBody.style.overflowY = "auto";
            ukHtml.style.overflowY = "auto";
            loader.style.display = "none";
        }

        window.addEventListener("load", () => {
            preLoader();
        });
    });
</script>
<script type="text/javascript" src="{{ asset('/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.2') }}"
    id="contact-form-7-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.18') }}" defer="" async=""
    id="tp-tools-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.18') }}" defer="" async=""
    id="revmin-js"></script>
<script type="text/javascript" src="{{ asset('/ajax/libs/gsap/3.11.3/gsap.min.js?ver=2.1.6') }}" id="gsap-js-js">
</script>
<script type="text/javascript" src="{{ asset('/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js?ver=2.1.6') }}"
    id="scroll-trigger-js-js"></script>
<script type="text/javascript" src="{{ asset('/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js?ver=2.1.6') }}"
    id="scroll-to-js-js"></script>
<script type="text/javascript" src="{{ asset('/ajax/libs/gsap/3.11.3/MotionPathPlugin.min.js?ver=2.1.6') }}"
    id="motion-path-js-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/ooohboi-steroids-for-elementor/lib/barba/barba.min.js?ver=2.1.6') }}"
    id="barba-js-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/ooohboi-steroids-for-elementor/lib/anime/anime.min.js?ver=2.1.6') }}"
    id="anime-js-js"></script>
<script type="text/javascript" src="{{ asset('/ajax/libs/three.js/r128/three.min.js?ver=2.1.6') }}" id="three-js-js">
</script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/ooohboi-steroids-for-elementor/assets/js/ooohboi-steroids.js?ver=2.1.607072022') }}"
    id="ooohboi-steroids-js"></script>
<script type="text/javascript" id="qi-addons-for-elementor-script-js-extra">
    /* <![CDATA[ */
    var qodefQiAddonsGlobal = {
        "vars": {
            "adminBarHeight": 0,
            "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
            "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
            "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.4.3') }}"
    id="qi-addons-for-elementor-script-js"></script>
<script type="text/javascript" src="{{ asset('/ajax/libs/gsap/3.11.3/ScrollTrigger.min-1.js?ver=6.4.3') }}"
    id="gsap-st-js"></script>
<script type="text/javascript" src="{{ asset('/wp-content/themes/yoothemejs/app.js?ver=6.4.3') }}" id="gsap-js2-js">
</script>
<script type="text/javascript" id="happy-elementor-addons-js-extra">
    /* <![CDATA[ */
    var HappyLocalize = {
        "ajax_url": "https:\/\/bridgecorllc.com\/wp-admin\/admin-ajax.php",
        "nonce": "7d78d149cc",
        "pdf_js_lib": "https:\/\/bridgecorllc.com\/wp-content\/plugins\/happy-elementor-addons\/assets\/vendor\/pdfjs\/lib"
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/happy-elementor-addons/assets/js/happy-addons.min.js?ver=3.10.4') }}"
    id="happy-elementor-addons-js"></script>
<script type="text/javascript" src="{{ asset('/wp-includes/js/hoverIntent.min.js?ver=1.10.2') }}" id="hoverIntent-js">
</script>
<script type="text/javascript" id="megamenu-js-extra">
    /* <![CDATA[ */
    var megamenu = {
        "timeout": "300",
        "interval": "100"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=3.3.1') }}"
    id="megamenu-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/premium-wrapper-link.min.js?ver=4.10.24') }}"
    id="pa-wrapper-link-js"></script>
<script type="text/javascript" src="{{ asset('/wp-includes/js/imagesloaded.min.js?ver=5.0.0') }}" id="imagesloaded-js">
</script>
<script type="text/javascript"
    src="{{ asset('/wp-content/themes/yootheme/vendor/yootheme/theme/builder/newsletter/app/newsletter.min.js?ver=1.10.8') }}"
    id="newsletter-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.20.1') }}"
    id="elementor-webpack-runtime-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.20.1') }}"
    id="elementor-frontend-modules-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2') }}"
    id="elementor-waypoints-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
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
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": true
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.20.1",
        "is_static": false,
        "experimentalFeatures": {
            "e_optimized_assets_loading": true,
            "additional_custom_breakpoints": true,
            "e_swiper_latest": true,
            "theme_builder_v2": true,
            "block_editor_assets_optimize": true,
            "ai-layout": true,
            "landing-pages": true,
            "e_image_loading_optimization": true,
            "page-transitions": true,
            "notes": true,
            "form-submissions": true,
            "e_scroll_snap": true
        },
        "urls": {
            "assets": "https:\/\/bridgecorllc.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": {
                "premium_particles_zindex": 0,
                "premium_particles_responsive": ["desktop", "tablet", "mobile"]
            },
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_laptop"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 7048,
            "title": "IT%20Staffing%20Companies%20%7C%20IT%20Engineering%20Services%20-%20Bridgecor%20LLC",
            "excerpt": "",
            "featuredImage": false
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.20.1') }}"
    id="elementor-frontend-js"></script>
<script type="text/javascript" id="elementor-frontend-js-after">
    /* <![CDATA[ */
    "use strict";
    ! function(e, t) {
        e(t).on("elementor/frontend/init", (function() {
            var t, i = elementorModules.frontend.handlers.Base;
            t = i.extend({
                onInit: function() {
                    i.prototype.onInit.apply(this, arguments), this.isHarakiri() && (this
                        .$element.addClass("ob-harakiri"), "clip" === this
                        .getElementSettings("_ob_harakiri_text_clip") && this.updateCSS(
                            "add"))
                },
                isHarakiri: function() {
                    return "yes" === this.getElementSettings("_ob_use_harakiri")
                },
                onElementChange: function(e) {
                    "_ob_harakiri_writing_mode" === e && ("inherit" !== this.getElementSettings(
                            "_ob_harakiri_writing_mode") ? this.$element.addClass(
                            "ob-harakiri") : this.$element.removeClass("ob-harakiri")),
                        "_ob_harakiri_text_clip" === e && ("clip" === this.getElementSettings(
                                "_ob_harakiri_text_clip") ? this.updateCSS("add") : "" === this
                            .getElementSettings("_ob_harakiri_text_clip") && this.updateCSS(
                                "remove"))
                },
                updateCSS: function(e) {
                    "add" === e && this.$element.find(".elementor-heading-title").css(
                        "background-clip", "text").css("-webkit-text-fill-color",
                        "transparent"), "remove" === e && this.$element.find(
                        ".elementor-heading-title").css("background-clip", "unset").css(
                        "-webkit-text-fill-color", "unset")
                }
            });
            var n = {
                "heading.default": t,
                "text-editor.default": t
            };
            e.each(n, (function(e, t) {
                elementorFrontend.hooks.addAction("frontend/element_ready/" + e, (function(e) {
                    elementorFrontend.elementsHandler.addHandler(t, {
                        $element: e
                    })
                }))
            }))
        }))
    }(jQuery, window);
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2') }}"
    id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="{{ asset('/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0') }}"
    id="regenerator-runtime-js"></script>
<script type="text/javascript" src="{{ asset('/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0') }}"
    id="wp-polyfill-js"></script>
<script type="text/javascript" src="{{ asset('/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1') }}"
    id="wp-hooks-js"></script>
<script type="text/javascript" src="{{ asset('/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef') }}"
    id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
    /* <![CDATA[ */
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.4.3') }}"
    id="qi-addons-for-elementor-elementor-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.18.2') }}"
    id="elementor-pro-webpack-runtime-js"></script>
<script type="text/javascript" id="elementor-pro-frontend-js-before">
    /* <![CDATA[ */
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/bridgecorllc.com\/wp-admin\/admin-ajax.php",
        "nonce": "46b6b6ef7e",
        "urls": {
            "assets": "https:\/\/bridgecorllc.com\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/bridgecorllc.com\/wp-json\/"
        },
        "shareButtonsNetworks": {
            "facebook": {
                "title": "Facebook",
                "has_counter": true
            },
            "twitter": {
                "title": "Twitter"
            },
            "linkedin": {
                "title": "LinkedIn",
                "has_counter": true
            },
            "pinterest": {
                "title": "Pinterest",
                "has_counter": true
            },
            "reddit": {
                "title": "Reddit",
                "has_counter": true
            },
            "vk": {
                "title": "VK",
                "has_counter": true
            },
            "odnoklassniki": {
                "title": "OK",
                "has_counter": true
            },
            "tumblr": {
                "title": "Tumblr"
            },
            "digg": {
                "title": "Digg"
            },
            "skype": {
                "title": "Skype"
            },
            "stumbleupon": {
                "title": "StumbleUpon",
                "has_counter": true
            },
            "mix": {
                "title": "Mix"
            },
            "telegram": {
                "title": "Telegram"
            },
            "pocket": {
                "title": "Pocket",
                "has_counter": true
            },
            "xing": {
                "title": "XING",
                "has_counter": true
            },
            "whatsapp": {
                "title": "WhatsApp"
            },
            "email": {
                "title": "Email"
            },
            "print": {
                "title": "Print"
            }
        },
        "facebook_sdk": {
            "lang": "en_US",
            "app_id": ""
        },
        "lottie": {
            "defaultAnimationUrl": "https:\/\/bridgecorllc.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.18.2') }}"
    id="elementor-pro-frontend-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.18.2') }}"
    id="pro-elements-handlers-js"></script>
<script type="text/javascript" src="{{ asset('/wp-content/plugins/wpforms/assets/js/wpforms.js?ver=1.6.1.2') }}"
    id="wpforms-js"></script>
<script type="text/javascript" id="wpforms-elementor-js-extra">
    /* <![CDATA[ */
    var wpformsElementorVars = {
        "recaptcha_type": "v2"
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/wpforms/assets/js/integrations/wpforms-elementor.min.js?ver=1.6.1.2') }}"
    id="wpforms-elementor-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/wpforms/pro/assets/js/vendor/jquery.intl-tel-input.min.js?ver=17.0.3') }}"
    id="wpforms-smart-phone-field-js"></script>
<script type="text/javascript"
    src="{{ asset('/wp-content/plugins/wpforms/assets/js/jquery.validate.min.js?ver=1.19.0') }}"
    id="wpforms-validation-js"></script>
<script type="text/javascript" src="{{ asset('/wp-content/plugins/wpforms/assets/js/mailcheck.min.js?ver=1.1.2') }}"
    id="wpforms-mailcheck-js"></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpforms_settings = {
        "val_required": "This field is required.",
        "val_url": "Please enter a valid URL.",
        "val_email": "Please enter a valid email address.",
        "val_email_suggestion": "Did you mean {suggestion}?",
        "val_email_suggestion_title": "Click to accept this suggestion.",
        "val_number": "Please enter a valid number.",
        "val_confirm": "Field values do not match.",
        "val_fileextension": "File type is not allowed.",
        "val_filesize": "File exceeds max size allowed. File was not uploaded.",
        "val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
        "val_time24h": "Please enter time in 24-hour format (eg 22:45).",
        "val_requiredpayment": "Payment is required.",
        "val_creditcard": "Please enter a valid credit card number.",
        "val_post_max_size": "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
        "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
        "val_limit_characters": "{count} of {limit} max characters.",
        "val_limit_words": "{count} of {limit} max words.",
        "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
        "post_max_size": "67108864",
        "uuid_cookie": "1",
        "locale": "en",
        "wpforms_plugin_url": "https:\/\/bridgecorllc.com\/wp-content\/plugins\/wpforms\/",
        "gdpr": "",
        "ajaxurl": "https:\/\/bridgecorllc.com\/wp-admin\/admin-ajax.php",
        "mailcheck_enabled": "1",
        "mailcheck_domains": [],
        "mailcheck_toplevel_domains": ["dev"],
        "currency_code": "USD",
        "currency_thousands": ",",
        "currency_decimal": ".",
        "currency_symbol": "$",
        "currency_symbol_pos": "left",
        "val_phone": "Please enter a valid phone number."
    }
    /* ]]> */
</script>
</body>

</html>
