<?php
    class InterestedController{
        function all(){
            Authenticate::login_required();
            $array=Change::ass_to_interested_arr(Manager::filter('interest','u_id',(int) $_SESSION['user']->id),'interested');
            //print_r($array);
            include_once "apps/View/Interested.view.php";
        }
        function create(){
            Authenticate::login_required();
            if(isset($_GET['product_id']))
            {
                $user=Authenticate::get_user();
                $a=['p_id'=> (int)$_GET['product_id'],'u_id'=>$user->id];
                $result=Manager::create('interest',$a);
                if($result){
                    $user->get_products();
                    header('location : /showroom',response_code:302);
                }
                else{
                    header('location : /home',response_code:302);
                }
            }
        }
        function delete(){
            if (isset($_GET['interested_id'])) {
                $result = Manager::delete('interest', 'id',(int) $_GET['interested_id']);
                if ($result) {
                    Authenticate::get_user()->get_products();
                    header('location : /showroom', response_code: 302);
                } else {
                    header('location : /home', response_code: 302);
                }
            }
        }
    }



