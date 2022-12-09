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
</head>

<body class="sub_page">

<div class="hero_area">
    <?php include_once VIEWS . 'component/header.php' ?>
</div>

<h1 class="text-center  mt-5 mb-2 py-3">Add New Product </h1>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <?php if (isset($success)): ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
            <?php endif; ?>

            <form class="p-5 border mb-5" method="POST" action="<?php url('admin/store'); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" required class="form-control" name="price" id="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" required class="form-control" name="description" id="description">
                </div>
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="number" required class="form-control" name="qty" id="qty">
                </div>
                <div class="form-group">
                    <label for="categorie">Categorie</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="categorie" name="categorie">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" accept="image/png, image/jpg, image/gif, image/jpeg" required>
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-warning mt-3">Ajouter</button>
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
