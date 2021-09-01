<?php

    class SuperUserController{
        function home(){
            include_once "apps/View/Admin.view.php";
        }
        function freeze(){
            $i=1;
            $array=Manager::filter('user','role','normal');
            $array=Change::ass_to_obj_arr($array,'user');
            include_once "apps/View/UserList.view.php";
        }
        function freeze_process(){
            if ($_POST['user_id']){
                # process for freeze and delete

                Authenticate::checklogin();
                $user=Authenticate::get_user();
                Authenticate::admin_gate($user);
                 if (isset($_POST['user_id'])) {
                $result = Manager::update('user', 'id',(int) $_POST['user_id']);
                if ($result) {
                    Authenticate::get_user()->get_products();
                    header('location : /admin/home', response_code: 302);
                } else {
                    header('location : /home', response_code: 302);
                }
            }

            }
        }
        function delete_process(){
            if ($_POST['user_id']){
                # process for freeze and delete
                Authenticate::checklogin();
                $user=Authenticate::get_user();
                Authenticate::admin_gate($user);
                 if (isset($_POST['user_id'])) {
                $result = Manager::delete('user', 'id',(int) $_POST['user_id']);
                if ($result) {
                    Authenticate::get_user()->get_products();
                    header('location : /admin/home', response_code: 302);
                } else {
                    header('location : /home', response_code: 302);
                }
            }

            }
        }
    }
?>