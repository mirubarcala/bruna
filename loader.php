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
require 'classes/Cookie.php'; 
/* para mas adelante cuando instanciemos productos */
/* require 'classes/Product.php';
require 'classes/Category.php';
require 'classes/Cart.php'; */


Session::start();

$validator = new Validator();
$factory = new UserFactory (); 
$db = new DBJSON ('users.json');
$auth = new Auth(); 

