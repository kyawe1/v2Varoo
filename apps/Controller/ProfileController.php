<?php
    class ProfileController{
        function profile(){
            Authenticate::checklogin();
            $user=Authenticate::get_user();
            include_once 'apps/View/Profile.view.php';
        }
    }
?>