<!doctype html>
<html lang="ar" d`r="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/e_shop.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/brands.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/solid.css">
    <link rel="stylesheet" href="css/contact.css">
   
    <title>THT | Contact Us</title>
    </head>
 
    <body>
      
      <!-- main body starts here -->

      <section class="m_body">

        <!-- sub body starts here -->
        
        <div class="sub_body">

          <header>
            <!-- navigation bar starts here  -->
            <div class="">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" id="" aria-current="page" href="index.php"><img
                            src="media/tht6.png" alt="logo" width="80px" height="auto"></a>
                </li>
                <div class="nav_bg_clr pt-4">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item ">
                                        <a class="btclr text-white nav-link active bt_nav_l" aria-current="page"
                                            href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="btclr text-white nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Products
                                        </a>
                                        <ul class="dropdown-menu text-center">
                                            <?php 
                                            include 'categoriesLinks.php';
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                    <a class="btclr text-white nav-link" href="trackOrder.php">Track Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btclr text-white nav-link" href="">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btclr bt_nav_r text-white nav-link" href="mycart.php">My Cart</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="btclr bt_nav_r text-white nav-link" href="logout.php">Logout</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </ul>
            </div>
            <!-- navigation bar ends here -->
          </header>
          <!-- header ends here -->

          <!-- contact form starts here -->

          <div class="contact_m_body">

            <div class="contact_sub_body">
              
              <div class="container">
              <div class="row">


                  <div class="main_form_body">
                    <div class="sub_form_body">
                        <div class="container">
                            <div class="row py-4">
                                <div class="fs-1 fw-bold text-white text-center my-2">Contact Us</div>
                                <div class="inner_form_left col-md-6 my-4">
                                    <div class="container">
                                       <div class="inner_sub_form_left py-5">
                                        <div class="py-4 my-1">
                                            <span class="form_icon_bg"><img src="media/loc-1.png" alt="" width="14px"
                                                    height="25px"></span>
                                            <span class="mx-3 form_txt">Takhta Band Bypass Mingora Swat</span>
                                        </div>
                                        <div class="py-4 my-1">
                                            <span class="form_icon_bg"><img src="media/phone1.png" alt="" width="14px"
                                                    height="20px"></span>
                                            <span class="mx-3 form_txt">0347-3613718</span>
                                        </div>
                                        <div class="py-4 my-1">
                                            <span class="form_icon_bg"><img src="media/mail3.png" alt="" width="16px"
                                                    height="20px"></span>
                                            <span class="mx-3 form_txt"><a href="https://mail.google.com/mail/u/2/#inbox/FMfcgzGqQJjMJMhgVfXVNxXVHXzdzNGh?compose=new" style="text-decoration:none; color: white;">techhungertraders@gmail.com</a></span>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="inner_form_right col-md-6 my-4">
                                    <div class="container">
                                        <form action="#" method="POST" autocomplete="off" target="_self" id="feedback">
                                        <div class="form_head my-4 fs-3 fw-bold text-white">Send Message</div>
                                        <div class="form_item my-4">
                                            <input type="text" size="39" maxlength="20" minlength="6" placeholder="Full Name" name="Fullname" id="name" required="required">
                                        </div>
                                        <div class="form_item my-4">
                                            <input type="email" name="email" size="39" maxlength="20" placeholder="Email" id="email" required="required">
                                        </div>
                                        <div class="form_item my-4">
                                            <textarea id="comment" name="comment" rows="1" cols="38" placeholder="Type Your Text Here"></textarea>
                                        </div>
                                        <div class="form_item my-4">
                                            <div class="btn btn-light fw-bold text-start text-success rounded-3" >Send</div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact from ends -->

                </div>

              </div>

            </div>

          </div>

          <!-- contact form ends here -->

           <!-- footer starts here -->
        <footer class="mt-3">
          <div class="ft_body">
              <div class="ft_sub_body">
                  <div class="dwn_sec">
                      &COPY; Copyright All right reserved Tech Hunger Traders &REG; 2022-23
                  </div>
              </div>
          </div>
      </footer>
      <!-- footer ends here -->


        </div>
        <!-- sub body ends here -->

      </section>

      <!-- main body ends here -->


          <!-- javascript files -->
    <script src="js/all.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js.map"></script>
    <script src="js/brands.js"></script>
    <script src="js/brands.min.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/regular.min.js"></script>
    <script src="js/solid.min.js"></script>

    </body>

</html>