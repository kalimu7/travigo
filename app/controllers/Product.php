<?php

require_once '../app/core/Controller.php';
class Product extends Controller{

    public function productForm(){
        // $msg= "pleqse fill out the form";
        $this->view("home/add");
    }

    public function addProduct(){
       
        if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
            header('location: '.BASE_URL.'product/productform');
            exit;
        }
        
        $image = $_FILES['image']['name'];
        $imagetmp = $_FILES['image']['tmp_name'];
        $Folder = '../public/assets/'.$image;
       
        $destination = $_POST['dest'];
        $description = $_POST['desc'];
        $price = $_POST['price'];
        if(empty($destination) || empty($description) || empty($price) || empty($image) ){
            $msg = 'please fill out all the inputs';
            $this->view("home/add",['msg' => $msg ]);
            exit();
        }
        move_uploaded_file($imagetmp,$Folder);
        
        $model = $this->model('ProductModel');
        $model->insert($destination,$description,$price,$image);
        //header('location: '.BASE_URL.'product/productform');
        $msg = 'new destination added succefully';
        $this->view("home/add",['message' => $msg ]);

    }

}