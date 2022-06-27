<?php
include 'autoLoader.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $ProductType = new $_POST['type']();
    $ProductType->dimension($_POST['size'],$_POST['weight'],$_POST['height'],$_POST['width'],$_POST['length']);
  
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length']; 
}
    
$add = new ProductConstr($sku,$name,$price,$type,$size,$weight,$height,$width,$length);
$add->Product();
  
//header("location: index.php");
?>