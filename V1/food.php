<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "link.php"?>
<title>Food</title>
</head>

<body id="page-top">
  <div id="wrapper" >

    <!-- อันนี้ไว้เรียกใช้แท็บข้างๆๆ -->
      <?php include "layout_user.php" ?>
      <?php include "helper_func.inc.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" >

        <!-- อันนี้ไว้เรียกใช้แท็บบน -->
        <?php include "Topbar.php" ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div bgcolor= “green” class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Product & Food</h1>
            </div>

       <!-- ตัวอย่างและตำแหน่งของ card -->
            <!-- <div class="row">
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Content Row -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Product & Food</h6>
            </div>
            <form action="billPhoto.php" method="POST">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <colgroup>
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>รหัสสินค้า</th>
                      <th>สินค้า</th>
                      <th>ราคา/set</th>
                      <th>จำนวน (set)</th>
                      <th>หมายเหตุ</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ลำดับ</th>
                      <th>รหัสสินค้า</th>
                      <th>สินค้า</th>
                      <th>ราคา/set</th>
                      <th>จำนวน (set)</th>
                      <th>หมายเหตุ</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    table2(7);
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            
            <br/><br/>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <colgroup>
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>รหัส</th>
                      <th>รายการอาหาร</th>
                      <th>ราคา</th>
                      <th>จำนวน</th>
                      <th>หมายเหตุ</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ลำดับ</th>
                      <th>รหัส</th>
                      <th>รายการอาหาร</th>
                      <th>ราคา</th>
                      <th>จำนวน</th>
                      <th>หมายเหตุ</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    table2(8);
                    ?>
                  </tbody>
                </table>
                <br/><br/>
                <a href="./check.php"><button>Submit</button></a>
              </div>
            </div>
            
            <br/><br/>
          </form>

          </div>
        </div>
        <!-- /.container-fluid -->

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

</html>
