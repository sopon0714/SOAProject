<div id="addproduct" class="modal fade">
    <form method="post" id="formAdd" name="formAdd" action="addproduct_DB.php">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header header-modal" style="background-color: #FFA07A;">
                    <h4 class="m-0 font-weight-bold text-primary2">Add Product</h4>
                </div>
                <div class="modal-body" id="passModalBody">

                    <div class="row mb-4">
                        <div class="col-3"></div>
                        <div class="col-2 text-align:left">
                            <span>Product name<span class="text-danger mb-2 mr-sm-2">*</span></span>
                        </div>
                        <div class="col-4">
                            <input type="text" name="name" id="name" class="form-control mb-2 mr-sm-2 " placeholder="Name" required />

                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-3"></div>
                        <div class="col-2 text-align:left">
                            <span class="text mb-3 mr-sm-2">Product price<span class="text-danger mb-2 mr-sm-2">*</span></span>
                        </div>
                        <div class="col-4">
                            <input type="text" name="price" id="price" class="form-control mb-2 mr-sm-2 " placeholder="Price" required />
                        </div>
                        <div class="col-1">
                            <span>Baht</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-3"></div>
                        <div class="col-2 text-align:left">
                            <span class="text mb-3 mr-sm-2">Status</span></span>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="status" name="status" value="อนุญาตให้สั่งซื้อสินค้าได้" checked="checked">
                            <label for="status1"> Allow </label><br>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="status" name="status" value="ไม่อนุญาตให้สั่งซื้อสินค้าได้">
                            <label for="status1"> Not Allow </label><br>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" id="add_pass" name="add_pass" class="btn btn-success">ยืนยัน</button>
                    <button type="button" id="add_cancel" name="add_cancel" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </form>
</div>