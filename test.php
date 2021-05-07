
<?php
session_start(); 
if(isset($_POST['place_order'])){
    
    $pay=$_POST['ordertotal'];
    echo $pay;

}
    ?>