<?php 
include_once("connection.php");
session_start();

if(isset($_POST['submit']))
{
    $user = $_POST['uname'];
    $user = mysqli_real_escape_string($conn,$user); 

    $pwd = $_POST['psw'];
    $pwd = mysqli_real_escape_string($conn,$pwd); 

    $query = "SELECT * FROM user WHERE user='$user' && password='$pwd'";

    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if($total==1)
    {
     $_SESSION['user_name'] = $user;

     echo "<script>window.location.assign('admin/index.php')</script>";                                                                                         
    }
     else
     {
        echo '<script>alert("Username & Password not matching...!")</script>';
        echo "<script>window.location.assign('index.php')</script>";

     }                            
}     





?>