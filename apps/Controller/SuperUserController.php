<?php

    class SuperUserController{
        function home(){
            try{
            Authenticate::login_required();
            Authenticate::checklogin();
            $user=Authenticate::get_user();
            if(Authenticate::admin_gate($user)){
                include_once "apps/View/Admin.view.php";
            }
            else{
                throw new \Exception();
            }
        }catch(\Exception $e){
            include_once "apps/View/NotAllowed.view.php";
        }
        }
        function freeze(){
            try{
            Authenticate::login_required();
            Authenticate::checklogin();
            $user=Authenticate::get_user();
            if(Authenticate::admin_gate($user)){
                $i=1;
                $array=Manager::filter('user','role','normal');
                $array=Change::ass_to_obj_arr($array,'user');
                include_once "apps/View/UserList.view.php";
            }
            else{
                throw new \Exception();
            }
        }
            catch(\Exception $e){
                include_once "apps/View/NotAllowed.view.php";
            }
           
        }
        function freeze_process(){
            try{
            if ($_POST['user_id']){
                # process for freeze and delete
                Authenticate::login_required();
                Authenticate::checklogin();
                $user=Authenticate::get_user();
                if(Authenticate::admin_gate($user)){
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
                 else{
                     throw new \Exception();
                 }}
                } catch(\Exception $e){
                    include_once "apps/View/NotAllowed.view.php";
                }

            
        }
        function delete_process(){
            try{
            if ($_POST['user_id']){
                # process for freeze and delete
                Authenticate::login_required();
                Authenticate::checklogin();
                $user=Authenticate::get_user();
                if(Authenticate::admin_gate($user)){
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
            else{
                throw new \Exception();
            }
        }}
            catch(\Exception $e){
                include_once "apps/View/NotAllowed.view.php";
            

            }
        }
    }
?>