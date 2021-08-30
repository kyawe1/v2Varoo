<?php
    error_reporting(E_ALL);
    include_once "autoloader.php";
    session_start();
    $route=[
        "/home"=>"HomeController@index",
        "/about"=>"HomeController@about",
        "/showroom"=>"ProductController@showroom",
        '/interested'=> "InterestedController@all",
        '/login'=>'LoginController@login',
        '/register'=>'RegisterController@register',
        '/login_process'=> 'LoginController@login_process',
        '/logout'=>'LogoutController@logout',
        '/detail'=> 'ProductController@reterive',
        '/find'=> 'ProductController@find',
        '/interested/add' => "InterestedController@create",
        '/interested/delete'=>"InterestedController@delete"
    ];
    // print_r($_SERVER);
    // print_r($_SERVER['PATH_INFO']);
    if (array_key_exists($_SERVER['PATH_INFO'],$route)){
        $temp= explode('@',$route[$_SERVER['PATH_INFO']]);
        $h=$temp[0];
        $n=$temp[1];
        $c=new $h();
        $c->$n();
    }