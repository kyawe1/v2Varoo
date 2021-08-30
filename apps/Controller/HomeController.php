<?php
    class HomeController{
        function index(){
            include_once "apps/View/home.view.php";
        }
        function about(){
            include_once "apps/View/about.view.php";
        }
    }