<?php

namespace utility;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<div class="container"><table border="1" class="table table-striped">';
        $tableGen .= '<tr >';
        //this grabs the first element of the array to  extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '<th ></th>';
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $id_new = $value;
                }

                $tableGen .= '<td>' . $value . '</td>';
            }
            $tableGen .= '<td><button type="button" onclick="location.href=\'index.php?page=' . $referingPage . '&action=show&id=' . $id_new . '\';"'.
                          'class="btn btn-default" aria-label="Left Align" title="View Details"><span class="glyphicon glyphicon-chevron-right"'.
                          'aria-hidden="true"></span></button></td>';
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table></div>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>