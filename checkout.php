<?php 
session_start(); 
include("header.php");
include("resources/config.php");

$grand_total = 0;
$allItems = '';
$price = array();
$items = array();
$pr = array();
$ca = array();
$im = array();
$cd = array();

$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price, product_price,product_image,product_code,pro_id,cat_id FROM cart";
$results = mysqli_query($connection, $sql);
    while($r = mysqli_fetch_assoc($results))
    {
        $cd[] = $r['product_code']; 
        $pr[] = $r['pro_id'];
        $ca[] = $r['cat_id'];
        $im[] = $r['product_image'];
        $price[] = $r['product_price'];
        $grand_total += $r['total_price'];
        $items[] = $r['ItemQty'];
    }
    $code = implode("<br> ", $cd);
    $product_id = implode("<br> ", $pr);
    $category_id = implode("<br> ", $ca);
    $image = implode("<br> ", $im);
    $allItems = implode("<br> ", $items);
    $itemPrice = implode("<br> ₦", $price);
    $addPrice = array_sum($price);
    $shipping = 3.00;
   $orderTotal = $grand_total + $shipping;
    
?>
<html>
<body>
  
    <!-- ##### Header Area End ##### -->
<?php include("navhead.php");?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/ladreimg/joanna-nix-walkup-SYrmNNS5TdA-unsplash.jpg);">
            <h2>Checkout</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area mb-100">
        <div class="container">
            <div class="row justify-content-between">
                <form action="pay.php" method="post">
                <div class="col-12 col-lg-7" style="float:left">
                    <div class="checkout_details_area clearfix">
                        <h5>Billing Details</h5>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="first_name">First Name *</label>
                                    <input type="text" class="form-control" id="first_name" name="firstname" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="last_name">Last Name *</label>
                                    <input type="text" class="form-control" id="last_name" name="lastname" value="" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email Address *</label>
                                    <input type="email" class="form-control" id="email_address" name="email" value="" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="phone_number">Phone Number *</label>
                                    <input type="number" class="form-control" id="phone_number" name="phone" min="0" value="" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="company">Company Name</label>
                                    <input type="text" class="form-control" id="company" name="company" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="company">Address *</label>
                                    <input type="text" class="form-control" id="address" name="address" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="city">Town/City *</label>
                                    <input type="text" name="town" class="form-control" id="city" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="state">State/Province *</label>
                                    <input type="text" name="state" class="form-control" id="state" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="country">Country *</label>
                                    <select class="custom-select d-block w-100" id="country" name="country" required>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="ng">Nigeria</option>
                                        <option value="ind">India</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="cana">Canada</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="postcode">Postcode/Zip *</label>
                                    <input type="text" class="form-control" id="postcode" name="postcode" value="" required>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="order-notes">Order Notes</label>
                                    <textarea class="form-control" id="order-notes" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." name="order_notes"></textarea>
                                </div>
                                
                            </div>
                        
                    </div>
                </div>

                <div class="col-12 col-lg-4" style="float:left">
                    <div class="checkout-content">
                        <h5 class="title--">Your Order</h5>
                        <div class="products">
                            <div class="products-data">
                                <h5>Products:</h5>
                                <div class="single-products d-flex justify-content-between align-items-center">
                                    <p><?php echo $allItems; ?></p>
                                    <input type="hidden" value="<?php echo $allItems; ?>" name="allitems">
                                    <h5><?php echo "₦".$itemPrice; ?></h5>
                                    <input type="hidden" value="<?php echo $itemPrice; ?>" name="itemprice">
                                </div>
                            </div>
                        </div>
                        <div class="subtotal d-flex justify-content-between align-items-center">
                            <h5>Subtotal</h5>
                            <h5>₦<?php echo number_format($addPrice,2); ?></h5>
                        </div>
                        <div class="shipping d-flex justify-content-between align-items-center">
                            <h5>Shipping</h5>
                            <h5>₦<?php echo number_format($shipping,2); ?></h5>
                        </div>
                        <div class="order-total d-flex justify-content-between align-items-center" style="font-weight:bold">
                            <h5>Order Total</h5>
                            <h5>₦<?php echo number_format($grand_total,2); ?></h5>
                            <input type="hidden" value="<?php echo $orderTotal; ?>" name="ordertotal">
                            <input type="hidden" value="<?php echo $product_id; ?>" name="product_id">
                            <input type="hidden" value="<?php echo $category_id; ?>" name="category_id">
                            <input type="hidden" value="<?php echo $image; ?>" name="image">
                            <input type="hidden" value="<?php echo $code; ?>" name="code">
                        </div>
                        <div class="checkout-btn mt-30">
                            <input type="submit" name="place_order" class="btn alazea-btn w-100" value="Place Order">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->
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
    <script type="text/javascript" src="js/cart.js"></script>
</body>

</html>