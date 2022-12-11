<?php  


require_once '../app/core/Controller.php';
    class Admin extends controller{



        
        public function crud(){
            $model =  $this->model('ProductModel');
            $assoc = $model->fetch();
            $this->view('home/dashboard',$assoc);
            
        }

    }



?>