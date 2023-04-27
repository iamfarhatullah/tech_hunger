<?php include 'session.php'; ?>
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
                      <a class="btclr text-white nav-link" href="mycart.php">My Cart</a>
                    </li>
                    <li class="nav-item">
                      <a class="btclr bt_nav_r text-white nav-link" href="logout.php">Logout</a>
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
   
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>My Cart</h2>
        </div>
      </div>
      <?php 
      
      require("admin/include/connection.php");
      $sql = "SELECT * FROM `tbl_orders` 
      INNER JOIN tbl_products ON tbl_products.prod_ID = tbl_orders.prod_FK
      WHERE `user_FK`='$user_ID' AND order_status='0' ";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result)> 0){
        echo '<div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <tr>
                <th style="width: 80px">ID</th>
                <th style="width: 100px">Picture</th>
                <th>Name</th>
                <th style="width: 60px">Qty</th>
                <th style="width: 150px">price</th>
                <th style="width: 150px">Total</th>
                <th style="width: 200px"></th>
            </tr>';
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['order_ID'];
          $prod_ID = $row['prod_ID'];
          $prod_price = $row['prod_price'];
          $prod_name = $row['prod_name'];
          $qty = $row['order_qty'];
          $prod_pic = $row['prod_pic'];
          echo '<tr>
          <td>'.$id.'</td>
          <td><img src="admin/'.$prod_pic.'" style="width: 70px; height: auto;"></td>
          <td>'.$prod_name.'</td>
          <td>'.$qty.'</td>
          <td>'.$prod_price.'</td>
          <td>'.$prod_price * $qty.'</td>
          <td>
          <a href="createOrder.php?id='.$id.'" class="btn btn-sm btn-primary">Order now</a>
          <a href="deleteOrder.php?id='.$id.'" class="btn btn-sm btn-danger">X</a>
          </td>
      </tr>';
        }

        echo '</table>
        </div>
      </div>';
      }else{
        echo "Cart is empty";
      }

      ?>
      
            
          
    </div>

<br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>My Orders</h2>
        </div>
      </div>
      <?php 
      
      require("admin/include/connection.php");
      $sql = "SELECT * FROM `tbl_orders` 
      INNER JOIN tbl_products ON tbl_products.prod_ID = tbl_orders.prod_FK
      WHERE `user_FK`='$user_ID' AND (order_status='1' OR order_status='2' OR order_status='3') ";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result)> 0){
        echo '<div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <tr>
            <th style="width: 80px">ID</th>
                <th style="width: 100px">Picture</th>
                <th>Name</th>
                <th style="width: 150px">DateTime</th>
                <th style="width: 200px">Status</th>
            </tr>';
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['order_ID'];
          $prod_ID = $row['prod_ID'];
          $prod_price = $row['prod_price'];
          $prod_name = $row['prod_name'];
          $order_status = $row['order_status'];
          $qty = $row['order_qty'];
          $prod_pic = $row['prod_pic'];
          $order_datetime = $row['order_datetime'];
          $statusAndButton = '';
          if($order_status == 1){
            $statusAndButton = 'Ordered';
          }elseif($order_status == 2){
            $statusAndButton = 'Shipped<br><a href="confirmRecieved.php?id='.$id.'" class="btn btn-sm btn-info">Confirm if Recieved</a>';
          }elseif($order_status == 3){
            $statusAndButton = 'Arrived';
          }
          echo '<tr>
          <td>'.$id.'</td>
          <td><img src="admin/'.$prod_pic.'" style="width: 70px; height: auto;"></td>
          <td>'.$prod_name.'</td>
          <td>'.$order_datetime.'</td>
          
          <td>'.$statusAndButton.'</td>
      </tr>';
        }

        echo '</table>
        </div>
      </div>';
      }else{
        echo "No Orders";
      }

      ?>
      
            
          
    </div>


  </div>
  <!-- footer section starts -->
  <footer style="margin-top: 600px">
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
                      <li class="py-3  fw-bold"><a href="include/contact_us/contact.html">Contact Us</a></li>
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