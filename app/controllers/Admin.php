<?php  


require_once '../app/core/Controller.php';
    class Admin extends controller{



        
        public function crud(){
            $model =  $this->model('ProductModel');
            $assoc = $model->fetch();
            $this->view('home/dashboard',$assoc);
        }
        public function update($id){
            $upd = $this->model('ProductModel');
            $array = $upd->itemstoupdate($id);
            
            $this->view('home/update',['db' => $array]);
        }
        public function updateto($id){
            // $to = $this->model('ProductModel');
            // $too = $this->set($destination,$description,$price,$image,$id);
            echo 'hello world the id = '.$id;


        }
        

    }



?>