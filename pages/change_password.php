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
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center">Reset Password</h3>
            <hr/>
            <form action ="index.php?page=accounts&action=changePassword" method= "POST">
                <div class="form-group">
                    <label>Old Password :</label>
                    <input type="password" class="form-control" name="oldpassword"/>
                </div>
                <div class="form-group">
                    <label>New Password :</label>
                    <input type="password" class="form-control" name="newpassword"/>
                </div>
                <div class="form-group">
                    <label>Confirm Password :</label>
                    <input type="password" class="form-control" name="confirmpassword"/>
                </div>
                <button class="btn btn-primary btn-sm center-block">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>


<script src="js/scripts.js"></script>
</body>
</html>
