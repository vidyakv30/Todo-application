<?php

class routes
{

    public static function getRoutes()
    {   //Routes for homepage
        $routes[] = self::create('GET','show','homepage','homepageController','show');
        $routes[] = self::create('POST','create','homepage','homepageController','create');

        //To login
        $routes[] = self::create('POST','login','accounts','accountsController','login');
        //To register a new account
        $routes[] = self::create('GET','register','accounts','accountsController','register');
        //To store the new user
        $routes[] = self::create('POST','register','accounts','accountsController','store');
        //To edit the user account/profile
        $routes[] = self::create('GET','edit','accounts','accountsController','edit');
        //To save the changes made to the user profile
        $routes[] = self::create('POST','save','accounts','accountsController','save');
        //To Change the password for the account
        $routes[] = self::create('GET','changePassword','accounts','accountsController','changePassword');
        //To save the changed password
        $routes[] = self::create('POST','changePassword','accounts','accountsController','savePassword');
        //To logout
        $routes[] = self::create('GET','logout','accounts','accountsController','logout');

        //To list tasks of the user on sign in
        $routes[] = self::create('GET','showTasks','tasks','tasksController','showTasks');
        //To create or add new task
        $routes[] = self::create('POST','create','tasks','tasksController','create');
        //To store the new- created task
        $routes[] = self::create('POST','store','tasks','tasksController','store');
        //To show a task (by task id)
        $routes[] = self::create('GET','show','tasks','tasksController','show');
        //To edit a task
        $routes[] = self::create('POST','edit','tasks','tasksController','edit');
        //To save the changes made to the task
        $routes[] = self::create('POST','save','tasks','tasksController','save');
        //To delete a task
        $routes[] = self::create('POST','delete','tasks','tasksController','delete');

        return $routes;
    }
// Factory to create new routes.
    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
        return $route;
    }
}

//Route prototype object

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}