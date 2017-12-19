<?php

//Each page extends controller and the index.php?page=tasks causes the controller to be called
class accountsController extends http\controller
{

    //This method is to find all accounts
    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }
    //This is the method to create a new account
    public static function register()
    {
              self::getTemplate('register');
    }

    /** This is the method  is  to save  new user for registration.
     **/
    public static function store()

    {
        //Find if the user already exists in the database
        $user = accounts::findUserbyEmail($_REQUEST['email']);

      //Create a new account for the user and save the user details, if the user does not exist already.
        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];

            $user->password = $user->setPassword($_POST['password']);
            $user->save();

            //The new user is redirected to the home page to login
            header("Location: index.php?");

        } else {
            $error = 'already registered';
            self::getTemplate('error', $error);

        }

    }

    /** This method allows the user to edit his account details
     **/
    public static function edit()
    {    $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('edit_account', $record);

    }

    /**
     * This method saves the account details updated by the logged in user
     **/

    public static function save() {

        $user = accounts::findOne($_SESSION['userID']);

        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();

        $_SESSION['successMessage']="Account details successfully updated!";
        header("Location: index.php?page=accounts&action=edit");

    }
   /**
    * This method deletes a user by id
    **/
    public static function delete() {

        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=accounts&action=all");
    }

     /**
     *This method is to allow or deny the user to login to the application
     **/

    public static function login()
    {
          $user = accounts::findUserbyEmail($_REQUEST['email']);

        //Alert the user with error message and stay on the login page if the user is not found

        if ($user == FALSE) {
            $_SESSION["errorMessage"] = "User Not found!";
            header("Location: index.php");
        }
        else {
        //Start the session if the password matches

            if($user->checkPassword($_POST['password']) == TRUE) {

               self::startSession($user);

               }
               //Alert the user with error message if password doe not match
               else
                   {
                $_SESSION["errorMessage"] = "Invalid Password!";
                header("Location: index.php");
            }

        }




    }

/**
 *This method allows the user to logout from the application
 **/
    public static function logout()
    {

        session_destroy();
        header("Location: index.php");
    }
    /**
     *This method allows the user to change password of the application
     **/
    public static function changePassword()
    {
        self::getTemplate('change_password');
    }
  /** This method saves the new password  if the passwords match   */
    public static function savePassword(){

           $user = accounts::findOne($_SESSION['userID']);

            if($user->checkPassword($_POST['oldpassword']) == TRUE)
            {
                //Save the new password if the new password and confirm password match

               if ($_POST['newpassword']== $_POST['confirmpassword']){
                   $user->password = $user->setPassword($_POST['newpassword']);
                   $user->save();
                   $_SESSION['successMessage'] = "Your Password has been changed. Please use your new password for the next login";
                   header("Location:index.php?page=accounts&action=changePassword");

               }
               else{
                   //Alert the user with error message if the new password and confirm password do not match
                   $_SESSION['errorMessage'] = "New Passwords do not match";
               }
            }else
            {    //Alert the user with error message if the apssword entered is not valid
                $_SESSION['errorMessage'] = "Invalid password Entered";

            }
            header("Location:index.php?page=accounts&action=changePassword");


    }

    /**
     * This method creates a new session when the user logs with valid userID and password. Save the userID and username in the session
     **/
    public static function startSession($user){

        session_start();
        $_SESSION["userID"] = $user->id;
        $_SESSION["userName"] = $user->email;
        unset($_SESSION['errorMessage']);

        //forward the user to the task list page
        header("Location: index.php?page=tasks&action=showTasks");

    }

}

