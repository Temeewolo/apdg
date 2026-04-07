<?php include "./Controllers/product-list/php/product-list.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Articles - Style Vinted</title>
    <link href="./bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-light bg-success border-bottom sticky-top">
        <?php include './Components/sidebar.html' ?>
        <div class="container d-flex justify-content-between"><a class="navbar-brand fs-4 fw-bold">Au Plaisir du Gout
            </a><input class="form-control w-50" placeholder="Rechercher des articles..." /></div>
            <?php include './Components/btn-cart.html' ?>
    </nav>
    <div class="container mt-4">
        <div class="row g-3">
            <?php while ($result = mysqli_fetch_assoc($query)) {
                $nom_produit = $result['nom_p'];
                $prix_produit = $result['prix'];
                $id_produit = $result['id'];
            ?>
                <div class="col-6 col-md-4 col-lg-3 position-relative">
                    <a href="produit.php" class="text-decoration-none text-dark">
                        <div class="card shadow-sm">
                            <img src="./img/wallpaper1.jpg" class="card-img-top" style="height: 300px;">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $nom_produit ?></h6>
                                <p class="fw-bold"><?php echo $prix_produit ?> fcfa</p>
                            </div>
                        </div>
                    </a>
                    <button class="position-absolute" onclick="add(<?php echo $id_produit ?>)" style="bottom: 20px;right:20px;border-radius:50%;">
                        <i class="bi bi-cart-plus"></i>
                        <div class="badge bg-danger position-absolute"  id="product<?php echo $id_produit ?>" style="border-radius: 50%;bottom: -10px;right:-10px;"></div>
                    </button>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include './Components/modal-cart.html' ?>
    <?php include './Components/navbar.html' ?>
</body>
<script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="./Controllers/product-list/js/product-list.js"></script>

</html>