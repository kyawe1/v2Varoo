<?php

    class SuperUserController{
        function home(){
            include_once "apps/View/Admin.view.php";
        }
        function freeze(){
            $i=1;
            $array=Manager::filter('user','role','normal');
            // var_dump($array);
            $array=Change::ass_to_obj_arr($array,'user');
            include_once "apps/View/UserList.view.php";
        }
    }
?>