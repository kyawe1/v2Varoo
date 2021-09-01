<?php
    class User{
        public int $id;
        public string $username;
        public string|null $email;
        public string $password;
        // public string $address;
        // public string $phno;
        public string $is_active;
        public bool $is_activate;
        // public string $slug_field;
        public array $products;
        public string $role;
        public function get_products()
        {
            $arr=[];
            $temp = Change::ass_to_interested_arr(Manager::filter('interest', 'u_id', (int) $this->id), 'interested');
            foreach ($temp as $a){
                $obj=Change::Change_User_Obj(Manager::get('product','id',$a->p_id),'product');
                array_push($arr,$obj);
            }
            $this->products=$arr;
        }
        public static function crypt_password(string $password){
            return password_hash($password,PASSWORD_BCRYPT);
        }
        public function is_admin(){
            if ($this->role==='admin'){
                return true;
            }
            return false;
        }
    }
?>