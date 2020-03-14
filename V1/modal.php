<style>
.text-primary2 {
  color: #FFFFFF !important;
} 
</style>
<div id="modaladdsub" class="modal fade">
    <form method="post" action="manage.php">
        <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header header-modal" style="background-color: #FFA07A;">
                            <h4 class ="m-0 font-weight-bold text-primary2">Change you information</h4>
                        </div>
                        <div class="modal-body" id="passModalBody">
                            <div class="row mb-4">
                        <div class="col-xl-2 col-12 text-right">
                            <span>Name</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="name"  name="name" value="<?php echo $Name?>" >
                        
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-2 col-12 text-right">
                            <span>Surname</span>
                        </div>
                        <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="surname" name="surname"  value="<?php echo $Surname?>"  >
                        </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-2 col-12 text-right">
                            <span>E-mail</span>
                        </div>
                        <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="Email" name="Email" value="<?php echo $Email?>"  >
                        </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-2 col-12 text-right">
                            <span>Address</Address></span>
                        </div>
                        <div class="col-xl-9 col-12 ">
                            <textarea  style="resize:none;" class="form-control rounded-0" id="address" name="address" rows="3" name><?php echo $Address?></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-2 col-12 text-right">
                            <span>Telephone Number</span>
                        </div>
                        <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="tel" name="tel"  value="<?php echo $Number?>"  >
                        </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="UID" value="<?php echo $UID?>">
                <div class="modal-footer">
                    <button type="submit" id="edit_pass" name="edit_pass" class="btn btn-success">confirm</button>
                    <button type="button" id="edit_cancel" name="edit_cancel" class="btn btn-danger"
                        data-dismiss="modal">cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>

