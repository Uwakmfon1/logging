<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function confirmPasswords($password,$password2){
    $passwordOk="";

    if($password == $password2){
        $passwordOk = $password;
        return $passwordOk;
    }else{
       return 'Error, passwords do not match';  
    }
}