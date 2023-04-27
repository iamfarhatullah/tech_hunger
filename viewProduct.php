
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
                    <li class="nav-item">
                      <!-- <a class="btclr bt_nav_r text-white nav-link" href="logout.php">Logout</a> -->
                    </li>
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
    <?php
              require_once('admin/include/connection.php');
              $id = $_GET['id'];
              $sql = "SELECT * FROM tbl_products WHERE prod_ID='".$id."'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result)>0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$prod_ID = $row['prod_ID'];
								$name = $row['prod_name'];
								$description = $row['prod_desc'];
								$quantity = $row['prod_qty'];
								$pic = $row['prod_pic'];
                $price = $row['prod_price'];
                echo '
                <br><br><br><br>
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="admin/'.$pic.'" alt="'.$name.'" width="100%" height="auto">
                    </div>
                    <div class="col-md-7">
                      <h2>'.$name.'</h2>
                      <h4>PKR '.$price.'</h4><br>
                      <p>'.$description.'</p>
                      <br>
                      <form method="post" action="createOrder.php">
                        <input type="hidden" value="'.$prod_ID.'" name="id">
                        <label>Qty</label>
                        <input type="number" value="1" name="qty" style="width: 50px">
                        <button type="button" class="btn btn-primary" id="myBtn">Buy Now</button>
                        <div id="myModal" class="modal">

                          <!-- Modal content -->
                          <div class="container">
                            <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md-6 md-offset-3">
                                <div class="modal-content ">    
                                  <span class="close">&times;</span>
                                  <h4>Note</h4>
                                  <p>You can buy items without signing in by clicking the "Buy Without Signing In" Button.</p>
                                  <button type="submit" name="checkCust" class="btn btn-primary">Add to Cart</button><br>
                                  <input type="submit" name="withoutLoginBtn" value="Buy Without Signing in">
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                      </form>
                    </div>
                  </div>
                </div><br><br><br><br>';
              }
              }else{
                echo 'No records';
              }
              ?>

   


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
                      <!-- <li class="py-3  fw-bold"><a href="login.php">Login / Register</a></li> -->
                      <!-- <li class="py-3  fw-bold"><a href="include/admin/admin.html">Admin Login</a></li> -->
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
<style>
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
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