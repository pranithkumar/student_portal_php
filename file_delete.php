<?php
  $dbhost = "localhost";
  $dbuser = "pranith";
  $dbpass = "pranith";
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  mysqli_select_db($conn, "student_portal");
  if(isset($_GET["projectid"]))
  {
    $id = $_GET["projectid"];
    $query = "delete from maint where PROJECTID = '$id';";
    $result = mysqli_query($conn,$query) or die('Error, query failed');
    header('Location:welcome.php');
  }
?>
