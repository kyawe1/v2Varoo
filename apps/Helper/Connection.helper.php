<?php
    class Connection{
        static function get_connection(){
            try{
                return (new mysqli('localhost','root','kyaw','lotayarealestate',3306)) ?? throw new Exception("bla bla bla");
            }catch(Exception $e){
                header('location : /home',response_code:302);
            }
            
        }
    }
?>