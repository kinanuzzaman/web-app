<?php

class Furniture extends Product 
{
    public function dimension($size,$weight,$height,$width,$length) 
    {
        $_POST['size'] = NULL;
        $_POST['weight'] = NULL;
    }
    private   $height;
    private   $width;
    private   $length;
    
    public function display($size,$weight,$height,$width,$length) 
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        echo 'Dimension: '.$this->height.'x'.$this->width.'x'.$this->length ;  
    }
}

?>