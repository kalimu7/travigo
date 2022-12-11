<?php
    
    class Connection {
        public $servername ;
        public $username;
        public $password;
        public $dbname;
        
         protected function connect(){
             $this->servername="localhost";
             $this->username="root";
             $this->password="";
             $this->dbname="testoop";
             $conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname); 
             return $conn; 
         }

        }

?>