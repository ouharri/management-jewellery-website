<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once VIEWS . 'component/metadata.php' ?>

    <title>Lodge</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap"
          rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <link href="../css/css.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>
    <!--  font awesome icon-->
    <script src="https://kit.fontawesome.com/3d582d9974.js" crossorigin="anonymous"></script>
</head>

<body>

<section style="padding: 4em 0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(../images/loginImg.jpg);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign In</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#"
                                       class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                    <a href="#"
                                       class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form action="<?= url('login/connect') ?>" class="signin-form" method="post">
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    <?= $error ?>
                                </div>
                                <?php unset($error); endif; ?>
                            <div class="form-group">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="user" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                           required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In
                                    </button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                        </form>
                        <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
