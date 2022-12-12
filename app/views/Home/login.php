<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    }
    </style>
</head>

<body>
    <section class="vh-90 gradient-custom">
        <div class="container py-4 h-60">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">
                            <div class="mb-md-5 mt-md-4 pb-1">
                                <h2 class="fw-bold mb-2 text-uppercase ">Login</h2>
                                <?php
                                if(isset($data['msg'])){
                                    echo '<span class="text-danger ">'.   $data['msg']   .'</span>';
                                } 
                                
                                 ?>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                <form method="POST" action="http://localhost/5th%20BRIEF/public/Admin/login" >
                                    <div class="form-outline form-white mb-1">
                                        <label  class="form-label text-right" for="typeEmailX">Email</label>
                                        <input name="naem" type="text" id="typeEmailX" class="form-control form-control-lg" />

                                    </div>
                                    <div class="form-outline form-white mb-1 ">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input name="pass" type="password" id="typePasswordX"
                                            class="form-control form-control-lg" />
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-outline-light btn-lg mt-3 px-5 " name="eden"
                                            type="submit">Login</button>
                                    </div>
                                </form>
                                <!-- <div class="d-flex justify-content-center text-center mt-2 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>