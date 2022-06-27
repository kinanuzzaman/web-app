<?php

class DVD extends Product 
{
    public function dimension($size,$weight,$height,$width,$length) 
    {
        $_POST['weight'] = NULL;
        $_POST['height'] = NULL;
        $_POST['width'] = NULL;
        $_POST['length'] = NULL; 
    }
    private   $size ;
    public function display($size,$weight,$height,$width,$length) 
    {
        $this->size = $size;
        echo 'Size:'.$this->size.'MB';
    }
}

?>