<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account';

   // This function finds user by Email

    public static function findUserbyEmail($email)
    {

            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE email = ?';

            //Select the only record for find one and return as an object
            $recordsSet = self::getResults($sql, $email);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }



    }


}

