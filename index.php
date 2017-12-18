<html>
<head>
    <title>To-Do Application</title>

    <link rel="icon" href="resources/Todo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php

//turn on debugging messages
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

//Autoloader class to load all the different directories
include_once "pages/header.php";
include_once "autoload.php";

//put your database credentials here
include_once "database.php";

//this starts the program as a static.  Start tracing the program from here following the classes and methods being called
$response = http\processRequest::createResponse();
?>
<script src="js/scripts.js"></script>

</body>
</html>