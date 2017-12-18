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

                    <div class="form-group">
                        <label for="oldpassword" class="col-md-3 control-label">Old Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="oldpassword"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="newpassword" class="col-md-3 control-label">New Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="newpassword"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmpassword" class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="confirmpassword"><br>
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

<script src="js/scripts.js"></script>
</body>
</html>
