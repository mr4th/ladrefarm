<?php
error_reporting(0);
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
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/ladreimg/markus-spiske-3nX7pythQyM-unsplash.jpg);">
            <h2>Shop</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Shop Sorting Data -->
                <div class="col-12">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Shop Page Count -->
                        <div class="shop-page-count">
                            <p>Showing 1–9 of 72 results</p>
                        </div>
                        <!-- Search by Terms -->
<!--
                        <div class="search_by_terms">
                            <form action="#" method="post" class="form-inline">
                                <select class="custom-select widget-title">
                                  <option selected>Short by Popularity</option>
                                  <option value="1">Short by Newest</option>
                                  <option value="2">Short by Sales</option>
                                  <option value="3">Short by Ratings</option>
                                </select>
                                <select class="custom-select widget-title">
                                  <option selected>Show: 9</option>
                                  <option value="1">12</option>
                                  <option value="2">18</option>
                                  <option value="3">24</option>
                                </select>
                            </form>
                        </div>
-->
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">

                        <!-- Shop Widget -->
                        <div class="shop-widget price mb-50">
                            <h4 class="widget-title">Prices</h4>
                            <div class="widget-desc">
                                

                                <div class="slider-range">
                                    <div data-min="8" data-max="30" data-unit="&#8358;" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="8" data-value-max="30" data-label-result="Price:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all first-handle" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Price: &#8358;8 - &#8358;30</div>
                                </div>

                            </div>
                        </div>
                        
                        <!-- Shop Widget -->
                        <div class="shop-widget catagory mb-50">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-desc">
                                <!-- Single Checkbox -->
            <?php 
            $query1 = "SELECT * FROM categories" ;
			$results1 = mysqli_query($connection, $query1);
                while ($rows = mysqli_fetch_assoc($results1)){
                    $cat_id = $rows["cat_id"];
                    $cat_title = $rows["cat_title"];
            ?>
                            <form method="post" action="">
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $cat_id; ?>" value="<?php echo $cat_id; ?>" name="catid[]"> 
                                    <label class="custom-control-label" for="<?php echo $cat_id; ?>"><?php echo $cat_title; ?> <span class="text-muted"></span></label>
                                </div>
                             <?php }?>   
                                <input type="submit" class="btn btn-primary" value="Sort" name="cat_sort">
                            </form>
                            
                            </div>
                        </div>

                        
                        <!-- Shop Widget -->
                        <div class="shop-widget best-seller mb-50">
                            <h4 class="widget-title">Best Seller</h4>
                            <div class="widget-desc">

                                <!-- Single Best Seller Products -->
                                <?php 
                            $query = "SELECT * FROM products WHERE product_price < 1000 ORDER BY product_id DESC LIMIT 2" ;
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
                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                
                                <div class="product-thumbnail">
                                    <a href="shop-details.php"><img src="resources/uploads/<?php echo $image; ?>" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.php"><?php echo $title; ?></a>
                                    <p>₦&nbsp;<?php echo $price ?></p>
                                    <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                </div>
                                 
                            </div>
                           <?php }} ?>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div id="message">
                    
                    </div>
                    <div class="shop-products-area">
                        <div class="row">
<?php 

        //pagination code 
        
        
        $Page=$_GET["Page"];
        if($Page==0||$Page<1){
            $ShowPostFrom=0;
        }else{
        $ShowPostFrom=($Page*9)-9;
        }
        $query = "SELECT * FROM products ORDER BY product_id DESC LIMIT $ShowPostFrom,9" ;
        
  
        if(isset($_POST["cat_sort"])){
            if(empty($_POST["catid"])){
                header("location: shop.php?Page=1");
            }
            
            $catx = $_POST['catid'];
            
            $catstr = "'".implode("','",$catx)."'";  
            $query = "SELECT * FROM products WHERE product_category_id IN (".$catstr.") ORDER BY product_id DESC LIMIT $ShowPostFrom,9" ;
            }
                            
			$results = mysqli_query($connection, $query);
            if(mysqli_num_rows($results) > 0){
            while ($datarows = mysqli_fetch_assoc($results)){
            $proid = $datarows["product_id"];
            $title = $datarows["product_title"];
            $image = $datarows["product_image"];
            $price = $datarows["product_price"];
            $pcode = $datarows["product_code"];
            $catid = $datarows["product_category_id"];
            $hot = $datarows["hot"];
?>
                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
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
                                    <form action="" class="form-submit">
                                    <input type="hidden" class="pid" value="<?php echo $proid; ?>">
                                    <input type="hidden" class="pname" value="<?php echo $title; ?>">
                                    <input type="hidden" class="pprice" value="<?php echo $price; ?>">
                                    <input type="hidden" class="pimage" value="<?php echo $image; ?>">
                                    <input type="hidden" class="pcode" value="<?php echo $pcode; ?>">
                                    <input type="hidden" class="catid" value="<?php echo $catid; ?>">
                                    <button class="btn alazea-btn ml-15 btn-block addItemBtn " type="submit">Add to cart</button>
                                    </form>
                                    
                                </div>
                            </div>
<?php  } }  else { ?>
        
                        </div>

                       <p class="text-center"> No products found</p>
            <?php }?> 
                        <!-- Pagination -->
                        
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
          <?php 
          if ($Page > 1){      
          ?>      
          <li class="page-item"><a class="page-link" href="shop.php?Page=<?php echo $Page-1; ?>"><i class="fa fa-angle-left"></i></a></li>
          <?php } ?>      
                
        <?php 
        global $Connection;
        $QueryPagination="SELECT COUNT(*) FROM products";
        $ExecutePagination=mysqli_query($connection,$QueryPagination);
        $RowPagination=mysqli_fetch_array($ExecutePagination);
          $TotalPosts=array_shift($RowPagination);
         // echo $TotalPosts;
          $PostPagination=$TotalPosts/9;
          $PostPagination=ceil($PostPagination);
         // echo $PostPerPage;
         
        for($i=1;$i<=$PostPagination;$i++){
        if (isset($Page)){
            if ($i == $Page){
         ?>
        <li class="page-item active"><a class="page-link" href="shop.php?Page=<?php echo $i; ?>" ><?php echo $i; ?></a></li>
         <?php } else { ?>
        <li class="page-item"><a class="page-link" href="shop.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
            }}}
        ?>
                <?php 
          if ($Page+1<=$PostPagination){      
          ?>      
          <li class="page-item"><a class="page-link" href="shop.php?Page=<?php echo $Page+1; ?>"><i class="fa fa-angle-right"></i></a></li>
          <?php } ?>  
            </ul>
        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

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
    <script type="text/javascript" src="js/cart.js"></script>
</body>

</html>