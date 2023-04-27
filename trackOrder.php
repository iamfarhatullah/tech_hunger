<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Track Your Order</title>
</head>

<link rel="stylesheet" href="css/e_shop.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/brands.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/regular.css">
<link rel="stylesheet" href="css/solid.css">
<link rel="stylesheet" type="text/css" href="css/register.css">

<body>

    <section class="body_container">

      <br><br>

        <!-- form starts here -->
        <div class="sub_body_container">

            <div class="partition ms-5 ps-5">

                <div class="sub_partition  ms-5  my-1">

                    <div class="form_head">

                        <h2>Track Your Order</h2>


                    </div>
<br>
                    <div class="form_sub_head"><strong>
                    <?php
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }  
                     ?>
                    </strong>

                        

                    </div>


                    <form action="" method="POST" autocomplete="off">
                        <div class="form_item">
                            <label for="name">
                                Order ID
                            </label>
                            <input type="text" name="order_ID" placeholder="Enter Order ID" required="required">
                        </div><br>
                        <div class="form_item">
                            <input type="submit" name="track" id="submit" value="Track Now">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php 
        include("admin/include/connection.php");
        if(isset($_POST['track'])){
            $orderID = $_POST['order_ID'];
            $sql = "SELECT `order_status` FROM `tbl_orders` WHERE `order_ID`='$orderID'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                $value = mysqli_fetch_assoc($result);
                $status = $value['order_status'];
                if($status == 0){
                    $msg = "In Cart";
                }elseif($status == 1){
                    $msg = "Your Order is Placed Successfully! <br> Wait until the admin approve your request.";
                }elseif($status == 2){
                    $msg = "Your Order has been Shipped by the admin.";
                }elseif($status == 3){
                    $msg = "Order Delivered";
                }
                header("location: trackOrder.php?msg=".$msg);
            }else{
                header("location: trackOrder.php?msg=Incorrect Order ID");
            }
            

        }
        
    ?>
        <!-- footer starts here -->

        <footer>
            <div class="ft_body mt-3">
                <div class="ft_sub_body">
                    <div class="dwn_sec">
                        &COPY; Copyright All right reserved Tech Hunger Traders &REG; 2022-23
                    </div>
                </div>
            </div>
        </footer>

        <!-- footer ends here -->

    </section>
    <!-- form ends here -->

    <!-- javascript files -->
    <script src="js/login.js"></script>
    <script src="./../../js/all.js"></script>
    <script src="./../../js/all.min.js"></script>
    <script src="./../../js/bootstrap.bundle.js"></script>
    <script src="./../../js/bootstrap.bundle.min.js"></script>
    <script src="./../../js/bootstrap.js"></script>
    <script src="./../../js/bootstrap.min.js.map"></script>
    <script src="./../../js/brands.js"></script>
    <script src="./../../js/brands.min.js"></script>
    <script src="./../../js/fontawesome.js"></script>
    <script src="./../../js/fontawesome.min.js"></script>
    <script src="./../../js/regular.min.js"></script>
    <script src="./../../js/solid.min.js"></script>

</body>

</html>