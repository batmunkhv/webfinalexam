<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dname = "cs2a";


$con = mysqli_connect($host,$user,$password,$dname);

if(!$con){
    die("Connection Failed" . mysqli_connect_error());
}else{
    echo "Connected!";
}

if(isset($_POST['reg_submit'])){
    $mail = $_POST['umail'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO users (email,password) VALUES('$mail','$password')";

    if(mysqli_query($con,$sql)){
        echo "New user successfully added!";
    }else{
        echo "Error: " . $sql . " " . mysqli_error($con);
    }
}

if(isset($_POST['but_submit'])){
    $umail = mysqli_real_escape_string($con,$_POST['txt_mail']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pass']);
    if($mail != "" && $password !=""){
        $sql_query = "SELECT count(*) AS id FROM users WHERE email='".$mail."' AND password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['id'];

        $pmission = "SELECT id, permission FROM users WHERE email='".$mail."' AND password='".$password."'";
        $pmresult = mysqli_query($con,$pmission);
        $pmrow = mysqli_fetch_array($pmresult);


        if($count>0){
            $_SESSION['permission'] = $pmrow['permission'];
            $_SESSION['umail'] = $mail;
            header('Location: main.php');
        }else{
            echo "Invalid username and password!";
        }
    }
}


?>