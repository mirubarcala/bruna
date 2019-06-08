<?php

require 'helpers.php';
require 'Classes/Validator.php';
require 'Classes/UserFactory.php';
require 'Classes/Database.php';
/*require 'Classes/DBJSON.php';*/
require 'Classes/DBMySQL.php';
require 'Classes/HashPassword.php';
require 'Classes/User.php';
require 'Classes/Session.php';
require 'Classes/Auth.php';
require 'Classes/Cookie.php';
/*require 'Classes/Product.php';
require 'Classes/Category.php';
require 'Classes/Cart.php';*/

Session::start();

$validator = new Validator();
$factory = new UserFactory();

/*$db = new ('users.json');*/

// PARAMETROS
$host = "127.0.0.1";
$port = "3306";
$db_name = "dbbruna";
$username = "root";
$password = "";
// END PARAMETROS
$pdo = DBMySQL::connect($host, $db_name, $username, $password, $port);