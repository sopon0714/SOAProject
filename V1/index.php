<!DOCTYPE html>
<html lang="en">
<style>
  .text-gray-error {
    color: #FF0000 !important;
  }


  .bg-login-image2 {
    background: url('https://www.brideweddingmagazine.com/wp-content/uploads/2018/08/%E0%B8%95%E0%B8%81%E0%B9%81%E0%B8%95%E0%B9%88%E0%B8%871.jpg');
    background-position: center;
    background-size: cover;
  }

  .bg-gradient-primary_222 {
    background-color: #FFB6C1;
    background-image: linear-gradient(180deg, #FFB6C1 40%, #63B8FF 100%);
    background-size: cover;
  }
</style>
<?php
require_once('helper_func.inc.php');
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary_222">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image2"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to Accessories Shop</h1>
                  </div>
                  <form class="user" action="confirmLogin.php" method="post">
                    <!-- ใส่ username  -->
                    <!-- <div class="form-group">
                      <input name = "username" type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Enter your username...">
                    </div> -->
                    <!-- ใส่ Password  -->
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <!-- กด Login   -->
                    <?php
                    if (isset($_GET["error"])) { ?>
                      <div class="text-center">
                        <h6 class="text-gray-error">Invalid user</h6>
                      </div>
                    <?php
                    }
                    ?>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->
                    <hr>
                  </form>
                  <!-- ไปหน้าสมัครสมาชิก -->
                  <!-- <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>