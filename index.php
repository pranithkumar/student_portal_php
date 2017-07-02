<!DOCTYPE HTML>
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


				<div id="id01" class="modal">
					<form class="modal-content animate" method="post" action="login.php">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>

						<div class="container">
							<label><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="rollno" required>

							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="pwd" required>

							<button type="submit">Login</button>
							<input type="checkbox" checked="checked"> Remember me
						</div>

						<div class="container" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>

				<div id="id02" class="modal">
					<form class="modal-content animate" method="post" action="register.php">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>

						<div class="container">
							<label><b>Roll number</b></label>
							<input type="text" placeholder="Enter your Roll number" name="rollno" required>

							<label><b>Name</b></label>
							<input type="text" placeholder="Enter a valid Username" name="name" required>

							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required>

							<label><b>Repeat Password</b></label>
							<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

							<button type="submit">Sign Up</button>
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
