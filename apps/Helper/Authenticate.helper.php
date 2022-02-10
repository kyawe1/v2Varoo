<?php
    class Authenticate{
        function authenticate(string $username,string $password){
            session_regenerate_id(delete_old_session:true);
            $con=Connection::get_connection();
            // $password=User::crypt_password(password:$password);
            $ans=$con->prepare("select * from user where username=? and password=?;");
            $ans->bind_param("ss",$username,$password);
            $ans->execute();
            $ans=$ans->get_result();
            $res=$ans->fetch_assoc();
            var_dump($res);
            if(!is_null($res) && $res){
                return $res;
            }
            else{
                header('location : /login',response_code:302); 
                
            }
                
            
        }
        static function checklogin(){
            if(isset($_SESSION['user'])){
                return true;
            }
            return false;
        }
        static function logon(User $user){
            if (get_class($user)=='User'){
                $user->get_products();
                var_dump($user);
                $_SESSION['user'] = $user;
            } 
            else{
                header('location : /home',response_code:403);
            }
        }
        static function logout(){
            session_destroy();
        }
        static function get_user(){
            if(self::checklogin()){
                return $_SESSION['user'];
            }
            return false;
        }
        static function login_required(){
            if (Authenticate::checklogin()){
                return ;
            }
            else {
                header('location : /login',response_code:302);
            }
        }
        static function admin_gate(User $user){
            if($user->is_admin()){
                return true;
            }
            // header('location : /login',response_code:500);
            return false;
        }
    }
?>