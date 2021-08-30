<?php
    class Connection{
        static function get_connection(){
            return new mysqli('localhost','root','kyaw','lotayarealestate',3306);
        }
    }
?>