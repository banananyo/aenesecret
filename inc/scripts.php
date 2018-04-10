<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

<script src="swiper/js/swiper.min.js"></script>

<script>

var mySwiper = new Swiper('.swiper-container', {
    speed: 400,
    spaceBetween: 100,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    
});

var mySwiper = document.querySelector('.swiper-container').swiper

// Now you can use all slider methods like
// mySwiper.slideNext();

</script>

<script>
    $(function(){
        var current = $('#current-location').val();
        $('#topMenuList li a').each(function(){
            var $this = $(this);
            
            // if the current path is like this link, make it active
            var splitted = $this.attr('href').split('/');
            var last = splitted[splitted.length-1];
            if(last.indexOf(current) !== -1){
                $this.addClass('active');
            }
        })
    })
</script>