<!--Form to Edit a task-->

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
                        </div>
                    </div>

                        <div class="col-md-offset-3 col-md-2">
                            <button type="submit" class="btn btn-primary" form="editTaskForm" value="Save">
                                <i
                                        class="icon-hand-right"></i>Save
                            </button>
                        </div>

                </form>
                <div class="col-md-3">
                    <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id ?>" method="post"
                          id="deleteTaskForm">
                        <button type="submit" class="btn btn-danger" form="deleteTaskForm" id="deleteTaskFormButton" value="delete">Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

