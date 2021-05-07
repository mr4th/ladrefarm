
<?php
session_start(); 
if(isset($_POST['place_order'])){
    $Name=$_POST['firstname']." ".$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $company=$_POST['company'];
    $address=$_POST['address'];
    $town=$_POST['town'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $postcode=$_POST['postcode'];
    $order_notes=$_POST['order_notes'];
    $allitems=$_POST['allitems'];
    $itemprice=$_POST['itemprice'];
    $pay=$_POST['ordertotal'];
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category'];
    $image = $_POST['image'];
    $code = $_POST['code'];
    

$curl = curl_init();

$customer_email =   $email;
$amount =   $pay;  
$currency = "NGN";
$txref = "rave" . uniqid(rand(10345654,4534233434454)); // ensure you generate unique references per transaction.
$PBFPubKey = "FLWPUBK_TEST-dba4939f6df1d12dd4312238aed455d2-X"; // get your public key from the dashboard.
$redirect_url = "http://localhost/ladrefarm/success.php";

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url,
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}

// uncomment out this line if you want to redirect the user to the payment page
//print_r($transaction->data->message);

                    $_SESSION['amount'] = $amount; 
                    $_SESSION['transid'] = $txref;
                    $_SESSION['payname'] = $Name;  
                    $_SESSION['payemail']= $email;
                    $_SESSION['phone']= $phone;
                    $_SESSION['company']= $company;
                    $_SESSION['address']= $address;
                    $_SESSION['town']= $town;
                    $_SESSION['state']= $state;
                    $_SESSION['country']= $country;
                    $_SESSION['postcode']= $postcode;
                    $_SESSION['order_notes']= $order_notes;
                    $_SESSION['allitems']= $allitems;
                    $_SESSION['itemprice']= $itemprice;
                    $_SESSION['productid']= $product_id;
                    $_SESSION['categoryid']= $category_id;
                    $_SESSION['image']= $image;
                    $_SESSION['code']= $code;
                    
                                            

// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);
}
    ?>