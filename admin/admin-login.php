<?php 
session_start();

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"onlinemed");

if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);

    $_SESSION['username']=$username;
    if(mysqli_num_rows($result)==1){
         echo $_SESSION['username'];
         header("Location: index.php");
         exit();
         
        
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
