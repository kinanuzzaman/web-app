<?php
include 'autoLoader.php';

$dbc = new Dbcon();
$dbc->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
    if( empty($allId)){
        header("location: index.php");
    }
    $allId = $_POST['prod_del_id'];

   

    $extractId = implode(',',$allId);
  
    $sql = "DELETE FROM products WHERE id IN ($extractId)";
    $stmt = $dbc->connect()->query($sql);
   
    
        header("location: index.php");
    
   }

?>