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
        <header class="row ">
            <h1 class="col-8 mt-2">Product Add</h1>

            <div class="col-4 mt-3">
                <button type="submit" id="submit" name="submit" form="product_form" class="btn btn-success">Save</button>

                <a href="index.php"> <button class="btn btn-danger">Cancel</button></a>

            </div>
        </header>
        <hr />
        <section class="d-flex justify-content-center">
            <form id="product_form" action="productInput.php" method="POST">
                <div class="shadow-sm p-5">
                    <div class="row">
                        <label for="" class="col-sm-3 col-form-label">SKU</label>
                        <div class="col-sm-9">
                            <input type="text" id="sku" name="sku" class="form-control">
                            <span id="errorSku" style="display: none" class="text-danger error"></span>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <label for="" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" class="form-control">
                            <span id="errorName" style="display: none" class="text-danger error"></span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-sm-3 col-form-label">Price($)</label>
                        <div class="col-sm-9">
                            <input type="text" id="price" name="price" class="form-control">
                            <span id="errorPrice" style="display: none" class="text-danger error"></span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <label for="" class="col-sm-6 col-form-label">Type Switcher</label>
                       
                        <select name="type" id="productType" class="mt-3 col-sm-6 form-control">
                            <option selected disabled value="">Type switcher</option>
                            <option value="DVD">DVD</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Book">Book</option>

                        </select>
                        <span id="errorType" style="display: none" class="text-danger error"></span>

                    </div>

                    <div id="DVD" class="dynamic mt-3">
                        <div>
                            <h6>Please provide size in megabyte</h6>
                            <label for="">Size(MB)</label>
                            <input type="text" id="size" name="size">
                            <span id="errorSize" style="display: none" class="text-danger error"></span>
                        </div>
                    </div>
                    <div id="Book" class="dynamic  mt-3">
                        <div>
                            <h6>Please provide weight in kilogram</h6>
                            <label for="">Weight(KG)</label>
                            <input type="text" id="weight" name="weight">
                            <span id="errorWeight" style="display: none" class="text-danger error"></span>
                        </div>

                    </div>
                    <div id="Furniture" class="dynamic mt-3">
                        <div>
                            <h6>Please provide height in centimeter</h6>
                            <label for="">Height(CM)</label>
                            <input type="text" id="height" name="height">
                            <span id="errorHeight" style="display: none" class="text-danger error"></span>

                        </div>
                        <div class="mt-3">
                            <h6>Please provide width in centimeter</h6>
                            <label for="">Width(CM)</label>
                            <input type="text" id="width" name="width">
                            <span id="errorWidth" style="display: none" class="text-danger error"></span>

                        </div>
                        <div class="mt-3">
                            <h6>Please provide length in centimeter</h6>
                            <label for="">Length(CM)</label>
                            <input type="text" id="length" name="length">
                            <span id="errorLength" style="display: none" class="text-danger error"></span>

                        </div>
                    </div>


            </form>
        </section>
        <hr />
        <footer class="d-flex justify-content-center ">
            <p>Scandiweb Test assignment</p>
        </footer>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>
</body>

</html>