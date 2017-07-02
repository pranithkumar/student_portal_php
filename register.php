<?php
  $dbhost = "localhost";
  $dbuser = "pranith";
  $dbpass = "pranith";
  $rollno = $_POST["rollno"];
  $name = $_POST["name"];
  $password = $_POST["psw"];
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  if(! $conn ){
    die("Could not connect: ".mysqli_error($conn));
  }
  //echo "Connected successfully<br/>";
  mysqli_select_db($conn, "student_portal");
  $sql = "insert into login(NAME,PASSWORD,ROLLNO) values('".$name."','".$password."','".$rollno."');";
  $retval = mysqli_query($conn, $sql);
  if(!$retval){
    die("Could not register".mysqli_error($conn));
  }
  echo "Registered successfully";
  mysqli_close($conn);
?>
