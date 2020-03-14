<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php" ?>
    <title>Sweet Home</title>
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- อันนี้ไว้เรียกใช้แท็บข้างๆๆ -->
        <?php include "layout_user.php" ?>
        <?php include "helper_func.inc.php" ?>

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

                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-12 mb-4">

                            <div class="card border-left-primary card-color-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold  text-uppercase mb-1">รายการการเช่าทั้งหมด
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 รายการ</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-home fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">รายการทั้งหมด</h6>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row center">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>วันที่</th>
                                                        <th>หมายเลขคำสั่ง</th>
                                                        <th>ราคา(บาท)</th>
                                                        <th>รายละเอียด</th>
                                                        <th>จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>วันที่</th>
                                                        <th>หมายเลขคำสั่ง</th>
                                                        <th>ราคา(บาท)</th>
                                                        <th>รายละเอียด</th>
                                                        <th>จัดการ</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>

                                                    <tr style="text-align:center;">
                                                        <td>1</td>
                                                        <td>14/03/2563</td>
                                                        <td>RD00001</td>
                                                        <td>500</td>
                                                        <td>
                                                            <button type="button" id="btn_edit" class="btn btn-info btn-sm tt " title='แก้ไขหมวดหมู่'>
                                                                <i class="fas fa-file-alt"></i>
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <button type="button" id="btn_edit" class="btn btn-warning btn-sm tt " title='แก้ไขหมวดหมู่'>
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button type="button" id="btn_alt" class="btn btn-danger btn-sm tt " title='ลบหมวดหมู่'>
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>

                                                        </td>
                                                    </tr>
                                                    <tr style="text-align:center;">
                                                        <td>2</td>
                                                        <td>10/03/2563</td>
                                                        <td>RD00002</td>
                                                        <td>1000</td>
                                                        <td>
                                                            <button type="button" id="btn_edit" class="btn btn-info btn-sm tt " title='แก้ไขหมวดหมู่'>
                                                                <i class="fas fa-file-alt"></i>
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <button type="button" id="btn_edit" class="btn btn-warning btn-sm tt " title='แก้ไขหมวดหมู่'>
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button type="button" id="btn_alt" class="btn btn-danger btn-sm tt " title='ลบหมวดหมู่'>
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>

                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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