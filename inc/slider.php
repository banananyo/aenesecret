<?php 
$slides = array('images/images_src/slide_1.jpg',
'images/images_src/slide_2.jpg',
'images/images_src/slide_3.jpg');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach($slides as $slide) { ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $slide; ?>" alt="" class="custom-swiper-image">
                    </div>
                    <?php } ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
</div>