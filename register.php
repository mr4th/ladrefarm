<?php 
error_reporting(0);
include("header.php");
include_once("resources/config.php");
if(isset($_POST['submit']))
{
    $errors = array(); 
    $data = "SELECT * FROM userregistration";
    $stuff = mysqli_query($connection,$data);
    $user=mysqli_fetch_array($stuff);
    $db_email = $user['email'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $gender = $_POST['gender'];
	$password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];
	$admin=0;
    if ($password != $password_confirm ) {
			array_push($errors, "The two passwords do not match");
		}
    elseif($db_email == $email){
        array_push($errors, "This email has already been registered");
    }
    else{
	$query= "INSERT INTO userregistration(first_name,last_name,email,phone,password,password_confirm,admin,gender) VALUES('$firstname','$lastname','$email','$phone','$password','$password_confirm','$admin','$gender')";
    $database = mysqli_query($connection,$query);
				if ($database){
                   echo "<script>window.location = 'login.php';</script>";
                }else{
                    echo "<div style='background-color:red;color:white;font-weight:bold' class='text-center'>Failed. Try Again</div>";
                }
	
	
	
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
    background-image: url(img/ladreimg/plantation-945400_1920.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
</style>
    <!-- ##### Header Area End ##### -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reg.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php include("navhead.php");?>
<div class="container-fluid register" style="margin-top:130px">
                <div class="row">
                    <div class="col-md-3 register-left">
                     
                    </div>
                    <div class="col-md-9 register-right">
                       <form action="" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="margin-top:-50px">
                                <h3 class="register-heading">Apply Today</h3>
                                
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="firstname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="lastname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="password_confirm" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="11" maxlength="11" name="phone" class="form-control" placeholder="Your Phone *" value=""/>
                                        </div>
                                      
                                     
                                        <input type="submit" class="btnRegister"  value="Register" name="submit" />
                                       <a href="login.php"><input type="button" style="background-color:transparent;border:lightblue 1px solid" class="btnRegister"  value="Login"/></a>
                                    </div>
                                    <div >
                     <?php  if (count($errors) > 0) : ?>
                            <font color="#FF0000">
                                <?php foreach ($errors as $error) : ?>
                                    <p><?php echo $error ?></p>
                                <?php endforeach ?>
                            </font>
                    <?php  endif ?>
                    </div>
                                </div>
                    
                            </div>
                         
                        </div>
                           </form>
                    </div>
                </div>
            </div>
    
    
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
</body>

</html>