<?php 
session_start();
include("header.php");
include("resources/config.php");
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$ret= "SELECT * FROM userregistration WHERE email='$email' and password='$password'";
$database = mysqli_query($connection,$ret);
$num=mysqli_fetch_array($database);
$status=$num['status'];
if($num > 0)
{	

$_SESSION['login']=$email;
$_SESSION['id']=$num['id'];
$_SESSION['first_name']=$num['first_name'];
$extra="index.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();

}
else
{
$_SESSION['action1']="Invalid email or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
 ?>
<html>
<body>
<style>
    body{
    background-image: url(img/ladreimg/plantation-945400_1920.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
</style>

  
    <!-- ##### Header Area End ##### -->
<?php include("navhead.php");?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reg.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid register" style="margin-top:130px">
                <div class="row">
                    <div class="col-md-3 register-left">
                     
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                <h3 class="register-heading">Login</h3>
                                
                <form action="" method="post">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                       
                                       <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password" value="" />
                                        </div>
                                        
                                        <input type="submit"  class="btnRegister"  value="Login" name="login" />
                                        
                                          <a href="register.php">  <input type="button" style="background-color:transparent;border:lightblue 1px solid" class="btnRegister"  value="Register"/>
                                      </a>
                                    </div>
                                    <font color="#FF0000"><?php if(isset($_SESSION['action1'])){ echo $_SESSION['action1']; ?><?php echo $_SESSION['action1']="";}?></font>
                <font color="#FF0000"><?php echo $_SESSION['notreg']; ?><?php echo $_SESSION['notreg']="";?></font>
                                </div>
                                </form>
                            </div>
                         
                        </div>
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