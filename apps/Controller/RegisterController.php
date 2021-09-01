<?php 
    class RegisterController{
        function register(){
            include_once('apps/View/register.view.php');
        }
        function register_process(){
            if (isset($_POST['username']) &&  isset($_POST['password']) && isset($_POST['email'])){
                $validate = $_POST;
                $validate['is_active']=true;
                $validate['is_activate']=true;
                unset($validate['email']);
                unset($validate['repassword']);
                $validate['password']=User::crypt_password($validate['password']);
                $va=Manager::create('user',$validate);
                if($va){
                    header('location : /login', response_code: 302);
                }
                }else{
                    header('location : /register',response_code:302);
                }
            }
            
        
    }
?>