
<div class="container">
    <div id="changepswdbox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Change Password</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form id="changePswdForm" action="index.php?page=accounts&action=changePassword"
                      method="post" class="form-horizontal" role="form">

                    <?php  if (isset($_SESSION['errorMessage'])) { ?>
                        <div id="changePwdError" style="display:block" class="alert alert-danger">

                            <p id="changePwdInvalidMessage"><?php print_r($_SESSION['errorMessage']);

                                ?></p>


                            <span></span>
                        </div>
                    <?php } unset($_SESSION['errorMessage']);?>

                    <?php  if (isset($_SESSION['successMessage'])) { ?>
                        <div id="changePwdSuccess" style="display:block" class="alert alert-success">

                            <p id="changePwdSuccessMessage"><?php print_r($_SESSION['successMessage']);

                                ?></p>


                            <span></span>
                        </div>
                    <?php } unset($_SESSION['successMessage']);?>




                    <div class="form-group">
                        <label for="oldpassword" class="col-md-3 control-label">Old Password</label>
                        <div class="col-md-9">
                            <input type="password" onfocus="clearPwdErrorSuccessMessages();" class="form-control" name="oldpassword"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="newpassword" class="col-md-3 control-label">New Password</label>
                        <div class="col-md-9">
                            <input type="password" onfocus="clearPwdErrorSuccessMessages();" class="form-control" name="newpassword"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmpassword" class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" onfocus="clearPwdErrorSuccessMessages();" class="form-control" name="confirmpassword"><br>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm center-block" type="submit">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
