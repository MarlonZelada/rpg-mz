<?php

class HomeController
{

    public function __construct()
    {
    }

    public function index()
    {
        require_once 'views/index.php';
    }
}
