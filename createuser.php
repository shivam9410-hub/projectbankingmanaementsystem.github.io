<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    <
</head>

<body  class="bg-light">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('USER CREATED SUCCESSFULLY');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class=" formheading text-center pt-4 color-white"  id="formh">Create a User</h2>
        <br>

 <div class="container-fluid text-center">
  <div class="row text-center bg-dark">
    <div class="col-sm-12  col-md-6 col-lg-6 p-4">
   <img src="img/abc.gif" class="img-fluid h-100">
    </div>
    <div class="col-sm-12   col-md-6 col-lg-6  p-5 text-center align-items-center justify-content-center" >
       <form class="form-group" method="post">
            <div class="form-group p-3">
              <input class="form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="form-group p-3">
              <input class="form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="form-group p-3">
              <input class="form-control border-radius-round" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="form-group button p-3">
              <input class="form-button btn-success p-2" type="submit" value="CREATE" name="submit"></input>
              <input class="form-button btn-danger p-2" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
    </div>
  </div>
 </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>