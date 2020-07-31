<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'paul');

$name = $_POST['user'];
$pass = $_POST['password'];

$query = "select * from usertable where name = '$name'";

$result = msqli_query($con, $query);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Already Taken";

}else {
    $reg= "insert into usertable(name, password) values( $name, $pass)";
     mysqli_query($con, $reg);
     echo "Registration Successfull" ;

}


?>