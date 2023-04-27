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

      <br><br>

        <!-- form starts here -->
        <div class="sub_body_container">

            <div class="partition ms-5 ps-5">

                <div class="sub_partition  ms-5  my-1">

                    <div class="form_head">

                        <!-- <h2>Sign Up</h2> -->


                    </div>

                    <div class="form_sub_head">

                        Enter your Information

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

                        <label for="email">
                            Email
                        </label>

                        <input type="email" name="email" size="39" maxlength="20" placeholder="Email" id="email"
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
                            <input type="hidden" name="qty" value="<?php echo $_GET['qty']; ?>">
                            <input type="hidden" name="prod_ID" value="<?php echo $_GET['prod_ID']; ?>">
                            <input type="submit" name="withoutLogin" id="submit" value="Proceed to BUY">

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