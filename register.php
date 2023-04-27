<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>THT | Register</title>
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

        <!-- header starts here -->
        <header>
            <!-- navigation bar starts here  -->
            <div class="">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" id="" aria-current="page" href="index.php"><img src="media/tht6.png"
                                alt="logo" width="80px" height="auto"></a>
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
                                        <li class="nav-item  ">
                                            <a class="btclr text-white nav-link active bt_nav_l" aria-current="page"
                                                href="../../index.html">Home</a>
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
                                            <a class="btclr text-white nav-link"
                                                href="../contact_us/contact.html">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="btclr text-white bt_nav_r nav-link" href="mycart.php">My Cart</a>
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

        <!-- form starts here -->
        <div class="sub_body_container">

            <div class="partition ms-5 ps-5">

                <div class="sub_partition  ms-5  my-1">

                    <div class="form_head">

                        <h2>Sign Up</h2>


                    </div>

                    <div class="form_sub_head">

                        Enter your Info to register

                    </div>


                    <form action="createNewCust.php" method="POST" autocomplete="off" id="log_in">

                        <div class="form_item">

                            <label for="name">
                                Name
                            </label>
                            <input type="text" name="name" size="39" maxlength="20" placeholder="Name" id="name"
                                required="required">
                        </div>

                        <div class="form_item">

                            <label for="address">
                                Address
                            </label>
                            <input type="text" name="address" size="39" maxlength="80" placeholder="Address"
                                id="address" required="required">
                        </div>
                        <div class="form_item">

                            <label for="contact">
                                Contact
                            </label>
                            <input type="number" name="phone" size="39" maxlength="11" placeholder="Contact"
                                id="contact" required="required">
                        </div>

                        <div class="form_item">

                            <label for="email">
                                Email
                            </label>

                            <input type="email" name="email" size="39" maxlength="20" placeholder="Email" id="email"
                                required="required">

                        </div>

                        <div class="form_item">

                            <label for="password">
                                Password

                            </label>

                            <input type="password" name="password" placeholder="Password" size="39" minlength="6"
                                maxlength="12" id="password" required="required">
                        </div>

                        <div class="form_item">

                            <input type="checkbox" name="tick" id="tick" value="I agree the Terms and Conditions">
                            <span id="under_take">I agree the <a href="Terms and Conditions"><b>Terms and
                                        Conditions</b></a></span>

                        </div>

                        <div class="form_item">

                            <input type="submit" name="submit" id="submit" value="SIGN UP">

                        </div>

                        <div class="form_item">

                            <span id="txt">Already have an account?</span><span id="text"><a href="login.php"> Sign In
                                </a></span>
                        </div>

                    </form>

                </div>

            </div>


        </div>

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