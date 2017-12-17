<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
    <div id="signupbox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form id="signupform" class="form-horizontal" role="form">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span id="message"></span>
                    </div>


                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" onfocus="resetSignUpError();" id="email" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" onfocus="resetSignUpError();" name="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" onfocus="resetSignUpError();" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" onfocus="resetSignUpError();" name="passwd" placeholder="Password">
                        </div>
                    </div>



                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="button"
                                    onclick="validateAndRegister();" class="btn btn-info"><i
                                        class="icon-hand-right"></i>
                                &nbsp Sign Up
                            </button>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div>
                                Already have an account?
                                <a href="index.php">
                                    Sign In
                                </a>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>


    </div>
</div>


</body>
</html>
