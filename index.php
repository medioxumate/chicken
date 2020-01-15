<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/15/2020
 * @version 1.0
 * index.php
 * GreenRiverDev
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Instantiate F3
//Create an instance of the Base class
$f3 = Base::instance();