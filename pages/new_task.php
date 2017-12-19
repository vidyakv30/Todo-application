<!--Form to create/add a task-->
<div class="container">
    <div id="createtaskbox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Enter Task Details</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form id="createTaskForm" action="index.php?page=tasks&action=store"
                      method="post" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label for="owneremail"  class="col-md-3 control-label">Owner Email</label>
                        <div class="col-md-9">
                            <input type="text" readonly value=<?php print_r($_SESSION['userName']) ?> class="form-control" name="owneremail"><br>
                            <input type="hidden" class="form-control" value ="<?php date_default_timezone_set('America/New_York');echo date('Y:m:d H:i:s'); ?>"  name="createddate">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="duedate" class="col-md-3 control-label">Due Date</label>
                        <div class="col-md-9">
                            <input type="datetime" class="form-control" name="duedate" placeholder="YYYY-MM-DD HH:MM:SS"><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-md-3 control-label">Message</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="message"><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isdone" class="col-md-3 control-label">Is done</label>
                        <div class="col-md-9">
                            <input id="checkBox" type="checkbox" name="isdone"><br>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-offset-3 col-md-12">
                            <button type="submit" class="btn btn-info" value="Create Task">
                                <i
                                        class="icon-hand-right"></i>Create Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
