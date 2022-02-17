<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from contact where id = '".$UserID."'";
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