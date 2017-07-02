<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$dbhost = "localhost";
		$dbuser = "pranith";
		$dbpass = "pranith";
		if($_POST["action"]=="login"){
		  $username = $_POST["rollno"];
		  $password = $_POST["pwd"];
			$style1='"display:block"';
		  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		  if(! $conn ){
		    die("Could not connect: ".mysqli_error($conn));
		  }
		  //echo "Connected successfully<br/>";
		  mysqli_select_db($conn, "student_portal");
		  $sql = "select * from login where ROLLNO = '".$username."';";
		  $retval = mysqli_query($conn, $sql);
		  if(!$retval){
		    die("Could not register".mysqli_error($conn));
		  }
		  $result = mysqli_fetch_array($retval);
		  if($password==$result["PASSWORD"]){
		    //$msg1 = "Login successful<br/>";
				session_start();
				$_SESSION["username"]=$username;
				$_SESSION["password"]=$password;
				header('Location:welcome.php');
		  }
		  else {
		    $msg1 = "*Incorrect username or password<br/>";
		  }
		  mysqli_close($conn);
		}
		else if($_POST["action"]=="register"){
		  $rollno = $_POST["rollno"];
		  $name = $_POST["name"];
		  $password = $_POST["psw"];
			$style2='"display:block"';
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
		  $msg2 = "Registered successfully";
		  mysqli_close($conn);
		}
	}
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Project Portal</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php"></a>
			</div>
			<ul id="navigation">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="box">
		<div class="clearfix">
			<img src="images/comp.png" alt="Img" height="342" width="368">
			<div>
				<h1>CBIT Student Project Portal</h1>
				<h2>Web-technologies mini project</h2>
				<p>
					Log into your account here !</br><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
				</p>
				<p>
					Create your account to enjoy the service !</br><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up!</button>
				</p>


				<div id="id01" class="modal" style=<?php echo $style1?>>
					<form class="modal-content animate" method="post" action="<?php $PHP_SELF?>">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>

						<div class="container">
							<input type="hidden" name="action" value="login">
							<label><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="rollno" required>

							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="pwd" required>

							<button type="submit">Login</button>
							<?php echo $msg1?>
							<input type="checkbox" checked="checked"> Remember me
						</div>

						<div class="container" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>

				<div id="id02" class="modal" style=<?php echo $style2?>>
					<form class="modal-content animate" method="post" action="<?php $PHP_SELF?>">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>

						<div class="container">
							<input type="hidden" name="action" value="register">
							<label><b>Roll number</b></label>
							<input type="text" placeholder="Enter your Roll number" name="rollno" required>

							<label><b>Name</b></label>
							<input type="text" placeholder="Enter a valid Username" name="name" required>

							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required>

							<label><b>Repeat Password</b></label>
							<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

							<button type="submit">Sign Up</button>
							<?php echo $msg2?>
						</div>

						<div class="container" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<div id="contents">
		<div id="tagline" class="clearfix">
			<h1>Upload and Stream through your Projects</h1>
			<div>
				<p>
					This project portal helps students to upload their projects and save them.
				</p>
				<p>
					Faculty can have a look at the student projects and mark grades !
				</p>
				<p>
					This website is aimed to bridge the gap between students and provide a solution as such.
				</p>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="www.cbit.ac.in" class="cbit"></a>
			</div>
			<p>
				developed by P Jitendra Kalyan, R Pranith Kumar.
			</p>
		</div>
	</div>

<script>
	var modal1 = document.getElementById('id01');
	var modal2 = document.getElementById('id02');
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal1) {
			modal.style.display = "none";
		}
		if (event.target == modal2) {
			modal.style.display = "none";
		}
	}
</script>
</body>
</html>
