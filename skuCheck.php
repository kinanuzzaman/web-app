<?php
include 'autoLoader.php';

if(isset($_POST['sku']))
{
    $sku = $_POST['sku'];
    $check = new ProductList();
    $check->skuCheck($sku);
}

?>