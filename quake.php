<html>
    <head>
<title>USER LOGIN AND REGISTRATION</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="saf.css">
<link rel="icon" type="image" href="twine.jpg">
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
<div class="col-md-6 login-left">
    <h2>Login here</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-control" required autocomplete="off">
 </div>
 <div class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-control" required>
 </div>
<button type="submit" class="btn btn-primary"  name="login">Login</button>
</form>

<?php

$connection = new mysqli("localhost","root","","epillo");

if (isset($_POST['login'])) {
        
  $user = $_POST['user'];
  $password = $_POST['password'];

  $query = "SELECT * FROM register WHERE user='$user' AND password='$password'";
  $result = $connection -> query($query);

  $exist = mysqli_num_rows($result);

  if ($exist == true) {
    echo ("<meta http-equiv='refresh' content='0;URL=form.php'>");
  } else {
    echo "Wrong username or password. Try again..";
  }

}

?>


</div>
<div class="col-md-6 login-right">
    <h2>Register here</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-control" required autocomplete="off">
 </div>
 <div class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-control" required>
 </div>
 <button type="submit" class="btn btn-primary" name="register">Register</button>
</form>

<?php

$connection = new mysqli("localhost","root","","epillo");

if (isset($_POST['register'])) {
    
    $user = $_POST['user'];
    $password = $_POST['password'];

        $query = "INSERT INTO register (user, password)
                                VALUES ('$user','$password')";

        $result = $connection -> query($query);

        if ($result) {

            echo "Successfully registered. You can now login....";

        } else {
            echo "Sorry, we encountered a problem";
        }

    }



?>
</div>

    </div>

</div>
</body>
</html>