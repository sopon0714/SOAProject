<div id="editproduct" class="modal fade">
    <form method="post" id="formEdit" name="formEdit" action="editproduct_DB.php">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header header-modal" style="background-color: #FFA07A;">
                    <h4 class="m-0 font-weight-bold text-primary2">Edit Product</h4>
                </div>
                <div class="modal-body" id="passModalBody">

                    <div class="row mb-4">
                        <div class="col-3"></div>
                        <div class="col-2 text-align:left">
                            <span>Product name</span>
                        </div>
                        <div class="col-4">
                            <input type="text" name="edit_name" id="edit_name" class="form-control mb-2 mr-sm-2 " required />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-3"></div>
                        <div class="col-2 text-align:left">
                            <span class="text mb-3 mr-sm-2">Product price</span></span>
                        </div>
                        <div class="col-4">
                            <input type="text" name="edit_price" id="edit_price" class="form-control mb-2 mr-sm-2 " placeholder="Price" required />
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
                            <input type="radio" id="edit_status1" name="edit_status" value="อนุญาตให้สั่งซื้อสินค้าได้" checked="checked">
                            <label for="status1"> Allow </label><br>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="edit_status2" name="edit_status" value="ไม่อนุญาตให้สั่งซื้อสินค้าได้">
                            <label for="status1"> Not Allow </label><br>
                        </div>

                    </div>
                    <input type="hidden" name="edit_id" id="edit_id">

                </div>
                <div class="modal-footer">
                    <button type="submit" id="edit_pass" name="edit_pass" class="btn btn-success">ยืนยัน</button>
                    <button type="button" id="edit_cancel" name="edit_cancel" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </form>
</div>