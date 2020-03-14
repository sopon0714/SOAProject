<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("addproduct_model.php") ?>
  <?php include_once("editproduct_model.php") ?>
  <?php include_once("deleteproduct_model.php") ?>
  <?php include "link.php" ?>
  <?php  require('connect.php');?>
  <?php include "helper_func.inc.php" ?>

  <title>Management Product</title>
</head>

<body id="page-top">
  <div id="wrapper">

    <!-- อันนี้ไว้เรียกใช้แท็บข้างๆๆ -->
    <?php include "layout_admin.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- อันนี้ไว้เรียกใช้แท็บบน -->
        <?php include "Topbar.php" ?>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div bgcolor=“green” class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-1 text-danger">Products In Stock</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> ตะกร้า</a>
          </div>

          <!-- ตัวอย่างและตำแหน่งของ card -->

          <div class="col-xl-3 col-12 mb-4">
            <a style="text-decoration: none">
              <div class="card border-left-primary card-color-add shadow h-100 py-2" id="addsub" style="cursor:pointer;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-xl text-info">Add Product</div>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-warning" onclick="addProduct()"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>


          <!-- Content Row -->
          <!-- ส่วนของตาราง รายการขอยื่ม -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="h5 m-0 font-weight-bold text-dack">Table Product</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <colgroup>
                    <col width="100">
                    <col width="100">
                    <col width="100">
                    <col width="100">
                    <col width="100">

                  </colgroup>
                  <!-- หัวตาราง -->
                  <thead class="thead-dark">
                    <tr>
                      <th>No.</th>
                      <th>Product</th>
                      <th>Price (Baht)</th>
                      <th>Status</th>
                      <th>Management</th>
                    </tr>
                  </thead>

                  <!-- ท้ายตาราง -->
                  <tfoot class="thead-dark">
                    <tr>
                      <th>No.</th>
                      <th>Product</th>
                      <th>Price (Baht)</th>
                      <th>Status</th>
                      <th>Management</th>
                    </tr>
                  </tfoot>

                  <!-- บอดี้ตาราง -->
                  <tbody class="table table-secondary">
                    <?php
                    $i = 1;
                    $stmt = DB_ProductAll();
                    while ($product = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $product->product_name; ?></td>
                        <td><?php echo $product->price; ?></td>
                        <td><?php
                            if ($product->product_status == 'อนุญาตให้สั่งซื้อสินค้าได้') {
                              echo "Allow";
                            } elseif ($product->product_status == 'ไม่อนุญาตให้สั่งซื้อสินค้าได้') {
                              echo "Not Allow";
                            }
                            ?></td>
                        <td style="text-align:center;">
                          <button type="button" class="btn btn-success btn-sm " data-toggle="tooltip" title="" data-original-title="แก้ไข" onclick="editProduct('<?php echo $product->PID; ?>','<?php echo $product->product_name; ?>','<?php echo $product->price; ?>','<?php echo $product->product_status; ?>')"><i class="fas fa-edit" aria-hidden="true"></i></button>
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="ลบ"><i class="far fa-trash-alt" aria-hidden="true" onclick="deleteProduct('<?php echo $product->PID; ?>','<?php echo $product->product_name; ?>')"></i></button>
                        </td>
                      </tr>
                    <?php
                      $i++;
                    }
                    ?>


                  </tbody>


                </table>
              </div>
            </div>
          </div>
          <!-- จบ ส่วนของตาราง รายการรออนุมัติ-->


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
<script>
  function addProduct() {
    $("#addproduct").modal('show');
  }

  function editProduct(PID, name, price, status) {
    $("#editproduct").modal('show');
    $('#edit_id').val(PID);
    $('#edit_name').val(name);
    $('#edit_price').val(price);
    if (status !== 'อนุญาตให้สั่งซื้อสินค้าได้') {
      $("#edit_status2").attr("checked", !this.checked);
    } else {
      $("#edit_status1").attr("checked", !this.checked);
    }
  }

  function deleteProduct(PID, name) {
    $("#deleteproduct").modal('show');
    $('#delete_id').val(PID);
    $('#delete_name').val(name);
  }
</script>

</html>