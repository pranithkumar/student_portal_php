<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Project Portal</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo"><a></a></div>
			<ul id="navigation">
				<li>
					<h1>CBIT STUDENT PROJECT PORTAL</h1>
				</li>
				<li class="active">
					<a href="Logout">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="upload-box">
		<div class="u-box">
			<h1>Upload Window</h1>
			<div id="form-style">
				<form method="post" action="file_upload.php" enctype="multipart/form-data">
					<label><b>Project-ID</b></label>
						<input type="text" placeholder="Enter project-ID" name="pid" required></br>
					<label><b>Description</b></label>
						<textarea placeholder="Give a discription" name="des" required></textarea></br>
					<label>File</label>
						<input type="file" name="projfile" id="projfile"/>
					<button type="submit">Upload here !</button>
				</form>
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

</body>
</html>
