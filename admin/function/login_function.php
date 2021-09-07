<?php 
session_start();

$host="localhost";
$user="root";
$password="";
$db="onlinemed";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);

    $_SESSION['username']=$username;
    if(mysqli_num_rows($result)==1){
        header("location: index.php");
         echo $_SESSION['username'];
         
         exit();
         
        
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>