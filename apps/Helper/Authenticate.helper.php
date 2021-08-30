<?php
    class Authenticate{
        function authenticate(string $username,string $password){
            session_regenerate_id(delete_old_session:true);
            $con=Connection::get_connection();
            $ans=$con->query("select * from user where username='{$username}' and password='{$password}';");
            if(is_bool($ans)){
                header('location : /login',response_code:500);
            }
            else{
                return $ans->fetch_object();
            }
        }
        static function checklogin(){
            if(isset($_SESSION['user'])){
                return true;
            }
            return false;
        }
        static function logon(User $user){
            print_r(get_class($user));
            if (get_class($user)=='User'){
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
    }
?>