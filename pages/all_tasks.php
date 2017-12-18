
<div class="page-header container">
    <h2><small>My Tasks List<form action="index.php?page=tasks&action=create" method="POST" id="AddTaskForm">
                <button class="btn btn-sm btn-primary pull-right" type="submit" id="AddTaskForm" value="add task" title="Add Task" >Add Task</button>
            </form></small> </h2>

</div>
<?php
//Print the task list in a table format

print utility\htmlTable::genarateTableFromMultiArray($data);

?>



