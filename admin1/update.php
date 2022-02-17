<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];

        $query = " update admin set username = '".$UserName."', email='".$UserEmail."',password='".$UserAge."' where id='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:index.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:index.php");
    }


?>