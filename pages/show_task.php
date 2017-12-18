
<div class="container">
    <div id="viewtaskbox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Task Details</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form id="viewTaskForm" action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> "
                      method="post" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label for="id" class="col-md-3 control-label">Task #</label>
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
                            <input type="text" class="form-control" name="message" value="<?php echo $data->message ?>"
                                   readonly><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isdone" class="col-md-3 control-label">Is done</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="isdone" value="<?php echo $data->isdone ?>"
                                   readonly><br>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-offset-3 col-md-12">
                            <button type="submit" class="btn btn-info" value="Edit Task">
                                <i
                                        class="icon-hand-right"></i>Edit Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--    <button type="submit" form="form1" value="delete" >Delete</button>-->


