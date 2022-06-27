<?php

class ProductConstr extends ProductList
{

    private   $sku ;
    private   $name ;
    private   $price;
    private   $type ;
    private   $size ;
    private   $weight;
    private   $height;
    private   $width;
    private   $length;
    
    public function __construct($sku,$name,$price,$type,$size,$weight,$height,$width,$length) 
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
  
    Public function Product() 
    {
        if(empty($this->sku) || empty($this->name) || empty($this->price) || empty($this->type))
        {
            exit();
        }
        if($this->skuCheck($this->sku) == false)
        {
            exit();
        }
        $this->setProduct( $this->sku, $this->name,$this->price, $this->type,$this->size,$this->weight,$this->height,$this->width,$this->length);
         
    } 
    

     
}

?>