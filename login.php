<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  CSS -->
    <link rel="stylesheet" href="css/e_shop.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/brands.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/solid.css">
    <link rel="stylesheet" href="css/login.css">

    <title>THT | Login</title>
</head>

<body>
    <!-- body main div starts here -->
    <div class="">
        <!-- header starts here -->
        <header>
            <br><br>
            <!-- navigation bar starts here  -->
            <!-- <div class="">
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
                                            <a class="btclr bt_nav_r text-white nav-link"
                                                href="../register/register.html">Register / Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="btclr text-white nav-link"
                                            href="./../contact_us/contact.html">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="btclr text-white nav-link" href="#">Discounted Products</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="btclr text-white nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Products
                                            </a>
                                            <ul class="dropdown-menu text-center">
                                                <li class="btclr"><a class=" dropdown-item"
                                                        href="../products/laptops/laptops.html">Laptops</a></li>
                                                <li class="btclr"><a class=" dropdown-item" href="../products/pcs/pcs.html">Pc</a></li>
                  
                                                <li class="btclr"><a class=" dropdown-item" href="../products/accessories/access.html">Accessories</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="btclr text-white nav-link active bt_nav_l" aria-current="page"
                                                href="../../index.html">Home</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active" id="" aria-current="page" href="../../index.html"><img
                                src="../../media/tht6.png" alt="logo" width="80px" height="auto"></a>
                    </li>
                </ul>
            </div> -->
            <!-- navigation bar ends here -->
        </header>
        <!-- header ends here -->

        <!-- form starts here -->

        <div class="form_body">
            <div class="form_sub_body">
                <div class="container">
                    <div class="row">
                        <div class="form_bdr">
                            <!-- form section starts -->

                            <section class="m_form_body my-4 py-1 container text-center w-25">

                                <div class="sub_form_body py-4 my-3">

                                    <form action="loginCust.php" method="POST" class="frm" name="myForm"
                                        onsubmit="return validateForm()">

                                        <div class="form_items">

                                            <div class="form_sub_items text-center py-3">

                                                <span class="form_heading  fw-bold h4">Login</span>

                                            </div>

                                            <br>
                                            <div class="form_sub_items my-2">

                                                <input type="email" name="email" size="20" maxlength="20"
                                                    placeholder="Email" class="rounded-pill my-2" id="email"
                                                    required="required">


                                            </div>
                                            <div class="form_sub_items my-2">

                                                <input type="password" name="password" size="20" maxlength="20"
                                                    placeholder="Password" class="rounded-pill my-2" id="pass"
                                                    required="required">

                                            </div>

                                            <div class="form_sub_items text-center">

                                                <div class="login_btn my-3 "><button type="submit"
                                                        class="butnn log_in fw-bold w-100">LOGIN</button></div>

                                            </div>
                                            <div class="form_sub_items my-2">



                                                <span class="mx-3"><span for="Rememberme" class="ps_hover">Remember
                                                        Me</span><input type="checkbox" id="Rememberme"
                                                        name="Rememberme" value="Rememberme"></span>

                                                <div class="ps_hover" href="#">? Forgot Password</div>
                                                <div class="register">Don't Have account? <span
                                                        class="ps_hover fw-bold"><a href="register.php">Sign Up</a>
                                                    </span></div>


                                            </div>

                                        </div>


                                    </form>

                                </div>

                            </section>


                            <!-- form section ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- form ends here -->

        <!-- footer starts here -->
        <br><br>
        <br><br>
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