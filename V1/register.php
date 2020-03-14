<style>
    .text-primary2 {
        color: #FFFFFF !important;
    }
    .btn-1{
        color: #FF0000;
    }
    .bg-login-image1 {
        background: url('https://joanne-eatswellwithothers.com/wp-content/uploads/2015/04/rainbow-cake.jpg');
        background-position: center;
        background-size: cover;
    }
    .bg-gradient-primary_111 {
        background-color: #CC3366;
        background-image: linear-gradient(180deg,#CC3366 30%,#CC99FF 100%);
        background-size: cover;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary_111">

  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-login-image1"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="insert.php" method="post">
<!--                  Username-->
<!--                  class="form-control form-control-user"-->
                  <div class="form-group">
                      <input name = "username" type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username">
                  </div>
<!--                  Password-->
                  <div class="form-group">
                      <input name = "password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
<!--                  Name-->
                <div class="form-group">
                    <input name = "name" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                </div>
<!--                  Surname-->
                  <div class="form-group">
                    <input name = "surname" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Surname">
                  </div>
<!--                  Email-->
                <div class="form-group">
                  <input name = "email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
<!--                  Address-->
                <div class="form-group">
                  <input name = "address" type="text" class="form-control form-control-user" id="exampleInputAddress" placeholder="Address">
                </div>
<!--                  Telephone-->
                <div class="form-group">
                  <input name = "telnum" type="text" class="form-control form-control-user" id="exampleInputTel" placeholder="Telephone Number">
                </div>
<!--                  Register-->
                  <button type="submit" class="btn btn-primary btn-user btn-block btn-success">Register</button>
<!--                  <button type="button" class="btn btn-primary btn-user btn-block" onclick="alert('Register success')">Register</button>-->
<!--                  Back-->
                  <a href="index.php" class="btn btn-danger btn-user btn-block">
                      Back
                  </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  <script>-->
<!--      // $("#modal_editsub").css('width', '100px');-->
<!--      // $("#modal_editsub").css('margin', '50px auto 50px auto');-->
<!--      // $("#modal_editsub").modal('show')-->
<!--      function edit_function(username, password, name, surname, email, address, telnum) {-->
<!--          $("#modal_editsub").modal('show');-->
<!--          $('#username_ed').val(username);-->
<!--          $('#password_ed').val(password);-->
<!--          $('#name_ed').val(name);-->
<!--          $('#surname_ed').val(surname);-->
<!--          $('#email_ed').val(email);-->
<!--          $('#address_ed').val(address);-->
<!--          $('#telnum_ed').val(telnum);-->
<!--      }-->
<!--  </script>-->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
