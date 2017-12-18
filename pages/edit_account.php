
<div class="container">
    <div id="editprofilebox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Edit Profile</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form id="editProfileform" action="index.php?page=accounts&action=save" method="post" class="form-horizontal" role="form">
                    <?php  if (isset($_SESSION['successMessage'])) { ?>
                        <div id="serverValidationSuccess" style="display:block" class="alert alert-success">

                            <p id="successMessage"><?php print_r($_SESSION['successMessage']);

                                ?></p>


                            <span></span>
                        </div>
                    <?php } unset($_SESSION['successMessage']);?>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo $data->email?>" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" value ="<?php echo $data->fname?>" class="form-control" name="fname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo $data->lname?>" class="form-control" name="lname" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for= "birthday" class="col-md-3 control-label">Birthday</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday?>" placeholder="YYYY-MM-DD"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for= "phone" class="col-md-3 control-label">Phone</label>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo $data->phone?>" class="form-control" name="phone" placeholder ="Phone Number" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for ="gender" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo $data->gender?>" class="form-control" name="gender" placeholder="gender">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-offset-3 col-md-2">
                            <button type="submit" class="btn btn-primary" value="Save">
                                <i
                                        class="icon-hand-right"></i>Save
                            </button>
                        </div>

                        <div class="col-md-6">
                            <h5><a href="index.php?page=accounts&action=changePassword">Change Password</a></h5>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

