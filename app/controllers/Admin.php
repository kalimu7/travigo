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
            $to = $this->model('ProductModel');
            $destination = $_POST['dest'];
            $description = $_POST['desc'];
            $price = $_POST['price'];
            $image = $_FILES['image']['name'];
            $imagetmp = $_FILES['image']['tmp_name'];
            $Folder = '../public/assets/'.$image;
            if(empty($image)){
                $too = $to->setimage($destination,$description,$price,$id);

            }else{
                $too = $to->set($destination,$description,$price,$image,$id);
                move_uploaded_file($imagetmp,$Folder);   
            }
            header('Location:http://localhost/5th%20BRIEF/public/Admin/crud');
            // $too = $to->set($destination,$description,$price,$image,$id);
            // echo 'hello world the id = '.$id;
        }
        public function delete($id){
            $d = $this->model('ProductModel');
            $d->delete($id);
            header('Location:http://localhost/5th%20BRIEF/public/Admin/crud');
        }
        
        public function log(){
            $this->view('Home/login');
        }
        public function login(){
            if(isset($_POST['eden'])){
                $name = $_POST['naem'];
                $pass = $_POST['pass'];   
            }
                     
            $log = $this->model("User");
            $a = $log->check($name,$pass);
            if($a == 1){
                $msg =  "login succefully";
            }elseif($a == 2){
                $msg = "password not correct";
            }elseif($a == 3){
                $msg =  "user doesnt exist";
            }

            $this->view('Home/login',['msg' => $msg]);
        }
        
    }



?>