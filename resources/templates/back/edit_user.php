<?php 
if(isset($_GET['id'])) {


$query = query("SELECT * FROM userregistration WHERE id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$email         = escape_string($row['email']);
$firstname    = escape_string($row['first_name']);
$lastname    = escape_string($row['last_name']);
$password    = escape_string($row['password']);

    }

}

 ?>


<?php edit_user(); ?>
                        <h1 class="page-header">
                            Edit User
                            <small><?php echo $firstname; ?></small>
                        </h1>

                      <div class="col-md-6 user_image_box">
                          
                    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="" alt=""></a>

                      </div>


                    <form action="" method="post" enctype="multipart/form-data">

  


                        <div class="col-md-6">

                           
                           <div class="form-group">
                            <label for="username">email</label>
                            <input type="text" name="email" class="form-control"  value="<?php echo $email; ?>" >
                               
                           </div>


                            <div class="form-group">
                                <label for="first name">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="<?php echo $firstname; ?>" >
                               
                           </div>

                            <div class="form-group">
                                <label for="last name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="<?php echo $lastname; ?>" >
                               
                           </div>


                            <div class="form-group">
                                <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                               
                           </div>

                            <div class="form-group">

                            

                            <input type="submit" name="update_user" class="btn btn-primary pull-right" value="Update" >
                               
                           </div>


                            

                        </div>

                      

            </form>





    