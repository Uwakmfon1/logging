<?php

require "signup.view.php";
require "functions.php";

// if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    $email = $_POST['email'];
    // dd($email);

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        die("valid email required");
    }
   
    if(!preg_match("/[a-z]/i",$_POST["password"])){
        die('password must contain at least one letter');
    }
    if(!preg_match("/[0-9]/",$_POST["password"])){
        die("password must contain at least one number");
    }

    if(strlen($password)<8){
        die("password must be at least 8 characters long");
    }

    if($password === $password2){
        $mysqli = new mysqli("localhost","root","","logging");
        if(mysqli_connect_errno()){
        echo "failed to connect to db " . mysqli_connect_error();
    }
        $query = "INSERT INTO users (`username`, `email`, `password`) VALUES (?, ?, ?);";
        $stmt = $mysqli->stmt_init();
        $stmt->prepare($query);
        
        if(! $stmt->prepare($query)){
            die('sql error: '. $mysqli->error);
        }

        $stmt->bind_param("sss",
        $username,$email,$password);
        $stmt->execute();
        header("location: /index.php");
    }else{
        die("passwords do not match");
    }


   