<!--Login form-->
<h1>
    <?php

    if(isset($_SESSION["userID"])){
        header("Location: index.php?page=tasks&action=showTasks");
    }
    ?> </h1>

<div class="container">

    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
            </div>
        </div>

        <div style="padding-top:30px" class="panel-body">

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

            <form id="loginform" action="index.php?page=accounts&action=login" class="form-horizontal" role="form"
                  method="POST">

                <?php  if (isset($_SESSION['errorMessage'])) { ?>
                    <div id="serverValidationErrors" style="display:block" class="alert alert-danger">

                        <p id="signInInvalidMessage"><?php print_r($_SESSION['errorMessage']);

                            ?></p>


                        <span></span>
                    </div>
                <?php } unset($_SESSION['errorMessage']);?>


                <div id="loginalert" style="display:none" class="alert alert-danger">


                    <p id="signInErrorMessage"></p>
                    <span></span>
                </div>


                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" type="text" onfocus="resetSignInError();" class="form-control"
                           name="email" value=""
                           placeholder="email" required>
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" type="password" onfocus="resetSignInError();" class="form-control"
                           name="password"
                           placeholder="password" required>
                </div>


                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <a id="btn-login" onclick="validateBeforeSignin();"
                           class="btn btn-success">Login </a>


                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12 control">
                        <div>
                            Don't have an account?
                            <a href="index.php?page=accounts&action=register">
                                Sign Up Here
                            </a>
                        </div>
                    </div>
                </div>
            </form>


        </div>

    </div>
</div>

