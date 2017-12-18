<?php

namespace http;
//Controller class to connect models with views and business logic
class controller
{


/**
 * This gets the HTML template for the application and accepts the model.  The model array can be used in the template.$dataused to access the templete
 **/

    static public function getTemplate($template, $data = NULL)
    {

        $template = 'pages/' . $template . '.php';
        include $template;

    }
}