<?php
    class Interested{
        public int $id;
        public int $u_id;
        public int $p_id;
        public User $user;
        public Product $product;
        function get_user(){
            $this->user= Change::Change_User_Obj(Manager::get('user','id',$this->u_id),'user');
        }
        function get_product(){
            $this->product=Change::Change_User_Obj(Manager::get('product','id',$this->p_id),'product');
        }
    }
?>