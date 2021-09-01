<?php
    class ProductController{
        function showroom(){
            $array=Change::ass_to_obj_arr(Manager::all("product"),'product');
            if (Authenticate::checklogin()){
                $user=Authenticate::get_user();
            }
            include_once('apps/View/showroom.view.php');
        }
        function create(){
            Authenticate::login_required();
            Authenticate::admin_gate(Authenticate::get_user());
        
            include_once "apps/View/CreateHouse.view.php";

        }
        function update(){

        }
        function delete(){
            Authenticate::login_required();
            Authenticate::admin_gate(Authenticate::get_user()); 
                        if (isset($_POST['product_id'])) {
                            $result = Manager::delete('product', 'id',(int) $_POST['product_id']);
                            if ($result) {
                                Authenticate::get_user()->get_products();
                                header('location : /home/list', response_code: 302);
                            } else {
                                header('location : /admin/home', response_code: 302);
                            }
                        }
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
        function create_process(){
            Authenticate::login_required();
            Authenticate::admin_gate(Authenticate::get_user());
            // var_dump($_FILES);
            if (isset($_POST['name']) &&  isset($_POST['type']) && isset($_POST['price']) && isset($_POST['numberofrooms']) &&  isset($_POST['numberofbathroom']) && isset($_POST['funitureready']) && isset($_POST['address']) && isset($_POST['sale_type']) ) {
            $validate = $_POST;
            $validate['price']=(int) $validate['price'];
            $validate['numberofrooms']=(int) $validate['numberofrooms'];
            $validate['numberofbedroom']=(int) $validate['numberofbathroom'];
            $validate['coverphoto']="coverphoto.jpg";
            unset($validate['numberofbathroom']);
            mkdir('apps/media/'.$validate['name']);
            move_uploaded_file($_FILES['coverphoto']['tmp_name'],"apps/media/{$validate['name']}/coverphoto.jpg");
            unset($validate['funitureready']);
            $va = Manager::create('product', $validate);
            var_dump($va);
            // if ($va) {
            //     header('location : /admin/home', response_code: 302);
            // }
            // else {
            //     header('location : /create/product', response_code: 302);
            // }
        }
        }
    }

?>