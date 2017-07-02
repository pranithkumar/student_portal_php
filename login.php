<?php
  $dbhost = "localhost";
  $dbuser = "pranith";
  $dbpass = "pranith";
  $username = $_POST["rollno"];
  $password = $_POST["pwd"];
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  if(! $conn ){
    die("Could not connect: ".mysqli_error($conn));
  }
  echo "Connected successfully<br/>";
  mysqli_select_db($conn, "student_portal");
  $sql = "select * from login where ROLLNO = '".$username."';";
  $retval = mysqli_query($conn, $sql);
  if(!$retval){
    die("Could not register".mysqli_error($conn));
  }
  $result = mysqli_fetch_array($retval);
  if($password==$result["PASSWORD"]){
    echo "Login successful";
  }
  else {
    echo "Incorrect username or password";
  }
  mysqli_close($conn);
?>
