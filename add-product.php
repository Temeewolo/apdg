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
            </a></div>
    </nav>
    <div class="container mt-4">
        <div id="product">
            <h2 class="text-center mt-4">Mettre a jour le menu</h2>
            <div class="container mt-3">
                <form method="post" id="formproduct">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" name="productName" id="productName">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Ajouter une description</label>
                        <input type="text" class="form-control" name="productDescription" id="productDescription">
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Prix (en fcfa)</label>
                        <input type="number" class="form-control" name="productPrice" id="productPrice">
                    </div>
                    <div class="mb-3">
                        <label for="productPicture" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="productPicture" id="productPicture">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
    <?php include './Components/navbar.html' ?>
</body>
<script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="./Controllers/app-add-product/js/app-add-product.js"></script>

</html>