<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = array();
        print_r($record);
        $record = todos::findOne($_REQUEST['id']);
        print_r($record);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function showTasks()
    {      session_start();
    //print_r($_SESSION['userID']);
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
           $tasks = todos::findTasksByID($userID);
           if ($tasks==FALSE){
               echo "You have not created any tasks";
               self::getTemplate('new_task');
           }
           else
           {
               self::getTemplate('all_tasks', $tasks);
           }


    }

    public static function all()
    {
        $records = todos::findAll();
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

   public static function create()
//    public static function newTask()
    {
       // print_r($_POST);
        self::getTemplate('new_task');
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
        //self::getTemplate('new_task');
        session_start();
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
//        $task->isdone = $_POST['isdone'];
        $task->save();

        header("Location: index.php?page=tasks&action=showTasks");

        //$record = todos::findOne($_REQUEST['id']);
//        $record->body = $_REQUEST['body'];
//        print_r($_SESSION['userID']);
//        print_r($_REQUEST['id']);



    }

    public static function save() {
        session_start();
        $record = todos::findOne($_REQUEST['id']);

        print_r($record);
        $record->owneremail = $_POST['owneremail'];
        $record->ownerid = $_POST['ownerid'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        echo 'to update';
        print_r($record);

        $record->save();
        //print_r($_POST);
       header("Location: index.php?page=tasks&action=all");







        $task->save();

//        $user = todos::findOne($_REQUEST['id']);

//        $user->owneremail = $_POST['owneremail'];
//        $user->ownerid = $_POST['ownerid'];
//        $user->createddate = $_POST['createddate'];
//        $user->duedate = $_POST['duedate'];
//        $user->message = $_POST['message'];
//        $user->isdone = $_POST['isdone'];
//        $user->save();
        header("Location: index.php?page=tasks&action=all");

    }



    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {    echo "reached delete";
        print_r($_POST);

        session_start();
        $record = todos::findOne($_REQUEST['id']);
        print_r($record);
        $record->delete();
        print_r($_POST);
        header("Location: index.php?page=tasks&action=all");

    }

}