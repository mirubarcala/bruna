<?php

 function dump($param)
{
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
} 
 
function dd($param)
{
    die(dump($param));
}

function redirect($location)
{
    header('Location:' . $location);
    exit;
}

function old($field)
{
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
}

function check()
{
    return isset($_SESSION['email']);
}

function guest()
{
    return !check();
}