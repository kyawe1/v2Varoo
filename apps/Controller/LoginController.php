<?php
    class LoginController{
        function login(){
            if(Authenticate::checklogin()){
                
                header('location : /home',response_code:302);
            }else{
                
            include_once("apps/View/login.view.php");
            }
        }
        function login_process(){
            $n = new Authenticate();
            $nn =Change::Change_User_Obj($n->authenticate($_POST['username'], $_POST['password']), 'user');
            print_r($nn);
            Authenticate::logon($nn);
            header('location : /home',response_code:302);
        }
    }
?>