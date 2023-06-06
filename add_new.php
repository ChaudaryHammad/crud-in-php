
<?php
include "db_connection.php";
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crudtable`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";
     
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location: index.php?msg=New Record Created Successfully");
    }else{
        echo "Failed : ".mysqli_error($conn);
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud Application</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
 
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573"> 
PHP Complete CRUD Application
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="muted">Complete the form below to add a new user</p>
    </div>
</div>

<div class="container d-flex justify-content-center">
<form action="" method="post" style="width:50vw;min-width:300px;">
<div class="row mb-3">
    <div class="col">
        <label for="" class="form-label">First Name:</label>
        <input type="text" class="form-control" name="first_name" placeholder="Muhammad">
    </div>

    <div class="col">
        <label for="" class="form-label">Last Name:</label>
        <input type="text" class="form-control" name="last_name" placeholder="Hammad">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="abc@gmail.com">
    </div>

    <div class="form-group mb-3">
        <label for="">Gender:</label> &nbsp;
        <input type="radio" name="gender" class="form-check-input" id="male" value="male">
        <label for="male" class="form-input-label">Male</label>
       &nbsp;
        <input type="radio" name="gender" class="form-check-input" id="female" value="female">
        <label for="female" class="form-input-label">Female</label>
    </div>

<div>
    <button type="submit" class="btn btn-success" name="submit">Save</button>

    <a href="index.php" class="btn btn-danger">Cancel</a>
</div>


</form>
</div>
</div>


<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>