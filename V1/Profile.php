<!DOCTYPE html>
<html lang="en">
    

<head>
  <?php include "link.php"?>
 
  <?php require_once('query.php'); ?>
  <?php
  
  $stml = DB_user();
  while ($DB_user = $stml->fetch(PDO::FETCH_OBJ)){
    $UID = $DB_user->UID;
    $username = $DB_user->username;
    $password = $DB_user->password;
    $Name = $DB_user->name;
    $Surname = $DB_user->surname;
    $Email = $DB_user->email;
    $Address = $DB_user->address;
    $Number = $DB_user->tel;
}

  ?>
 
<title>ระบบยืมของภาควิชาคอม</title>
</head>

<body id="page-top">
  <div id="wrapper" >

    <!-- อันนี้ไว้เรียกใช้แท็บข้างๆๆ -->
      <?php include "logout.php" ?>
    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" >

<!-- อันนี้ไว้เรียกใช้แท็บบน -->
<?php include "Topbar.php" ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

   

<!-- เริ่ม -->
<div >
<div class="row">
<div class="col-xl-12 col-12 mb-4">
    <div class="card">
        <div class="card-header card-bg">
        <h6 class="h3 m-0 font-weight-bold text-primary">Profile</h6>
        </div>
    </div>
</div>
</div>
<div class="row">
<div class="col-xl-1 col-12 mb-4">
   
</div>
<div class="col-xl-12 col-8 mb-4">
    <div class="card">
        <div class="card-header card-bg">
            <h6 class="h5 m-0 font-weight-bold text-primary">Personal Information</h6>
        </div>
        <form class="user" action = "Profile.php" method = "post">
          <div class="card-body">
              <div class="row mb-4">
                  <div class="col-xl-2 col-12 text-right">
                      <span>Name</span>
                  </div>
                  <div class="col-xl-9 col-12">
                    <input type="text" class="form-control" id="name" value="<?php echo $Name?>" disabled >
                  
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col-xl-2 col-12 text-right">
                      <span>Surname</span>
                  </div>
                  <div class="col-xl-9 col-12">
                  <input type="text" class="form-control" id="surname"  value="<?php echo $Surname?>" disabled  >
                  </select>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col-xl-2 col-12 text-right">
                      <span>E-mail</span>
                  </div>
                  <div class="col-xl-9 col-12">
                  <input type="text" class="form-control" id="surname"  value="<?php echo $Email?>"  disabled >
                  </select>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col-xl-2 col-12 text-right">
                      <span>Address</Address></span>
                  </div>
                  <div class="col-xl-9 col-12 ">
                    <textarea  style="resize:none;" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" disabled><?php echo $Address?></textarea>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col-xl-2 col-12 text-right">
                      <span>Telephone Number</span>
                  </div>
                  <div class="col-xl-9 col-12">
                  <input type="text" class="form-control" id="tel"  value="<?php echo $Number?>" disabled >
                  </select>
                  </div>
              </div>
              <div class="modal-footer">
                      <button type="button" class="btn btn-success"  onclick="editfuser()" >Change</button>
              </div>
          </div>
        </form>
    </div>
</div>
</div>

</div>
<!-- จบ -->

</div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
</body>
<?php include_once("modal.php")?>
</html>

<script>
 function editfuser() {
    $("#modaladdsub").modal('show');
    }
</script>
