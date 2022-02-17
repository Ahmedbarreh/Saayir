<?php

    require ("connection.php");
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']))
        {
            echo ' Please Fill in the Blanks';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $query = " insert into contact (username,email,subject,message) values('$UserName','$UserEmail','$subject','$message')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:contact.php");
            }
            else
            {
                echo 'Please Check Your Query';
            }
        }
    }
    else
    {
        header("location:contact.php");
    }



?>