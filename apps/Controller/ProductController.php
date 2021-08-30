<?php
    class ProductController{
        function showroom(){
            $ans=Change::ass_to_obj_arr(Manager::all("product"),'product');
            include_once('apps/View/showroom.view.php');
        }
        function create(){
            
        }
        function update(){

        }
        function delete(){

        }
        function find(){
            if (isset($_GET['name'])) {
                $id = $_GET['name'];
                $ans = Change::ass_to_obj_arr(Manager::filter('product', 'name', $id), 'product');
                include_once('apps/View/showroom.view.php');
            }
            else  if (isset($_GET['type'])){
                $id = $_GET['type'];
                $ans = Change::ass_to_obj_arr(Manager::filter('product', 'type', $id), 'product');
                include_once('apps/View/showroom.view.php');
            } 
            else  if (isset($_GET['saletype'])) {
                $id = $_GET['saletype'];
                $ans = Change::ass_to_obj_arr(Manager::filter('product', 'saletype', $id), 'product');
                include_once('apps/View/showroom.view.php');
            } 
            else{
                header('location : /home', response_code: 302); 
            }  
            
        }
        function reterive(){
            if(!isset($_GET['product_id'])){
            header('location : /home', response_code: 302);
            }
            
            $id = (int)$_GET['product_id'];
            $ans=Change::Change_User_Obj(Manager::get('product', 'id', $id), 'product');
            include_once('apps/View/detail.view.php');
        }
    }

?>