<?php
require '../app/core/connection.php';
class User extends Connection{
    public $Name;
    public $password;

    public function check($name,$password){
        $users  = mysqli_query($this->connect(),"SELECT *FROM oopers WHERE name='$name' OR email='$name' ");
        $us = mysqli_fetch_assoc($users);
        if(mysqli_num_rows($users )>0){
            if($us['password'] == $password){
                return 1; //successfully;
            }else{
                return 2;//error;
            }
        }else{
            return 3;//now user with this name;
        }
        
    }
    
    

}