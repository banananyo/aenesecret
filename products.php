<!DOCTYPE HTML>
<html>

<?php include('inc/head.php'); ?>

<body>

    <div class="gtco-loader"></div>

    <div id="page">
        <?php include('inc/nav.php'); ?>
        <?php include('inc/slider.php'); ?>
        <div class="container" style="padding-top: 20px;">
           <div class="row">
               <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                   <h2>สินค้าของเรา</h2>
               </div>
           </div>
           
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="grid" >
                    <div class="grid-sizer"></div>
                        <?php
                        include('connect.php');
                        $res = $conn->query("SELECT * FROM products");
                        while($row=$res->fetch_assoc()){
                        ?>
                            <div class="grid-item">
                                <div class="frame">
                                <figure>
                                    <a href="#" style="width: 100%">
                                    <img src="<?php echo $row['img']; ?>" style="object-fit: contain; width: 100%;">
                                    </a>
                                </figure>
                                <p style="padding: 0 0 10px 0;margin-top: 10px;border-bottom: 1px solid #d1d1d1;"><font style="font-size:22px; padding:15px; color:#23376c;"><?php echo $row['title']; ?></font></p>

                                <div style="padding: 0 15px;color:#666"><?php echo $row['description']; ?></div>

                                <div align="right" style="padding-right:15px; padding-bottom:15px;">ราคา : <font color="#FF0000"><?php echo $row['price']; ?></font> ฿</div>

                                <div class="read-more"><a href="#">รายละเอียดเพิ่มเติม <i class="fa fa-arrow-circle-o-right f-14"></i></a></div>
                                </div>
                            </div>
                        <?php
                        } //while end
                        ?>
                    </div>
               </div>
           </div>
        </div>


        <?php //include('inc/features.php'); ?>

        <?php //include('inc/features2.php'); ?>

        <?php //include('inc/reviews.php'); ?>

        <?php //include('inc/products.php'); ?>


        <?php include('inc/footer.php'); ?>
    </div>

    <?php include('inc/go_to_top.php'); ?>

    <?php include('inc/scripts.php'); ?>

</body>
<script type="text/javascript" src="js/masonry.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.min.js"></script>
<script>
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 0,
  horizontalOrder: true,
  gutter: 10,
  percentPosition: true,
});
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
</script>
</html>