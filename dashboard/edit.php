
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<!-- REGISTER FORM -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4">Update</h3>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control" >
                        </div>
                         <div class="mb-3">
                            <label>Gender</label>
                            <select name="gender" id="gender" class="form-control" >
                                <option value="" disabled selected>Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" >
                        </div>
                        <button type="submit" name="update" class="btn btn-success w-100">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    include("../db.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $select = "SELECT * FROM `session_tb` WHERE id='$id'";
        $respones = $con->query($select);
        $row = $respones->fetch_assoc();
    }
    if(isset($_POST['update'])){
        try{
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $update = "UPDATE `session_tb` SET `fullname`='$fullname',`gender`='$gender',`email`='$email',`password`='$password' WHERE id='$id'";
        $con->query($update);
        if($con){
            echo"<script>
            alert('data updated successfully');
            window.location.href='index.php';
            </script>";
            }
        }catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }
    
?>
  