
                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Users
                         
                        </h1>
                          <p class="bg-success">
                         
                        </p>
                            <h3 class="bg-success"><?php display_message(); ?></h3>
                        <a href="index.php?add_user" class="btn btn-primary">Add User</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                            
                                    </tr>
                                </thead>
                                <tbody>

                                        <?php display_users(); ?>


                                    
                                </tbody>
                            </table> <!--End of Table-->
                        

                        </div>

                        
                    </div>
    


