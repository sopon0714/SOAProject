<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "link.php"?>
<title>Sweet Home</title>
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
              <h1 class="h3 mb-0 text-gray-800">สินค้าทั้งหมดที่ลูกค้าต้องการ</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">โปรดกรอกข้อมูล</h6>
            </div>
            <div id="product-grid">
                <!-- <div class="txt-heading"><h3>ข้อมูลการเช่าสินค้า<h3></div><br/> -->
                <div class="customer-data">
                  <form>
                          <!-- <div class="customer-title">โปรดกรอกข้อมูล</div><br/> -->
                          <div class="bill-action">
                                <label for="name">ชื่อ-สกุล : </label>
                                <input type="text" name="name"><br/>
                                <label for="day">วันที่เช่าสินค้า : </label>
                                <input type="date" id="myDate" name="myDate" value=""><br/>
                                <label for="day">ระยะเวลาการเช่าสินค้า : </label>
                                <input type="number"class="customer-day" id="day" name="day" min="1" max="30" name="quantity" value="1" size="2"><br/>
                                <label for="day">เบอร์โทร : </label>
                                <input type="text" name="tel"><br/>
                                <label for="day">e-mail : </label>
                                <input type="text" name="e-mail"><br/>
                                <input type="submit" value="submit" class="btnAddAction">
                          </div>
                      
                  </form>
                </div>
            </div>

            <form action="bill.php" method="POST">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <colgroup>
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ภาพสินค้า</th>
                      <th>รหัสสินค้า</th>
                      <th>รายการ</th>
                      <th>จำนวนอุปกรณ์ที่ต้องการเช่า</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ภาพสินค้า</th>
                      <th>รหัสสินค้า</th>
                      <th>รายการ</th>
                      <th>จำนวนอุปกรณ์ที่ต้องการเช่า</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    //getProducts();
                    //$products_list = getProducts();
                    //@var_dump($products_list);
                    table2(4);
                    ?>
                  </tbody>
                </table>
                <!-- <img src="./img/a.jpg" width= “30” height=“50”> -->
                <br/><br/>
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
