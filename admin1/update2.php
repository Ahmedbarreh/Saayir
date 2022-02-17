<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = " update contact set username = '".$UserName."', email='".$UserEmail."',subject='".$subject."', message = '".$message."' where id='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:contact.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else 
    {
        header("location:contact.php");
    }


?>