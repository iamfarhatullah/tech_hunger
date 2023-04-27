<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--  CSS -->
  <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/fontawesome.css" rel="stylesheet">
  <!-- <link href="css/brands.css" rel="stylesheet">
  <link href="css/regular.css" rel="stylesheet">
  <link href="css/solid.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/e_shop.css">
  <!-- <link rel="stylesheet" href="css/all.min.css"> -->
  <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->

  <title>Tech Hunger Traders | Home</title>
</head>

<body>

  <!-- body main div starts here -->
  <div class="container-fluid">
    <a href="https://wa.me/qr/KVRITES6WLI3J1" class="float" target="_blank">
      <i class="far fab fa-whatsapp my-float"></i>
    </a>
    <!-- header starts here -->
    <header>
      <!-- navigation bar starts here  -->
      <div class="">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><img src="media/tht6.png" alt="logo"
                width="80px" height="auto"></a>
          </li>
          <div class="nav_bg_clr pt-4">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  ">
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
                      <a class="btclr text-white nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="btclr text-white bt_nav_r nav-link" href="mycart.php">My Cart</a>
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

    <!-- after header slider starts here -->

    <div class="sld my-3">
      <div class="">
        <div class="">
          <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="media/pic/Liptops/wallpapersden.com_keyboard-laptop-macro_1920x1080.jpg" class=" d-block"
                    alt="..." width="1500px" height="550px">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="media/pic/Liptops/wallpapersden.com_keyboard-laptop-macro_1920x1080.jpg" class=" d-block"
                    alt="..." width="1500px" height="550px">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="media/pic/Liptops/wallpapersden.com_keyboard-laptop-macro_1920x1080.jpg" class=" d-block"
                    alt="..." width="1500px" height="550px">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- after header slider ends here -->

    <!-- cards section starts here -->
    <div class="container">
      <div class="row">
        <div class="card_body my-4 py-4 ">
          <div class="card_head_text py-2">
            <div class="row">
              <div class="container">
                <div class="text-center my-2">
                  <div class="fs-1 fw-bold txt_clr">Featured Items</div>
                </div>
              </div>
            </div>
          </div>
          <div class="cards py-2">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php
              require_once('admin/include/connection.php');
              $sql = "SELECT * FROM tbl_products  ORDER by prod_ID desc";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result)>0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$id = $row['prod_ID'];
								$name = $row['prod_name'];
								$description = $row['prod_desc'];
								$quantity = $row['prod_qty'];
								$pic = $row['prod_pic'];
                $price = $row['prod_price'];
                
                echo '<div class="col">
                        <div class="card h-100">
                          <img
                            src="admin/'.$pic.'"
                            class="card-img-top" alt="'.$name.'" width="auto" height="300px">
                          <div class="card-body text-center ">
                            <h5 class="card-title card_txt_clr">'.$name.'</h5>
                            <p class="card-text card_sub_txt_clr">RS '.$price.'</p>
                          </div>
                          <div class="card-footer text-center">
                            <a href="viewProduct.php?id='.$id.'" target="_blank"><button
                                class=" text-white crd_bt p-2 w-50 rounded-pill">Details</button></a>
                          </div>
                        </div>
                      </div>';

              }
              }else{
                echo 'No records';
              }
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- cards section ends here -->


    <!--gallery section starts -->

    <div class="row-sm">
      <div class="my-2 py-2">
        <div class="img_body my-4 py-4">
          <div class="text-center">
            <div class="img_head fs-1 fw-bold py-2 my-1">Gallery</div>
            <div class="gallery_img"></div>

          </div>
        </div>
      </div>
    </div>

    <!--gallery section ends  -->

    <!-- logistics logo section starts -->
    <div class="row-sm">
      <div class="">
        <div class="logo_body">
          <div class="logo_sub">
            <div class="logo_head_text text-center py-2">
              <div class="logo_txt_clr fs-1 ">Logistic Partners</div>
            </div>
            <div class="row text-center">
              <div class="logo_bg py-4 ">
                <div class="col-12">
                  <div class="col-3 float-sm-start px-3">
                    <img src="media/pic/logic_logo/daewoo_logo.png" class="logo_img" alt="Daewoo-Logo">
                  </div>
                  <div class="col-3 float-sm-start px-3">
                    <img src="media/pic/logic_logo/leopard_logo.png" class="logo_img" alt="leopard logo">
                  </div>
                  <div class="col-3 float-sm-start px-3">
                    <img src="media/pic/logic_logo/m&p_logo.png" class="logo_img" alt="m&p logo">
                  </div>
                  <div class="col-3 float-sm-start px-3">
                    <img src="media/pic/logic_logo/pak_post_logo.png" class="logo_img" alt="pak post logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- logistics logo section ends -->


  </div>
  <!-- footer section starts -->
  <footer>
    <div class="ft_body">
      <div class="ft_sub_body">
        <div class="up_sec">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="col-4 float-sm-start">
                  <ul class="foot_cntnt">
                    <li class="fw-bold py-3 my-3 foot_cntnt_head">Quick Links</li>
                    <div class="py-3">
                      <li class="py-3  fw-bold"><a href="#">Home</a></li>
                      <li class="py-3  fw-bold"><a href="#">About Us</a></li>
                      <li class="py-3  fw-bold"><a href="contact.php">Contact Us</a></li>
                      <!-- <li class="py-3  fw-bold"><a href="login.php">Login / Register</a></li>
                      <li class="py-3  fw-bold"><a href="include/admin/admin.html">Admin Login</a></li> -->
                    </div>
                  </ul>
                </div>
                <div class="col-4 float-sm-start">
                  <div class="cus_head"></div>
                  <div class="col-2">
                    <img src="" alt="" srcset="">
                    <span class="cus_text"></span>
                  </div>
                  <div class="col-2">
                    <img src="" alt="" srcset="">
                    <span class="cus_text"></span>
                  </div>
                </div>
                <div class="col-4 float-sm-start py-5 my-5">

                  <span>
                    <div class="foot_address py-3 my-3">
                      <i class="mx-3 fas fa-map-marker-alt ft_ic"></i>
                      <span class="ft_txt">Takhta Band Bypass Mingora Swat</span>
                    </div>
                  </span>
                  <span>
                    <div class="foot_phone py-3 my-3">
                      <i class="mx-3 fas fa-phone-alt ft_ic"></i>
                      <span class="ft_txt">0347-3613718</span>
                    </div>
                  </span>
                  <span>
                    <div class="foot_email py-3 my-3">
                      <i class="mx-3 far fa-envelope ft_ic"></i>
                      <span><a class="ft_txt" style="text-decoration: none;" target="_blank"
                          href="https://mail.google.com/mail/u/2/#inbox/FMfcgzGqQJjMJMhgVfXVNxXVHXzdzNGh?compose=new">techhungertraders@gmail.com</a>
                      </span>
                    </div>
                  </span>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dwn_sec">
          &COPY; Copyright All right reserved Tech Hunger Traders &REG; 2022-23
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section ends -->
  <!-- body main div ends here -->

  <!-- javascripts files -->
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