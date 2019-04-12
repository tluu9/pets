<?php
/** Another pair programming project...*/
/**Trang Luu
 *12 April 2019
 * Controller page
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file autoload.php
require_once('vendor/autoload.php');

//Create an instance of the Base class/ instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-free error reporting/Debugging
$f3->set('DEBUG',3);

//Define a default route (use backlash / )
$f3->route('GET /', function()
{
    //Display a view-set view as new template and echo out the view
    $view = new Template();
    echo $view->render('views/home.html');
});

//Run fat free F3
$f3->run();
