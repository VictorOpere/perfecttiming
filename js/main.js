jQuery(document).ready(function() {
    jQuery(function() {
        "use strict";
        setTimeout(function() {
            jQuery("#loader").length > 0 && jQuery("#loader").removeClass("show")
        }, 1), jQuery(window).stellar(), jQuery("nav .dropdown").hover(function() {
            var e = jQuery(this);
            e.addClass("show"), e.find("> a").attr("aria-expanded", !0), e.find(".dropdown-menu").addClass("show")
        }, function() {
            var e = jQuery(this);
            e.removeClass("show"), e.find("> a").attr("aria-expanded", !1), e.find(".dropdown-menu").removeClass("show")
        }), jQuery("#dropdown04").on("show.bs.dropdown", function() {
            console.log("show")
        }), jQuery(".home-slider").owlCarousel({
            loop: !0,
            autoplay: !0,
            margin: 10,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            nav: !0,
            autoplayHoverPause: !0,
            items: 3,
            navText: ["<span class='ion-chevron-left'></span>", "<span class='ion-chevron-right'></span>"],
            responsive: {
                0: {
                    items: 1,
                    nav: !1
                },
                600: {
                    items: 1,
                    nav: !1
                },
                1000: {
                    items: 1,
                    nav: !0
                }
            }
        });
        var e = jQuery(".js-carousel-1");
        e.owlCarousel({
            loop: !0,
            autoplay: !1,
            stagePadding: 0,
            margin: 10,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            nav: !1,
            dots: !1,
            autoplayHoverPause: !1,
            items: 3,
            responsive: {
                0: {
                    items: 1,
                    nav: !1
                },
                600: {
                    items: 2,
                    nav: !1
                },
                1000: {
                    items: 3,
                    nav: !0,
                    loop: !1
                }
            }
        }), jQuery(".custom-next").click(function(a) {
            a.preventDefault(), e.trigger("next.owl.carousel")
        }), jQuery(".custom-prev").click(function(a) {
            a.preventDefault(), e.trigger("prev.owl.carousel")
        }), jQuery(".js-carousel-2").owlCarousel({
            loop: !0,
            autoplay: !0,
            stagePadding: 7,
            margin: 20,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            nav: !1,
            autoplayHoverPause: !0,
            items: 4,
            navText: ["<span class='ion-chevron-left'></span>", "<span class='ion-chevron-right'></span>"],
            responsive: {
                0: {
                    items: 1,
                    nav: !1
                },
                600: {
                    items: 3,
                    nav: !1
                },
                1000: {
                    items: 4,
                    nav: !0,
                    loop: !1
                }
            }
        });
        jQuery(".element-animate").waypoint(function(e) {
            "down" !== e || jQuery(this.element).hasClass("element-animated") || (jQuery(this.element).addClass("item-animate"), setTimeout(function() {
                jQuery("body .element-animate.item-animate").each(function(e) {
                    var a = jQuery(this);
                    setTimeout(function() {
                        var e = a.data("animate-effect");
                        "fadeIn" === e ? a.addClass("fadeIn element-animated") : "fadeInLeft" === e ? a.addClass("fadeInLeft element-animated") : "fadeInRight" === e ? a.addClass("fadeInRight element-animated") : a.addClass("fadeInUp element-animated"), a.removeClass("item-animate")
                    }, 100 * e)
                })
            }, 100))
        }, {
            offset: "95%"
        })
    })
});