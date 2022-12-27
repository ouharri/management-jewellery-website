<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once VIEWS . 'component/metadata.php' ?>

    <title>Lodge</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= url('css/bootstrap.css') ?>"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap"
          rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= url('css/style.css') ?>" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="<?= url('css/responsive.css') ?>" rel="stylesheet"/>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body class="sub_page">

<div class="hero_area">
    <?php include_once VIEWS . 'component/header.php' ?>
</div>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?= url('product') ?>" style="color: #f5e80b"><i
                                            class='bx bx-left-arrow-alt'></i> back</a>
                            </div>
                            <div class="text-center p-4">
                                <img width="250" id="main-image"
                                     src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['img']); ?>"
                                     alt="product image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="mt-4 mb-3"><span class="text-uppercase text-muted brand">Bijo</span>
                                <h5 class="text-uppercase"><?= $product['name'] ?></h5>
                            </div>
                            <p class="about"><?= $product['description'] ?></p>
                            <div class="cart mt-4 align-items-center">
                                <button class="btn btn-warning text-uppercase mr-2 px-4">Add to cart</button>
                                <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer section -->
<?php include_once VIEWS . 'component/footer.php' ?>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>