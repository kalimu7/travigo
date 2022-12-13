<?php

    require_once '../app/core/Controller.php';
    class Home extends controller{
        public function index($name = ''){
            $user = $this-> model('User');
            $user->name=$name;
            
            $this->view('home/index',['name' => $user->name]);
            
        }
        public function about(){
            $this->view('home/about');
        }
        public function contact(){
            $this->view('home/contactus');
        }
        public function tour(){
            $model =  $this->model('ProductModel');
            $assoc = $model->fetch();
            $this->view('home/tours',$assoc);
        }
        
    } 

?>