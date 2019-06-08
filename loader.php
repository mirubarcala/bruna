<?php

require 'helpers.php';
require 'classes/Validator.php';
require 'classes/UserFactory.php';
require 'classes/Database.php';
require 'classes/DBJSON.php';
require 'classes/HashPassword.php';
require 'classes/User.php';
require 'classes/Session.php';
require 'classes/Auth.php';
require 'classes/BaseMYSQL.php';
require 'classes/Querys.php';
/*require 'Classes/Product.php';
require 'Classes/Category.php';
require 'Classes/Cart.php';*/

Session::start();

$host = "localhost";
$bd = "ecommerce";
$user = "root";
$password = "root";
$puerto = "8889";
$charset = "utf8mb4";

$pdo = BaseMYSQL::conexion($host,$bd,$user,$password,$puerto,$charset);


$validator = new Validator();
$factory = new UserFactory();
//$db = new DBJSON('users.json');
$auth = new Auth();
