<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from user where id = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:user.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:user.php");
        }

?>