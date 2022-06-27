<?php

class Book extends Product
{
    public function dimension($size, $weight, $height, $width, $length)
    {
        $_POST['size'] = NULL;
        $_POST['height'] = NULL;
        $_POST['width'] = NULL;
        $_POST['length'] = NULL;
    }
    private $weight;
    public function display($size, $weight, $height, $width, $length)
    {
        $this->weight = $weight;
        echo 'Weight:' . $this->weight . 'KG';
    }
}

?>