<?php

    require '../app/core/connection.php';
   
    class ProductModel extends Connection{
        public function insert($destination,$description,$price,$image){
            $check = mysqli_query($this->connect(),"INSERT INTO `travel` (`id`, `destination`, `price`, `description`, `image`) VALUES ('', '$destination', '$price', '$description', '$image')");
            
        }
        public function set($destination,$description,$price,$image,$id){
            $setter = mysqli_query($this->connect(),"UPDATE `travel` SET `destination`='$destination',`price`='$price',`description`='$description',`image`='$image' WHERE `id`=$id ");
        }
        public function itemstoupdate($id){
            $q = mysqli_query($this->connect(),"SELECT *FROM travel WHERE id = $id");
            return $q;
        }
        public function fetch(){
            $fetchdata = mysqli_query($this->connect(),"SELECT *FROM travel");
            $makeitassoc = mysqli_fetch_assoc($fetchdata);
            return $fetchdata;
        }
    }

    
?>