<?php

    require '../app/core/connection.php';
   
    class ProductModel extends Connection{
        public function insert($destination,$description,$price,$image){
            $check = mysqli_query($this->connect(),"INSERT INTO `travel` (`id`, `destination`, `price`, `description`, `image`) VALUES ('', '$destination', '$description', '$price', '$image')");
            
        }
        public function fetch(){
            $fetchdata = mysqli_query($this->connect(),"SELECT *FROM travel");
            $makeitassoc = mysqli_fetch_assoc($fetchdata);
            return $fetchdata;
        }
    }

    
?>