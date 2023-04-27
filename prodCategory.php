<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/e_shop.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/brands.css"> -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <!-- <link rel="stylesheet" href="css/regular.css"> -->
    <!-- <link rel="stylesheet" href="css/solid.css"> -->
    <link rel="stylesheet" href="css/laptops.css">

    <title>THT | Laptops</title>
</head>

<body>

    <!-- body main div starts here -->
    <div class="m_body">
        <!-- header starts here -->
        <header>
            <!-- navigation bar starts here  -->
            <div class="">
                <ul class="nav justify-content-center">
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
                                        <li class="nav-item">
                                            <a class="btclr text-white bt_nav_r nav-link" href="mycart.php">My Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="btclr text-white nav-link" href="contact.php">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="btclr text-white nav-link" href="trackOrder.php">Track Order</a>
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
                                        <li class="nav-item  ">
                                            <a class="btclr text-white nav-link active bt_nav_l" aria-current="page"
                                                href="index.php">Home</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active" id="" aria-current="page" href="index.php"><img
                                src="media/tht6.png" alt="logo" width="80px" height="auto"></a>
                    </li>
                </ul>
            </div>
            <!-- navigation bar ends here -->
        </header>
        <!-- header ends here -->

        <!-- product section begins here -->

        <div class="prod_sec_m_sec my-3">
            <div class="prod_sec_sub_sec">
                <div class="container">
                    <div class="row">
                        <div class="r_clr fw-bold text-center fs-1 my-1"><?php if(isset($_GET['cname'])){echo $_GET['cname'];} ?></div>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php 
                            include("admin/include/connection.php");
                            $cat_ID = $_GET['cid'];
                            $sql = "SELECT * FROM tbl_products WHERE prod_category='$cat_ID'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $prod_ID = $row['prod_ID'];
                                    $name = $row['prod_name'];
                                    $description = $row['prod_desc'];
                                    $quantity = $row['prod_qty'];
                                    $pic = $row['prod_pic'];
                                    $price = $row['prod_price'];

                                    echo '<div class="col">
                                        <div class="card my-2 card-a">
                                            
                                            <h5 class="card-title r_crd_txt_clr my-2 fw-bold ms-5 me-auto">'.$name.'</h5>
                                            <img src="admin/'.$pic.'" class="card-img py-2" alt="'.$name.'"
                                                width="50px" height="250px">
                                            <div class="card-body text-center">
                                                <div class="card-title text-center"><span class="r_clr">Rs:</span><span
                                                        class=" ms-2 fw-bold fs-4 r_crd_txt_clr">'.$price.'</span></div>
                                                <a href="viewProduct.php?id='.$prod_ID.'"><button
                                                        class=" crd_bt rounded-pill text-center text-white p-2 w-50">Details</button></a>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            }else{
                                echo "No Results";
                            }
                        ?>

                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- products section ends here -->

        <!-- pagination start -->
        <!-- <div class="pag_m_sec">
            <div class="pag_sub_sec ">
                <div class="container">
                    <div class="row">
                        <div class=" text-center">
                            <nav aria-label="...">
                                <ul class=" pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- pagination ends -->


        <!-- footer starts here -->
        <footer class="">
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
    <!-- body main div ends here -->

    <!-- javascripts files -->


    <script src="js/login.js"></script>
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