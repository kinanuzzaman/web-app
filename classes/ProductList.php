<?php

class ProductList extends Dbcon 
{
    public function setProduct($sku,$name,$price,$type,$size,$weight,$height,$width,$length)
    {

        $data = array(
            ':sku' => $sku,
            ':name' => $name,
            ':price' =>  $price,
            ':type' =>  $type,
            ':size' =>  $size,
            ':weight' =>  $weight,
            ':height' => $height,
            ':width' =>  $width,
            ':length' =>  $length
        );
        $sql = "INSERT INTO products (sku,name,price,type,size,weight,height,width,length) 
        VALUES (:sku,:name,:price,:type,:size,:weight,:height,:width,:length)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($data);
        json_encode($data);
    }

    public $result;
    public function getProducts() 
    {
        $sql = "SELECT * FROM products";
        //$stmt = $this->connect()->query($sql);   
        $stmt = $this->connect()->prepare($sql);   
        $stmt->execute();
        $this->result = $stmt->fetchAll();
        //while($row = $stmt->fetch()) 
        return $this->result;
    }

    private $sku;
    public function skuCheck($sku)
    {
        $this->sku = $sku;
        $sql = "SELECT sku FROM products WHERE sku = ?" ;
        $stmt = $this->connect()->prepare($sql);
        if(!$stmt->execute(array($this->sku))) 
        {
          $stmt = null;
        }
        
        echo $stmt->rowCount();
        $resultcheck = false;
        if($stmt->rowCount() > 0)
        {
            $resultcheck = false ;
        }else{
            $resultcheck = true ;
        }
        return $resultcheck;
    }  
}

?>