<?php

abstract class Product 
{
    abstract public function display($size,$weight,$height,$width,$length);
    abstract public function dimension($size,$weight,$height,$width,$length);
}

?>