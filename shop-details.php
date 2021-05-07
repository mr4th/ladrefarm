<?php 
session_start(); 
include("header.php");
include("resources/config.php");
?>
<html>
<body>
  
    <!-- ##### Header Area End ##### -->
<?php include("navhead.php");?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
         
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/ladreimg/natalie-parham-LWm1LmUTb5I-unsplash.jpg);">
            <h2>SHOP DETAILS</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area mb-50">
        <div class="produts-details--content mb-50">
            <div class="container">
                <div id="message">
                    
                    </div>
                <div class="row justify-content-between">
                <?php  
                if(isset($_GET['id'])){
                $id = $_GET['id'];
                
                $stmt = "SELECT * FROM (products INNER JOIN categories ON products.product_category_id=categories.cat_id)
                WHERE product_id ='$id' ";
                $results = mysqli_query($connection, $stmt);
                
                    
                $grand_total = 0;
                
                if(mysqli_num_rows($results) > 0){
                while($r = mysqli_fetch_assoc($results)){
                $proid = $r['product_id'];
                $price = $r['product_price'];
                $image = $r['product_image'];
                $name = $r['product_title'];
                $desc = $r['product_description'];
                $catid = $r['cat_title'];
                $code = $r['product_code'];
                
                
                ?>
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="product-img" href="resources/uploads/<?php echo $image ?>" title="Product Image">
                                        <img class="d-block w-100" src="resources/uploads/<?php echo $image ?>" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="resources/uploads/<?php echo $image ?>" title="Product Image">
                                        <img class="d-block w-100" src="resources/uploads/<?php echo $image ?>" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="resources/uploads/<?php echo $image ?>" title="Product Image">
                                        <img class="d-block w-100" src="resources/uploads/<?php echo $image ?>" alt="1">
                                    </a>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(resources/uploads/<?php echo $image ?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(resources/uploads/<?php echo $image ?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(resources/uploads/<?php echo $image ?>);">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">
                            <h4 class="title"><?php echo $name; ?></h4>
                            <h4 class="price">&#8358; <?php echo $price; ?></h4>
                            <div class="short_overview">
                                <p><?php echo $desc; ?></p>
                            </div>

                            <div class="cart--area d-flex flex-wrap align-items-center">
                                <!-- Add to Cart Form -->
                                
                                <form class="Ordform-submit">
                                    <input type="hidden" class="pid" value="<?php echo $proid; ?>">
                                    <input type="hidden" class="pname" value="<?php echo $name; ?>">
                                    <input type="hidden" class="pprice" value="<?php echo $price; ?>">
                                    <input type="hidden" class="pimage" value="<?php echo $image; ?>">
                                    <input type="hidden" class="pcode" value="<?php echo $code; ?>">
                                    <button class="btn alazea-btn ml-15 btn-block addOrdItem" type="submit">Add to cart</button>
                                    </form>
                                
                                <!-- Wishlist & Compare -->
                                
                            </div>

                            <div class="products--meta">
                                <p><span>Product Id:</span> <span><?php echo $code ?></span></p>
                                <p><span>Category:</span> <span><?php  echo $catid;  ?></span></p>
                                <p><span>Tags:</span> <span>plants, green, <?php echo $name ?> </span></p>
                                <p>
<!--
                                    <span>Share on:</span>
                                    <span>
                                    <a href="http://www.facebook.com/sharer.php?u=http://simplesharebuttons.com" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a>
                                    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </span>
-->
                                </p>
                                <br><br><br>
                                
                            </div>

                        </div>
                    </div>
                    
                    <?php }} } else {
                    header("location: shop-details.php?id=6");
                }?>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- ##### Single Product Details Area End ##### -->
    <!-- ##### Related Product Area Start ##### -->
    <div class="related-products-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>

            <div class="row">
<?php 

            $query = "SELECT * FROM products ORDER BY product_id DESC LIMIT 4" ;
			$results = mysqli_query($connection, $query);
            if(mysqli_num_rows($results) > 0){
            while ($datarows = mysqli_fetch_assoc($results)){
            $itemid = $datarows["product_id"];
            $title = $datarows["product_title"];
            $image = $datarows["product_image"];
            $price = $datarows["product_price"];
            $catid = $datarows["product_category_id"];
            $hot = $datarows["hot"];
?>
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-100">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="shop-details.php?id=<?php echo $itemid; ?>"><img src="resources/uploads/<?php echo $image; ?>" alt=""></a>
                            <!-- Product Tag -->
                            <?php if ($hot == 1){ ?>
                            <div class="product-tag">
                                <a href="#">Hot</a>
                            </div>
                            <?php }?>
                            
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.php?id=<?php echo $itemid; ?>">
                                <p><?php echo $title ?></p>
                            </a>
                            <h6>&#8358; <?php echo $price; ?></h6>
                            <form class="Ordform-submit">
                                    <input type="hidden" class="pid" value="<?php echo $proid; ?>">
                                    <input type="hidden" class="pname" value="<?php echo $name; ?>">
                                    <input type="hidden" class="pprice" value="<?php echo $price; ?>">
                                    <input type="hidden" class="pimage" value="<?php echo $image; ?>">
                                    <input type="hidden" class="pcode" value="<?php echo $code; ?>">
                                    <input type="hidden" class="catid" value="<?php echo $catid; ?>">
                                    <button class="btn alazea-btn ml-15 btn-block addOrdItem" type="submit">Add to cart</button>
                                    </form>
                        </div>
                    </div>
                </div>

              <?php }} else {echo "No item found";} ?> 

            </div>
        </div>
    </div>
    <!-- ##### Related Product Area End ##### -->
<?php include("footer.php");?>
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- add to cart/retrieve from cart/delete from cart -->
    <script type="text/javascript" >
    $(document).ready(function(){
           $(".addOrdItem").click(function(e){
                e.preventDefault();
              
               var $form = $(this).closest(".Ordform-submit");
               var pid = $form.find(".pid").val();
               var pname = $form.find(".pname").val();
               var pprice = $form.find(".pprice").val();
               var pimage = $form.find(".pimage").val();
               var pcode = $form.find(".pcode").val();
               var catid = $form.find(".catid").val();
               
               $.ajax({
                   url: 'action.php',
                   method: 'post',
                   data: {pid:pid,catid:catid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
                   success: function(response){
                       $('#message').html(response);
                       window.scrollTo({
                          top: 200,
                          left: 0,
                          behavior: 'smooth'
                        });
                           load_cart_item_number();
                       
                   }
               });
              }); 
        //        loading cart item numbers
            load_cart_item_number();
            function load_cart_item_number(){
                $.ajax({
                   url: 'action.php',
                    method: 'get',
                    data: {cartItem:"cart_item"},
                    success: function(response){
                        $("#cart-item").html(response);
                    }
                });
            }
     });
    </script>
</body>

</html>