<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once VIEWS . 'component/metadata.php' ?>

    <title>Lodge</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= BURL ?>css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap"
          rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= BURL ?>css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="<?= BURL ?>css/responsive.css" rel="stylesheet"/>
    <!--    box icon link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="sub_page">

<div class="hero_area">
    <?php include_once VIEWS . 'component/header.php' ?>
</div>

<h1 class="text-center  mt-5 mb-2 py-3">Edite Product </h1>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <?php if (isset($success)): ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
            <?php endif; ?>

            <form class="p-5 border mb-5" method="POST" action="<?php url('admin/update/' . $row['id']); ?>"
                  enctype="multipart/form-data">
                <a href="<?= url('admin/index') ?>" style="color: #f5e47b"><i class='bx bx-left-arrow-alt'></i> back</a>
                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" required name="name" class="form-control" id="name" value="<?= $row['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" required class="form-control" name="price" id="price"
                           value="<?= $row['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" required class="form-control" name="description" id="description"
                           value="<?= $row['description'] ?>">
                </div>
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="number" required class="form-control" name="qty" id="qty" value="<?= $row['qty'] ?>">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image"
                                   accept="image/png, image/jpg, image/gif, image/jpeg">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <img class="img-thumbnail ml-2" style="height: 40px; aspect-ratio: 1; object-fit: cover;"
                             src="data:image/jpg;charset=utf8;base64,<?= base64_encode($row['img']) ?>"
                             alt="product image">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-warning mt-3">Modifier</button>
            </form>
        </div>
    </div>
</div>

<!-- footer section -->
<?php include_once VIEWS . 'component/footer.php' ?>

<script type="text/javascript" src="<?= BURL ?>js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?= BURL ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?= BURL ?>js/custom.js"></script>

</body>

</html>