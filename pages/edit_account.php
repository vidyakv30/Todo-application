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


<form action="index.php?page=accounts&action=save" method="post">
    First name: <input type="text" name="fname" value ="<?php echo $data->fname?>"><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender?>"><br>
    <input type="submit" value="Save changes">
</form>
<h3><a href="index.php?page=accounts&action=changePassword">Change Password</a></h3>


<script src="js/scripts.js"></script>
</body>
</html>

