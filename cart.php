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
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/ladreimg/wheat-381848_1920.jpg);">
            <h2>Cart</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="display:<?php if(isset($_SESSION['showAlert'])){ echo $_SESSION['showAlert']; } else{echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong><?php if(isset($_SESSION['message'])){ echo $_SESSION['message']; } unset($_SESSION['message']); ?></strong>
                        </div>
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
    <?php         
                $userid = $_SESSION['id'];
                
                $stmt = "SELECT * FROM cart WHERE user_id ='$userid' ";
                $results = mysqli_query($connection, $stmt);
                $grand_total = 0;
                if(mysqli_num_rows($results) > 0){
                while($r = mysqli_fetch_assoc($results)){
                $id = $r['id'];
                $image = $r['product_image'];
                $price = $r['product_price'];
                $total_price = $r['total_price'];
                $name = $r['product_name'];
                $qty = $r['qty'];
                $grand_total += $total_price;
                
                ?>
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="resources/uploads/<?php echo $image; ?>" alt="Product"></a>
                                        <h5><?php echo $name; ?></h5>
                                    </td>
                                    <input type="hidden" class="prodid" value="<?php echo $id; ?>">
                                    <input type="hidden" class="prodprice" value="<?php echo $price; ?>">
                                    <td>
                                    <input type="number" class="form-control itemQty"  step="1" min="1" max="99"  value="<?php echo $qty; ?>" style="width:75px">
                                    </td>
                                    <td class="price"><span>₦&nbsp;<?php echo number_format($price,2); ?></span></td>
                                    <td class="total_price"><span>₦&nbsp;<?php echo number_format($total_price,2); ?></span></td>
                                    <td class="action"><a href="action.php?rem=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to remove this item?')"><i class="icon_close"></i></a></td>
                                </tr>
                                
                                <?php }}else {?>
          
                <td class="text-center" colspan="7">Your cart is empty</td>
             
            <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Coupon Discount -->
                <div class="col-12 col-lg-6">
                    <div class="coupon-discount mt-70">
                        <h5>COUPON DISCOUNT</h5>
                        <p>Coupons can be applied in the cart prior to checkout. Add an eligible item from the booth of the seller that created the coupon code to your cart. Click the green "Apply code" button to add the coupon to your order. The order total will update to indicate the savings specific to the coupon code entered.</p>
                        <form action="#" method="post">
                            <input type="text" name="coupon-code" placeholder="Enter your coupon code">
                            <button type="submit">APPLY COUPON</button>
                        </form>
                        <br><br>
                        <div style="float:left">
                        <a href="shop.php?Page=1" class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Continue Shopping</a>
                        </div>
                    </div>
                </div>

                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        <h5 class="title--">Cart Total</h5>
                        <div class="subtotal d-flex justify-content-between">
                            <h5>Total Items in cart</h5>
                            <h5><?php $data = "SELECT COUNT(id) as tr FROM cart WHERE user_id = '$userid'";
                                $cart = mysqli_query($connection, $data);
                                while ($rows = mysqli_fetch_assoc($cart)){
                                $tr = $rows['tr'];
                                echo $tr;} ?></h5>
                        </div>
                        
                        <div class="total d-flex justify-content-between">
                            <h5>Grand Total</h5>
                            <h5 style="font-weight:bold">₦&nbsp;<?php echo number_format($grand_total,2); ?></h5>
                        </div>
                     <div class="checkout-btn">
                            <a href="checkout.php" class="btn alazea-btn w-100 <?php if($grand_total > 1){ echo ""; }else { echo "disabled"; }?>">PROCEED TO CHECKOUT</a>
 </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Cart Area End ##### -->
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
    <?php if(isset($_SESSION['id'])){?>
    <script type="text/javascript" src="js/cart.js"></script>
    <script type="text/javascript" >
    $(document).ready(function(){
            $(".itemQty").on('change',function(){
                var $el = $(this).closest('tr');
                var prodid = $el.find(".prodid").val();
                var prodprice = $el.find(".prodprice").val();
                var qty = $el.find(".itemQty").val();
                location.reload(true);
                
                $.ajax({
                    url:'action.php',
                    method: 'post',
                    data: {qty:qty,prodid:prodid,prodprice:prodprice},
                    success: function(data){
                        console.log(data);
                        
                    }
                });
            }); });</script>
    <?php } else{ $_SESSION['notreg'] = "You must login to view and purchase"; header("location: login.php");} ?>
</body>

</html>