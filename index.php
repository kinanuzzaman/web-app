<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container shadow">
        <header class="row sticky-top bg-light shadow p-2">
            <h1 class="col-8 mt-2">Product List</h1>

            <div class="col-4 mt-3">
                <a href="addProduct.php" class="btn btn-primary" id="ADD">ADD</a>
                <button type="submit" class="btn btn-danger" id="delete-product-btn" name="delete-product-btn" form="delete-product-form">MASS DELETE</button>
            </div>
        </header>
        <hr />
        <section>
            <form action="mulDelete.php" method="POST" id="delete-product-form">
                <div class="row  ">
                    <?php
                    include 'autoLoader.php';
                    $product = new ProductList();
                    $product->getProducts();
                    foreach ($product->result as $row) {
                    ?> <div class="col-sm-3 mb-3 ">
                            <div class="shadow">
                                <div class="card-body ">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="delete-checkbox form-check-input " name="prod_del_id[]" value="<?= $row["id"]; ?>">
                                        <p><?php echo $row['sku']; ?></p>
                                        <p><?php echo $row['name']; ?></p>
                                        <p><?php echo '$' . $row['price']; ?></p>
                                        <p>
                                            <?php
                                            $ProductType = new $row['type']();
                                            $ProductType->display($row['size'], $row['weight'], $row['height'], $row['width'], $row['length']);
                                            ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }

                    ?>
                </div>

            </form>
        </section>
        <footer class="p-2">
            <hr />
            <p class="d-flex justify-content-center">Scandiweb Test assignment</p>
        </footer>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</body>

</html>