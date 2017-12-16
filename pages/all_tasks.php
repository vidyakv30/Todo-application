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

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);

?>
<form action="index.php?page=tasks&action=create" method="POST" id="AddTaskForm">
<button type="submit" id="AddTaskForm" value="add task" >Add Task</button>
</form>


<h3><a href="index.php?page=accounts&action=edit"> Edit Profile </a></h3>
<!--<form action="index.php?page=accounts&action=profile" method="POST" id="EditProfile">-->
<!--<button type="submit" id="EditProfile" value="add task" >Edit Profile</button>-->
<!--</form>-->





<script src="js/scripts.js"></script>
</body>
</html>