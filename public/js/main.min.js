var Home = {};

(function () {
    Home = {

        init: function () {
            this.headerScrolled();
            this.initGLightbox();
            this.initAOS();

            $('#preloader').remove();
        },

        headerScrolled: function () {
            if (window.scrollY > 100) {
                $('#header').addClass('header-scrolled')
            } else {
                $('#header').removeClass('header-scrolled')
            }
        },

        initGLightbox: function () {
            GLightbox({
                selector: '.gallery-lightbox'
            });
        },

        initAOS: function () {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            })
        },
    };
})();

$(document).ready(function () {
    Home.init();

    $(document).on('click', '.mobile-nav-toggle', function (e) {
        $('#navbar').toggleClass('navbar-mobile');
        $(this).toggleClass('bi-list bi-x');
    });

    $(document).on('click', '.navbar .dropdown > a', function (e) {
        if ($('#navbar').hasClass('navbar-mobile')) {
            e.preventDefault();
            $(this).next().toggleClass('dropdown-active');
        }
    });

    $(window).on('scroll', Home.headerScrolled());
});