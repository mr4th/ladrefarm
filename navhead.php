  <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/farmf-02.PNG" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@ladrefarm.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: info@ladrefarm.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +234 813 8474 366</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Register -->
                                  <?php  
                                if (isset($_SESSION['id'])){  ?>
                                <div class="login">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span><?php echo $_SESSION['first_name']; ?></span></a>
                                </div>
                                <!-- Login -->
                                <div class="login">
                                    <a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                                </div>
                                <?php } else { ?>
                                <div class="login">
                                    <a href="register.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Register</span></a>
                                </div>
                                <!-- Login -->
                                <div class="login">
                                    <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>
                                 <?php } ?>
                                <!-- Cart -->
                                <div class="cart">
                                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span >Cart <span class="badge badge-danger" id="cart-item" style="font-size:15px"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/farm.png" width="100px" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="#">My Store</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.php?Page=1">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php?Page=1">Shop</a></li>
                                                    <li><a href="shop-details.php">My Orders</a></li>
                                                    <li><a href="cart.php">Shopping Cart</a></li>
<!--                                                    <li><a href="checkout.php">Checkout</a></li>-->
                                                    <li><a href="return.php">Return policy</a></li>
                                                </ul>
                                     
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="shop.php?Page=1">Shop</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                     <li><a href="faq.php">FAQs</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>