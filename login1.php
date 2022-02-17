<?php
require ("connection.php");

if(isset($_POST['submit'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from admin where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$query);
    
    if(mysqli_num_rows($result)==1){
        header("location:admin1/index.php");
        exit();
    }
    else{
        require ("login.php");
       $error="echo 'You Have Entered Incorrect Password'";
        exit();
    }
        
}
?>