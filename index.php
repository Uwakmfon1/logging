<?php
require "index.view.php";
require "functions.php";
// require "Router.php";
// require "routes.php";

echo "welcome to logging platform"."<br>". PHP_EOL;


// echo $username;
// echo $password;

$db = new mysqli("localhost","root","","logging");

if($db->connect_errno){
    echo "Failed to connect to mysql: " . $db->connect_errno;
    exit();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password =$_POST['password'];

$sql = "select * from users where username = '$username' and password='$password'";
$result = mysqli_query($db,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
    header('Location: /home.php');
}else{
    echo "failure";
}

}