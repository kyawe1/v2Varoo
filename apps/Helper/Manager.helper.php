<?php
    
    class Manager{
        public static function create(string $tablename,mixed $a){
            $con=Connection::get_connection();
            $i=0;
            $front='';
            $back='';
            foreach ($a as $key=>$value){
                print_r($i);
                if ($i!=count($a)-1){
                    $front.=$key . ',';
                    if (is_string($value)){
                        $back .= '"'.$value.'"' . ',';
                    }
                    else if(is_bool($value)){
                        if($value){
                            $back .= 1 . ',';
                        }
                        else{
                            $back .=0 .',';
                        }
                    }
                    else if (is_int($value)){
                        $back.= $value . ',';
                    }
                    
                } 
                else{
                $front .= $key;
                if (is_string($value)) {
                    $back .= '"' . $value . '"'  ;
                } else if (is_bool($value)) {
                    if ($value) {
                        $back .= 1 ;
                    } else {
                        $back .= 0 ;
                    }
                } 
                else if (is_int($value)) {
                    $back .= $value ;
                }
                
                }
            $i++;
            }
            // print("insert  into {$tablename}({$front}) values({$back})");
            $query="insert  into {$tablename}({$front}) values({$back});";
            $result=$con->query($query);
            return $result;
            
            $con->close();
        }
        
        public static function update(string $tablename,mixed $a){
            $con = Connection::get_connection();
        $i = 0;
        $front = '';
        $back = '';
        foreach ($a as $key => $value) {
            if ($i != count($a) - 1) {
                $front = '"' . $key . '"' . ',';
                if (is_string($value)) {
                    $back = '"' . $value . '"' . ',';
                } else if (is_int($value)) {
                    $back = $value . ',';
                }
            } else {
                $front = $key;
                if (is_string($value)) {
                    $back = '"' . $value . '"';
                } else if (is_int($value)) {
                    $back = $value;
                }
            }
            $query = "update {$tablename} set $front where({$back});";
            $result = $con->query($query);
            return $result;
        }
            $con->close();
        }
        public static function delete($tablename,string $key,string|int $value){
            $con = Connection::get_connection();
            $result=$con->query("delete from {$tablename} where {$key}='{$value}';");
            $con->close();
            return $result;
        }
        public static function get(string $tablename,string $key,string $value){
            $con = Connection::get_connection();
            $result=$con->query("select * from {$tablename} where {$key}='{$value}';");
            $ans=$result->fetch_assoc();
            $con->close();
            return $ans;
        }
        public static function all(string $tablename){
            $con = Connection::get_connection();
            $result = $con->query("select * from {$tablename};");
            $ans = $result->fetch_all(MYSQLI_ASSOC);
            $con->close();
            return $ans;
        }
        public static function filter(string $tablename, string $key, string $value){
            $con = Connection::get_connection();
            $result = $con->query("select * from {$tablename} where {$key}='{$value}';");
            $ans = $result->fetch_all(MYSQLI_ASSOC);
            $con->close();
            return $ans;
        }
    }
?>