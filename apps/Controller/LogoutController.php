<?php
    class LogoutController
    {
        function logout(){
            if (!Authenticate::checklogin()) {
                header('location : /home', response_code: 302);
            }
            Authenticate::logout();
            header('location : /home',response_code:302);
        }
    }

?>