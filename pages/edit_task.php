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
//this is how you print something  $data contains the record that was selected on the table.
echo "edit_task";
print_r($data);
print_r($_REQUEST);

?>

<div class="container">
    <div id="edittaskbox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Edit Task Details</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form id="editTaskForm" action="index.php?page=tasks&action=save&id=<?php $data->id ?> "
                      method="post" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label for="id" class="col-md-3 control-label"> Task# </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="id" value="<?php echo $data->id ?>"
                                   readonly><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="owneremail" class="col-md-3 control-label">Owner Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="owneremail"
                                   value="<?php echo $data->owneremail ?>" readonly><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="createddate" class="col-md-3 control-label">Created Date</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="createddate"
                                   value="<?php echo $data->createddate ?>" readonly><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="owneremail" class="col-md-3 control-label">Due Date</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="duedate" value="<?php echo $data->duedate ?>"
                                   readonly><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-md-3 control-label">Message</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="message" value="<?php echo $data->message ?>"><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isdone" class="col-md-3 control-label">Is done</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="isdone"
                                   value="<?php echo $data->isdone ?>"><br>
                            <!--                            <input id="checkBox" type="checkbox" name="isdone" checked="-->
                            <?php //echo '$data->isdone' ?><!--" value="--><?php //echo $data->isdone ?><!--"><br>-->
                        </div>
                    </div>
<!--                    <div class="form-group">-->

                        <div class="col-md-offset-3 col-md-2">
                            <button type="submit" class="btn btn-primary" form="editTaskForm" value="Save">
                                <i
                                        class="icon-hand-right"></i>Save
                            </button>
                        </div>

<!--                    </div>-->
                </form>
                <div class="col-md-3">
                    <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id ?>" method="post"
                          id="deleteTaskForm">
                        <!--                                    <input type="hidden" name="id" value = --><?php //echo $data->id?>
<!--                        --><?php //echo $data->id?>
                        <button type="submit" class="btn btn-danger" form="deleteTaskForm" id="deleteTaskFormButton" value="delete">Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<form action="index.php?page=tasks&action=save&id=<?php $data->id ?> " method="post" id="saveForm">
    ID: <input type="text" name="id" value= <?php echo $data->id ?>><br>
    Owner Email: <input type="text" name="owneremail" value= <?php echo $data->owneremail ?>><br>
    Owner ID: <input type="text" name="ownerid" value= <?php echo $data->ownerid ?>><br>
    Created Date: <input type="text" name="createddate" value= <?php echo $data->createddate ?>><br>
    Due Date: <input type="text" name="duedate" value= <?php echo $data->duedate ?>><br>
    Message: <input type="text" name="message" value= <?php echo $data->message ?>><br>
    Is Done: <input type="text" name="isdone" value= <?php echo $data->isdone ?>><br>
    <button type="submit" form="saveForm" value="save">Save</button>
</form>
<?php print_r($data->id) ?>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id ?>" method="post" id="deleteForm">
    <!--    <input type="hidden" name="id" value = --><?php //echo $data->id?><!-->
    <button type="submit" id="deleteForm" value="delete">Delete</button>
</form>

<!--<form action="index.php?page=tasks&action=delete&id=--><?php //$data['id'] ?><!-- " method="post" id="form1">-->
<!--    <button type="submit" form="form1" value="delete">Delete</button>-->
<!--</form>-->


<script src="js/scripts.js"></script>
</body>
</html>

