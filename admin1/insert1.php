<?php

    require ("connection.php");
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['Password']))
        {
            echo ' Please Fill in the Blanks';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $password = $_POST['Password'];

            $query = " insert into user (username, email,password) values('$UserName','$UserEmail','$password')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:user.php");
            }
            else
            {
                echo 'Please Check Your Query';
            }
        }
    }
    else
    {
        header("location:user.php");
    }



?>