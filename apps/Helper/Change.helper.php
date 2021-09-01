<?php
    class Change{
    static function Change_User_Obj(mixed $a,string $tablename)
    {   
        $classname= ucfirst($tablename);
        $obj = new $classname();
        foreach ($a as $key => $value) {
            $obj->$key = $value;
        }
        return $obj;
    }
    static function ass_to_obj_arr(mixed $arr, string $tablename)
    {
        $classname = ucfirst($tablename);
        $op=[];
        foreach ($arr as $a){
        $obj = new $classname();
        foreach ($a as $key => $value) {
            $obj->$key = $value;
        }
        array_push($op,$obj);
    }
        return $op;
    }
    static function ass_to_interested_arr(mixed $arr, string $tablename)
    {
        $classname = ucfirst($tablename);
        $op = [];
        foreach ($arr as $a) {
            $obj = new $classname();
            foreach ($a as $key => $value) {
                $obj->$key = $value;
            }
            $obj->get_product();
            array_push($op, $obj);
        }
        return $op;
    }
    
    }
    
?>