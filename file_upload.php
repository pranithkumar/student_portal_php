<?php
  session_start();
  $dbhost = "localhost";
  $dbuser = "pranith";
  $dbpass = "pranith";
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  mysqli_select_db($conn, "student_portal");
  $username = $_SESSION["username"];
  $projectid = $_POST["pid"];
  $description = $_POST["des"];
  $filename = $_FILES['projfile']['name'];
  $tmpname  = $_FILES['projfile']['tmp_name'];
  $filesize = $_FILES['projfile']['size'];
  $filetype = $_FILES['projfile']['type'];
  $fp = fopen($tmpname, 'r');
  $content = fread($fp, filesize($tmpname));
  $content = addslashes($content);
  fclose($fp);
  //echo $username."<br/>".$projectid."<br/>".$content."<br/>".$filename."<br/>".$filetype."<br/>".$filesize."<br/>".$description."<br/>";
  $sql = "insert into maint (ROLLNO,PROJECTID,FILEDATA,FILENAME,FILETYPE,FILESIZE,DESCRIPTION) values ('".$username."','".$projectid."','".$content."','".$filename."','".$filetype."','".$filesize."','".$description."');";
  $retval = mysqli_query($conn, $sql);
  if(!$retval){
    die("Could not register :".mysqli_error($conn));
  }
  header('Location:welcome.php');
 ?>
