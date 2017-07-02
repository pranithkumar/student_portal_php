<html>
  <head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Project Portal</title>
    <link rel='stylesheet' href='css/style.css' type='text/css'>
  </head>
  <body>
    <div id='header'>
      <div>
        <div class='logo'>
          <a></a>
        </div>
        <ul id='navigation'>
          <li><h1>CBIT STUDENT PROJECT PORTAL</h1></li>
          <li class='active'><a href='Logout'>Logout</a></li>
        </ul>
      </div>
    </div>
    <div id='upload-box'>
      <div class='u-box'>
        <h1>Perform Actions on your Project here ...</h1>
        <div id='form-style'>
          <?php
            session_start();
            $dbhost = "localhost";
            $dbuser = "pranith";
            $dbpass = "pranith";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            mysqli_select_db($conn, "student_portal");
            $username = $_SESSION["username"];
            $filename = $_GET["name"];
            $sql = "select ROLLNO,PROJECTID,FILENAME,DESCRIPTION from maint where FILENAME='".$filename."';";
            $retval = mysqli_query($conn, $sql);
            while (list($rollno,$projectid,$filename,$description)=mysqli_fetch_array($retval)) {
              ?>
                <label><h3>ROLLNO</h3></label><?php echo $rollno?><br/>
                <label><h3>PROJECTID</h3></label><?php echo $projectid?><br/>
                <label><h3>FILENAME</h3></label><?php echo $filename?><br/>
                <label><h3>DESCRIPTION</h3></label><?php echo $description?><br/>
                <a href="file_download.php?projectid=<?php echo $projectid;?>"><button>Download here</button></a><br/>
                <label><h3>Do you want to remove your project?</h3></label></br>
                <a href="file_delete.php?projectid=<?php echo $projectid;?>"><button>Delete Here !!</button></a><br/>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
    <div id='footer'>
      <div class='clearfix'>
        <div id='connect'>
          <a href='https\\:www.cbit.ac.in' class='cbit'></a>
        </div><p>developed by P Jitendra Kalyan, R Pranith Kumar.</p>
      </div>
    </div>
  </body>
</html>
