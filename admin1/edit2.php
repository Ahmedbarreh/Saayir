<?php 

    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " select * from contact where id='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['id'];
        $UserName = $row['username'];
        $UserEmail = $row['email'];
        $subject = $row['subject'];
        $message = $row['message'];
    }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>edit-admin</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-white text-center py-3"> Update administrator</h3>
                        </div>
                        <div class="card-body">

                            <form action="update2.php?ID=<?php echo $UserID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $UserName ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $UserEmail ?>">
                                <input type="text" class="form-control mb-2" placeholder="subject" name="subject" value="<?php echo $subject ?>">
                                <input height="100px !important" type="text" class="form-control mb-2" placeholder="Message" name="message" value="<?php echo $message ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>