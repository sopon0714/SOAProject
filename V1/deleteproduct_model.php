<div id="deleteproduct" class="modal fade">
    <form method="post" id="formEdit" name="formEdit" action="deleteproduct_DB.php">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header header-modal" style="background-color: #FFA07A;">
                    <h4 class="m-0 font-weight-bold text-primary2">Delete Product</h4>
                </div>
                <div class="modal-body" id="passModalBody">

                    <div class="row mb-4">
                        <div class="col-12 text-center">
                            <h5 class="text mb-3 mr-sm-2">Do you want to delete the product?</h5>
                        </div>
                        <div class="col-12 text-center">
                            <h3 class="text-danger"><output type="text" id="delete_name" name="delete_name"></output></h3>
                        </div>

                        <input type="hidden" id="delete_id" name="delete_id"></input>

                    </div>





                </div>
                <div class="modal-footer">
                    <button type="submit" id="edit_pass" name="edit_pass" class="btn btn-success">ยืนยัน</button>
                    <button type="button" id="edit_cancel" name="edit_cancel" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </form>
</div>