<?php
session_start();
error_reporting(0);
include("resources/config.php");

$userid = $_SESSION['id'];
//for insertion into cart 
if(isset($_POST['pid'])){
    if($userid){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pimage = $_POST['pimage'];
    $pcode = $_POST['pcode'];
    $catid = $_POST['catid'];
    
    $pqty = 1;
    
    $stmt = "SELECT * FROM cart WHERE user_id = '$userid' ";
    $results = mysqli_query($connection, $stmt);
    $code = array();
    while($r = mysqli_fetch_assoc($results))
    {

        array_push($code,$r['product_code']);    
    }
    if (!in_array($pcode, $code)){
        $query = "INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code,user_id,pro_id,cat_id) VALUES ('$pname','$pprice','$pimage','$pqty','$pprice','$pcode','$userid','$pid','$catid')";
        $database = mysqli_query($connection,$query);
      
        echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-   dismiss="alert">&times;</button>
                <strong>Item added to your cart </strong>
                </div>';
    }else{
        echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-   dismiss="alert">&times;</button>
                <strong>Item already added to your cart</strong>
                </div>';
    }
    }else {
        echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-   dismiss="alert">&times;</button>
                <strong>Login before adding to cart</strong>
                </div>';
    }
}

//for cart item insertion display on the header 

if(isset($_GET['cartItem']) && isset($_GET['cartItem'])== 'cart_item'){
   $data = "SELECT COUNT(id) as tr FROM cart WHERE user_id = '$userid' ";
   $cart = mysqli_query($connection, $data);
   while ($rows = mysqli_fetch_assoc($cart)){
   $tr = $rows['tr'];
   echo $tr;
                                        }
}

//remove items from cart

if (isset($_GET['rem'])){
    $id = $_GET['rem'];
    
    $delete = "DELETE FROM cart WHERE id = '$id' AND user_id = '$userid'";
    $delcart = mysqli_query($connection,$delete);
    
    $_SESSION['showAlert']= 'block';
    $_SESSION['message'] = 'Item removed from the cart';
    header("location: cart.php");
    
}

//multiply quantity with price after addition of items

if(isset($_POST['qty'])){
    $qty = $_POST['qty'];
    $pid = $_POST['prodid'];
    $pprice = $_POST['prodprice'];
    
    $tprice = $qty*$pprice;
    
    
//    $stmt = "UPDATE cart SET qty = '$qty', total_price = '$tprice' WHERE id = '$pid' ";
    $dbupdate="UPDATE cart SET qty='$qty', total_price='$tprice' WHERE id='$pid' AND user_id = '$userid' ";
            if($Exe=mysqli_query($connection,$dbupdate)){
                echo"<script>alert('Item has been updated successfully')</script>";
            }
            else if (!$Exe) {
                    print("Error: ". mysqli_error($connection));
                            exit();
            }
//    $con = mysqli_query($connection,$stmt);
    
}


?>