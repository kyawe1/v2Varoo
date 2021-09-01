<?php
    class ProfileController{
        function profile(){
            $user=Authenticate::get_user();
            include_once 'apps/View/Profile.view.php';
        }
    }
?>