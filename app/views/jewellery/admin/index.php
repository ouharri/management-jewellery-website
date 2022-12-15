<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once VIEWS . 'component/metadata.php' ?>

    <title>Lodge</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css?v=<?php echo time(); ?>" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
    <!--    box icon link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="sub_page">

    <div class="hero_area">
        <?php include_once VIEWS . 'component/header.php' ?>
    </div>

    <h1 class="text-center  my-5 py-3">View All Products </h1>

    <div class="container w-100">
        <div class="row">
            <div class="col-10 mx-auto pt-4 border mb-5 overflow-auto">
                <div class="float-left mb-3">
                    <a class="btn btn-warning d-flex align-items-center" href="<?=url('admin/add')?>" style="background-color: #fbb534e47b !important;""><i class='bx bx-plus-circle mr-1'></i> | add</a>
                </div>
                <?php if (isset($success)) : ?>
                    <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
                <?php endif; ?>
                <?php if (isset($error)) : ?>
                    <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
                <?php endif; ?>
                <table class="table">
                    <thead class="thead" style="background-color: #f5e47b;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($products as $row) : ?>
                            <tr>
                                <td> <?php echo $i; $i++; ?></td>
                                <td>
                                    <img class="img-thumbnail" style="height: 50px; aspect-ratio: 1; object-fit: cover;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" alt="product image">
                                </td>
                                <td><?=$row['name']?></td>
                                <td><?php echo $row['price'];?>&nbspDH</td>
                                <td class="text-center"><?php echo $row['description']; ?></td>
                                <td><?php echo $row['qty']; ?></td>
                                <td>
                                    <a href="<?php url('admin/edit/' . $row['id']) ?>" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php url('admin/delete/' . $row['id']) ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- footer section -->
    <?php include_once VIEWS . 'component/footer.php' ?>

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>

</body>

</html>