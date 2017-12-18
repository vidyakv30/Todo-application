<?php

//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    /**
     * This method is to  show the details of the task requested( one task).URL ->index.php?page=tasks&action=show&id=?
     **/
    public static function show()
    {
        $record = array();
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('show_task', $record);
    }

    /**
     * This method is show the tasks list of the logged in user.URL is index.php?page=task&action=showTasks
     */
    public static function showTasks()
    {      //session_start();

           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }

           $tasks = todos::findTasksByID($userID);

           if ($tasks==FALSE){
               echo "Your task list is empty. Please enter details to create one";
               self::getTemplate('new_task');
           }
           else
           {
               self::getTemplate('all_tasks', $tasks);
           }


    }

    /**
     * This method is lists all tasks.URL is index.php?page=task&action=all
     */
    public static function all()
    {
        $records = todos::findAll();
        self::getTemplate('all_tasks', $records);

    }

    /**
     * This method is allows to add or create a new task .URL is index.php?page=tasks&action=create
     **/
   public static function create()

    {
        self::getTemplate('new_task');
    }

    /**
     * This method is allows the user to edit the details of a task using a form.URL is index.php?page=tasks&action=edit&id=?
     **/
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);

    }

    /**
     * This method is to store the details of the new task created by the user
     **/
    public static function store()
    {
      //  session_start();
        $task = new todo();

        $task->owneremail = $_POST['owneremail'];
        $task->ownerid = $_SESSION['userID'];
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];

        if($_POST['isdone'] == true){
            $task->isdone =1;
        }
        else
            $task->isdone = 0;
        $task->save();

        header("Location: index.php?page=tasks&action=showTasks");

    }

    /**
     * This method is to save the details updated by the userin the edit task form.
     **/
    public static function save() {
       // session_start();
        $record = todos::findOne($_REQUEST['id']);
        $record->owneremail = $_POST['owneremail'];
        $record->ownerid = $_POST['ownerid'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();

        //Redirects the user to the task list page.
        header("Location: index.php?page=tasks&action=showTasks");
        $task->save();

    }

    /**
     * This method allows to delete a task created by the user.
     **/
    public static function delete()
    {   //session_start();
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=showTasks");

    }

}