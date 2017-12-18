<?php

final class account extends \database\model
{
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    protected static $modelName = 'account';

    public static function getTablename()
    {

        $tableName = 'accounts';
        return $tableName;
    }

   //Use bcrypt to hash the password
    public function setPassword($password) {

        $password = password_hash($password, PASSWORD_DEFAULT);

        return $password;

    }

    public function checkPassword($LoginPassword) {

        return password_verify($LoginPassword, $this->password);


    }


    public function validate()
    {
        $valid = TRUE;
           if($this->email == '') {
            $valid = FALSE;
            echo 'Nothing in email';
        }


        return $valid;

    }



}


?>
