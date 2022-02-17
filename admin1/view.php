<?php 

    require_once("connection.php");
    $query = " select * from records ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered table-hover text-center">
                            <tr class="
                            ">
                                <td> User ID </td>
                                <td> User Name </td>
                                <td> User Email </td>
                                <td> User Age </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                                <td><a href="insert.php"><button class="btn btn-primary">add person</button></a></td>
                            </tr>

                            <?php 
                      
                                    
                                    while ($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['User_ID'];
                                        $UserName = $row['User_Name'];
                                        $UserEmail = $row['User_Email'];
                                        $UserAge = $row['User_Age'];

                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserAge ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>