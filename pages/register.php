<!--Form to register a new user account-->

<div class="container">
    <div id="signupbox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form id="signupform" action="index.php?page=accounts&action=register" method="post" class="form-horizontal" role="form">

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
                            <input type="text" class="form-control" onfocus="resetSignUpError();" name="fname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" onfocus="resetSignUpError();" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" onfocus="resetSignUpError();" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for= "birthday" class="col-md-3 control-label">Birthday</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="birthday" placeholder="YYYY-MM-DD"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for= "phone" class="col-md-3 control-label">Phone</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone" placeholder ="Phone Number" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for ="gender" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="male" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="female" /> Female
                                </label>
                            </div>
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

