<?php

//this is the controller for the index page.

class homepageController extends http\controller
{

/**
 * This is the show method that is called to show the sites name in a template any array passed in will be accepted by the template function
 * as a model
**/
    public static function show()
    {
        $templateData['site_name'] = 'Todo Application';

//template data contains what will show up in the $data variable in the homepage template
//the name of the template 'homepage' becomes 'homepage.php' in the pages directory

        self::getTemplate('homepage', $templateData);
    }

    public static function create()
    {

        print_r($_POST);
    }

}
