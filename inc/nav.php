<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
        <div id="gtco-logo">
            <img src="images/logo.png" class="nav-logo" alt="">
        </div>
        <div id="gtco-text-logo" >Aenesecret Thailand</div>
        <div class="row">
            <div class="hidden-xs col-md-12 text-right gtco-contact">
                <ul class="contact">
                    <li><a href="tel:0635345655"><i class="ti-mobile"></i><span> โทร. 063-534-5655 </span></a></li>
                    <li><a href="mailto:aenesecretthailand@gmail.com"><i class="icon-mail2"></i><span> aenesecretthailand@gmail.com</span></a></li>
                    <li><a href="https://www.facebook.com/aenesecretthailandofficial/"><img src="images/facebook/fb_logo_29.png" /></i></a></li>
                    <li><a href="https://www.facebook.com/aenesecretthailandofficial/"><img src="images/line/line_icon.png" /></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12" >
                
            </div>
            <div class=" col-md-7 col-sm-12 text-right menu-1">
                <ul class="top-menu-list" id="topMenuList">
                    <li><a href="index.php">หน้าแรก</a></li>
                    <li><a href="about.php">เกี่ยวกับเรา</a></li>
                    <li><a href="products.php">สินค้า</a></li>
                    <li><a href="reviews.php">รีวิว</a></li>
                    <li><a href="blogs.php">บทความ</a></li>
                    <li><a href="contact.php">ติดต่อเรา</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>
<?php 
echo '<input type="hidden" id="current-location" value="'.basename($_SERVER['REQUEST_URI']).'" />';
echo '<script>console.log("'.basename($_SERVER['REQUEST_URI']).'");</script>';
?>