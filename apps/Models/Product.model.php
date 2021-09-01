<?php
    class Product{
        public string $name;
        public string $type;
        public string $price;
        public string $numberofrooms;
        public string $numberofbathroom;
        public bool $funitureready;
        public string $address;    
        public string $sale_type;
        public string $id;
        public string|null $coverphoto;
        public function get_photo(){
            return "apps/media/{$this->name}/coverphoto.jpg";
        }
    }
    ?>