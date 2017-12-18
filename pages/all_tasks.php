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
<div class="page-header container">
    <h2><small>My Tasks List<form action="index.php?page=tasks&action=create" method="POST" id="AddTaskForm">
                <button class="btn btn-sm btn-primary pull-right" type="submit" id="AddTaskForm" value="add task" title="Add Task" >Add Task</button>
            </form></small> </h2>

</div>
<?php
//Print the task list in a table format

print utility\htmlTable::genarateTableFromMultiArray($data);

?>



<script src="js/scripts.js"></script>
</body>
</html>