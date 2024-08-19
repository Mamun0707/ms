<?php require_once('connection.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MS</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
  
<body>
    <!-- header section strats -->
    <header class="header_section bg-info">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
            <a href="">
              <img src="images/telephone-symbol-button.png" alt=""> Emergency: +999
            </a>
          </div>
          <div class="social-container">
            <a href="">
              <img src="images/fb.png" alt="" class="s-1">
            </a>
            <a href="">
              <img src="images/twitter.png" alt="" class="s-2">
            </a>
            <a href="">
              <img src="images/instagram.png" alt="" class="s-3">
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="<?= $baseurl ?>/assets/img/illustrations/icons8-medicine-48.png" style="width:100%; max-width:55px;">
            <span>
              MS
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="medicine.php"> Medicine </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                  <form class="form-inline ">
                    <input type="search" placeholder="Search">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="cart.php"><img src="images/cart.svg"><span class="badge cart_total" > <?= isset($_SESSION['cart']['total_qty'])?$_SESSION['cart']['total_qty']:0 ?> </span></a>
                </li>

                <li class="nav-item">
                  <div class="dropdown ">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']){ ?>
                      <?= $_SESSION['user_data']->first_name ?>
                      <img width="20%" class="w-px-40 h-auto rounded-circle" src="<?= $baseurl ?>images/user.png">
                  <?php } else { ?>
                    User
                  <?php } ?>
                  </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <?php if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']){ ?>
                              <li><a class="dropdown-item" href="my_order.php"><span class="edu-icon edu-home-admin author-log-ic"></span>My Order</a></li>
                              <li><a class="dropdown-item" href="profile.php"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a></li>
                              <li><a class="dropdown-item" href="<?= $baseurl ?>logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Logout</a></li>
                          <?php } else { ?>
                              <li><a class="dropdown-item " href="<?= $baseurl ?>login.php"><span class="edu-icon edu-locked author-log-ic"></span>Login</a></li>
                          <?php } ?>
                      </ul>
                      </div>
                </li>
                
              
              </ul>
              
					
            <!-- User Info Old -->
            <!-- <li>
							<ul class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
								<li class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<a href="javascript:void(0);" data-bs-toggle="dropdown">
									<?php if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']){ ?>
										<span class="nav-link" href="#"><span style="color:red" class="last_name"><?= $_SESSION['user_data']->last_name ?></span> <img src="<?= $baseurl ?>admin/assets/customer_photos/"></span>
										
 										<?php }else{ ?>
											<span class="nav-link" href="#"><img src="<?= $baseurl ?>admin/assets/customer_photos/"></span>
										<?php } ?>
									
									</a>
									<?php if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']){ ?>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<li><a class="dropdown-item" href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a></li>
											<li><a class="dropdown-item" href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a></li>
											<li><a class="dropdown-item" href="<?= $baseurl ?>logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Logout</a></li>
 										<?php }else{ ?>
										<ul class="dropdown-item" href="#">
											<li><a class="dropdown-item" href="<?= $baseurl ?>login.php"><span class="align-middle"></span>Login</a></li>
										<?php } ?>
									</ul>
								</li>
        					</ul>
						</li> -->

            


          
          </ul>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->