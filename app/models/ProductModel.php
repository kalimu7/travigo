<?php

    require '../app/core/connection.php';
   
    class ProductModel extends Connection{
        
        public function insert($destination,$description,$price,$image){
            $con  = $this->connect();
            // $check = mysqli_query($this->connect(),"INSERT INTO `travel` (`id`, `destination`, `price`, `description`, `image`) VALUES ('', '$destination', '$price', '$description', '$image')");
            $stm = $con->prepare("INSERT INTO travel (`destination`, `price`, `description`, `image`) VALUES (?,?,?,?)");
            $stm->bind_param("ssss",$destination, $price, $description, $image);
            $stm->execute();
            $stm->close();
        }
        public function set($destination,$description,$price,$image,$id){
            $setter = mysqli_query($this->connect(),"UPDATE `travel` SET `destination`='$destination',`price`='$price',`description`='$description',`image`='$image' WHERE `id`=$id ");
        }
        public function setimage($destination,$description,$price,$id){
            $setter = mysqli_query($this->connect(),"UPDATE `travel` SET `destination`='$destination',`price`='$price',`description`='$description' WHERE `id`=$id ");
        }
        public function itemstoupdate($id){
            $q = mysqli_query($this->connect(),"SELECT *FROM travel WHERE id = $id");
            return $q;
        }
        public function fetch(){
            $fetchdata = mysqli_query($this->connect(),"SELECT *FROM travel");
            // $makeitassoc = mysqli_fetch_assoc($fetchdata);
            return $fetchdata;
        }
        public function delete($id){
            mysqli_query($this->connect(),"DELETE FROM travel WHERE id = $id");
        }
    }

    
?>