<?php 
error_reporting(0);
session_start(); 
include("header.php");
include("resources/config.php");
if(isset($_SESSION['transid'])){
                    $txref = $_SESSION['transid'];
                    $payname = $_SESSION['payname'];  
                    $payemail = $_SESSION['payemail'];
                    $userid = $_SESSION['id'];
                    $phone = $_SESSION['phone']; 
                    $company = $_SESSION['company'];
                    $address = $_SESSION['address'];
                    $town = $_SESSION['town'];
                    $state = $_SESSION['state']; 
                    $country = $_SESSION['country'];
                    $postcode = $_SESSION['postcode']; 
                    $order_notes = $_SESSION['order_notes']; 
                    $allitems = $_SESSION['allitems']; 
                    $itemprice = $_SESSION['itemprice']; 
                    $productid = $_SESSION['productid'];
                    $categoryid = $_SESSION['categoryid'];
                    $image = $_SESSION['image'];
                    $code = $_SESSION['code'];
        
                        
  $query= "INSERT INTO orders(user_id,product_id,cat_id,product_name,order_amount,order_transaction,order_status,product_code,product_image,payname,payemail,phone,company,address,town,state,country,postcode,order_notes) VALUES('$userid','$productid','$categoryid','$allitems','$itemprice','$txref','Completed','$code','$image','$payname','$payemail','$phone','$company','$address','$town','$state','$country','$postcode','$order_notes')";
  $database = mysqli_query($connection,$query);  
//  if ($database){
//      echo "success";
//  }else{
//      echo "failed".mysqli_error($connection);
//  }
  unset($_SESSION['transid']);   

}

?>
<html>
<body>
 
    <!-- ##### Header Area End ##### -->
<?php include("navhead.php");?>
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/ladreimg/max-O_TVsaeZNlE-unsplash.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-left">
                                <h2>LADRE FARM BERVRAGES</h2>
                                <p>Sweeten taste for your everyday..</p>
                                <div class="welcome-btn-group">
                                    <a href="register.php" class="btn alazea-btn mr-30" >GET STARTED</a>
                                    <a href="contact.php" class="btn alazea-btn active" style="color:white">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/ladreimg/animal-1867521_1920.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-left">
                                 <h2>LADRE FARM LIVESTOCK</h2>
                                <p>Best Livestock Only One Call Away..</p>
                                <div class="welcome-btn-group">
                                    <a href="register.php" class="btn alazea-btn mr-30" >GET STARTED</a>
                                    <a href="contact.php" class="btn alazea-btn active" style="color:white">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/ladreimg/christmas-decorations-1149929_1920.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-left">
                                <h2>LADRE FARM ORNAMENTS</h2>
                                <p>Get the Specially Grown Ornaments For Your Homes..</p>
                                <div class="welcome-btn-group">
                                      <a href="register.php" class="btn alazea-btn mr-30" >GET STARTED</a>
                                    <a href="contact.php" class="btn alazea-btn active" style="color:white">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="message">
                    
                    </div>
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR SERVICES</h2>
                        <p>We believe that the customer always comes first - and that means exceptional products and exceptional services.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="img/core-img/s1.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Agriculture</h5>
                                <p>Agriculture in eastern Africa needs intense development to realise its potential.

Farm Africa helps farmers push up the quantity, quality and value of what they produce.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="img/core-img/s2.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Business Trade</h5>
                                <p>Many smallholder farmers lack links to local markets, let alone international buyers. There is huge potential to push up sales.Ladrefarm works to strengthen every aspect of farming supply chains, from soil to supermarket.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="500ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="img/core-img/s3.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Farming Tools &amp; </h5>
                                <p>Ladrefarm supplies a wide range of Agricultural Tools and Equipments from India to all our local and international customers. Along with our wide range of agricultural tools,Ladrefarm is also a leading supplier for garden tools.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area bg-overlay mb-100">
                       <iframe width="552" height="340" src="https://www.youtube.com/embed/GWcoyhBZkd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Area End ##### -->

    <!-- ##### Product Area Start ##### -->
    <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    
                    <div class="section-heading text-center">
                        <h2>SPECIAL DEALS</h2>
                        <p>We have the latest products, with special offers too</p>
                    </div>
                </div>
            </div>

            <div class="row">
<?php 
include("resources/config.php");
            $query = "SELECT * FROM products ORDER BY product_id DESC LIMIT 4" ;
			$results = mysqli_query($connection, $query);
            if(mysqli_num_rows($results) > 0){
            while ($datarows = mysqli_fetch_assoc($results)){
            $proid = $datarows["product_id"];    
            $title = $datarows["product_title"];
            $image = $datarows["product_image"];
            $price = $datarows["product_price"];
            $pcode = $datarows['product_code']; 
            $catid = $datarows["product_category_id"];
            $hot = $datarows["hot"];
?>
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img" style="min-height:350px">
                            <a href="shop-details.php?id=<?php echo $proid; ?>"><img src="resources/uploads/<?php echo $image; ?>" alt=""></a>
                            <!-- Product Tag -->
                            <?php if ($hot == 1){ ?>
                            <div class="product-tag">
                                <a href="#">Hot</a>
                            </div>
                            <?php }?>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.php?id=<?php echo $proid; ?>">
                                <p><?php echo $title; ?></p>
                            </a>
                            <h6><?php echo "₦ ".$price; ?></h6>
                        </div>
                        <form action="" class="Indexform-submit">
                                    <input type="hidden" class="pid" value="<?php echo $proid; ?>">
                                    <input type="hidden" class="pname" value="<?php echo $title; ?>">
                                    <input type="hidden" class="pprice" value="<?php echo $price; ?>">
                                    <input type="hidden" class="pimage" value="<?php echo $image; ?>">
                                    <input type="hidden" class="pcode" value="<?php echo $pcode; ?>">
                                    <input type="hidden" class="catid" value="<?php echo $catid; ?>">
                                    <button class="btn alazea-btn ml-15 btn-block IndexOrdItem " type="submit">Add to cart</button>
                                    </form>
                    </div>
                </div>
<?php } } else {
                echo "No item available";
            } ?>
                
                <div class="col-12 text-center">
                    <a href="shop.php?Page=1" class="btn alazea-btn" style="background-color:#24a0ed">View All Products</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Product Area End ##### -->
 
     <!-- ##### Blog Appstore Start ##### -->

     <section class="alazea-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>GET LADREFARM APPS BELOW</h2>
                        <p>You can access our exclusive products on you mobile phones as well </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single app store Post Area -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="single-blog-post mb-100">
                        <a href=""><img src="img/ladreimg/googlestore.png"></a>
                    </div>
                </div>

                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="single-blog-post mb-100">
                       <a href=""><img src="img/ladreimg/appstore2.png"></a>
                    </div>
                </div>

                <!-- Single app store Post Area -->
               

            </div>
        </div>
    </section>
   <!-- ##### Blog Appstore end ##### -->
    
    
    <!-- ##### Blog Area Start ##### -->
    <section class="alazea-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>LATEST NEWS</h2>
                        <p>The breaking news about Farm Produce &amp; </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="post-thumbnail mb-30">
                            <a href="single-post.php"><img src="img/ladreimg/thomas-gamstaetter-IFGVE61AAno-unsplash.jpg" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">
                                <h5>CARROT AND CUCUMBER</h5>
                            </a>
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 30 July 2020</a>
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Alan Jackson</a>
                            </div>
                            <p class="post-excerpt">carrot suppy has been on the low all over the world in 2020
                            due to the recent events occuring in serveral parts  of the world.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="post-thumbnail mb-30">
                            <a href="single-post.php"><img src="img/ladreimg/joanna-nix-walkup-SYrmNNS5TdA-unsplash.jpg" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">
                                <h5>FRUITS</h5>
                            </a>
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2020</a>
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Christina Aguilera</a>
                            </div>
                            <p class="post-excerpt">Fruit which are one of the most important aspect of agricultural produced was at some point short on supply, but the world health organisation put in some heavy 
                            work in other to provide adequate supply
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="post-thumbnail mb-30">
                            <a href="single-post.php"><img src="img/ladreimg/istockphoto-934919462-612x612.jpg" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">
                                <h5>Farmers</h5>
                            </a>
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 07 July 2020</a>
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jennifer Barnabas </a>
                            </div>
                            <p class="post-excerpt">Due to the covid-19 pandemic, all farmer all over the world has doubled their workflow in other to produce more crops, so as to prevent irrelivant chaos in the 
                            society.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    <section class="testimonial-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-thumb">
                                        <img src="img/ladreimg/man.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-content">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2>TESTIMONIAL</h2>
                                            <p>Some kind words from clients about LadreFarm</p>
                                        </div>
                                        <p>“ It's been a pleasure to work with LadreFarm. the provide exactly what is promised..Thank you LadreFarm”</p>
                                        <div class="testimonial-author-info">
                                            <h6>Mr. David Opara</h6>
                                            <p>CEO of GARYTECH</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-thumb">
                                        <img src="img//ladreimg/Sarah%20James.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-content">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2>TESTIMONIAL</h2>
                                            <p>Some kind words from clients about LadreFarm</p>
                                        </div>
                                        <p>“ Their ideas are creative, they came up with imaginative solutions to some tricky issues, their landscaping and planting contacts are equally excellent we have a beautiful but also manageable garden as a result. Thank you!”</p>
                                        <div class="testimonial-author-info">
                                            <h6>Mrs.Sarah James</h6>
                                            <p>STUDENT</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-thumb">
                                        <img src="img/ladreimg/0.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-content">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2>TESTIMONIAL</h2>
                                            <p>Some kind words from clients about LadreFarm</p>
                                        </div>
                                        <p>“LadreFarm has never failed on any product the sell.i appreciate LadreFarm”</p>
                                        <div class="testimonial-author-info">
                                            <h6>Mr. Jonas Abba</h6>
                                            <p>ENGINNER</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->
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
    
    <script type="text/javascript" >
    $(document).ready(function(){
           $(".IndexOrdItem").click(function(e){
                e.preventDefault();
              
               var $form = $(this).closest(".Indexform-submit");
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