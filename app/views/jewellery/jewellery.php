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
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>
</head>

<body class="sub_page">

<div class="hero_area">
    <?php include_once VIEWS . 'component/header.php' ?>
</div>

<!-- item section -->

<div class="item_section layout_padding2">
    <div class="container">
        <div class="item_container">
            <div class="box">
                <div class="price">
                    <h6>
                        Best PRICE
                    </h6>
                </div>
                <div class="img-box">
                    <img src="images/i-1.png" alt="">
                </div>
                <div class="name">
                    <h5>
                        Bracelet
                    </h5>
                </div>
            </div>
            <div class="box">
                <div class="price">
                    <h6>
                        Best PRICE
                    </h6>
                </div>
                <div class="img-box">
                    <img src="images/i-2.png" alt="">
                </div>
                <div class="name">
                    <h5>
                        Ring
                    </h5>
                </div>
            </div>
            <div class="box">
                <div class="price">
                    <h6>
                        Best PRICE
                    </h6>
                </div>
                <div class="img-box">
                    <img src="images/i-3.png" alt="">
                </div>
                <div class="name">
                    <h5>
                        Earings
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end item section -->


<!-- price section -->

<section class="price_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Our Jewellery Price
            </h2>
        </div>
        <div class="price_container">
            <?php foreach ($products as $row) : ?>
            <div class="box">
                <div class="name">
                    <h6>
                        <?=$row['name']?>
                    </h6>
                </div>
                <div class="img-box">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" alt="product image">
                </div>
                <div class="detail-box">
                    <h5>
                        <span><?=$row['price']?></span>DH
                    </h5>
                    <h6>
                        <span><?=$row['description']?></span>
                    </h6>
                    <a href="">
                        Buy Now
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="price_btn">
                See More
            </a>
        </div>
    </div>
</section>

<!-- footer section -->
<?php include_once VIEWS . 'component/footer.php' ?>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>