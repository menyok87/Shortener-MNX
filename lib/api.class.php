<?php

class redirect
{
    public $url;


    public function __construct($url)
    {
        this->url = $url;
    }

    public function redirect(){
        header('location: '. $this->url.'');
        exit;
    }
}
?>