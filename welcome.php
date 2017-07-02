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
	<div id="box">
		<div class="clearfix">
			<div>
				<h3>Welcome <?php
        session_start();
        echo $_SESSION["username"];?></h3></br>
				<h2>You can upload, download and view others projects as well</h2>
				</br></br></br></br>
				<h2>Your Projects...</h2>
			</div>
			<div id="listele">
				<div>
				<ul id="items">
					<li>
						<a href="">First</a>
					</li>
					<li>
						<a href="">Second</a>
					</li>
				</ul>
				</div>
			</div>
			<!--<div>
			<div id="listele">
				<div>
				<ul id="items">
				<%try
				{
					Class.forName("oracle.jdbc.driver.OracleDriver");
					Connection connection=null;
					connection =DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","pranith","pranith");
					if (session == null || session.getAttribute("username") == null)
						response.sendRedirect("index.html");
					String username = (String)session.getAttribute("username");
					Statement statement = connection.createStatement();
					String sql="Select PROJECTID from MAINT where ROLLNO="+username;
					ResultSet rs = statement.executeQuery(sql);
					while(rs.next())
					{
						out.println("<li><a href='ViewProjects?param="+rs.getString(1)+"'>"+rs.getString(1)+"</a></li>");
					}
				}
				catch (Exception e)
				{
					e.printStackTrace();
				}
				%>
				</ul>
				</div>
			</div>
		</div>-->
	</div>
	<div id="contents">
		<div id="tagline" class="clearfix">
			<h1>Upload and Stream through your Projects</h1>
			<div id="listlink">
				<div>
				<ul id="links">
					<li>
						<h3>Upload your files Here !!</h3>
					</li>
					<button onclick="document.location='upload_form.php'" style="width:auto;">Upload</button>
					<li>
						<h3>Serach through the Projects</h3>
					</li>
					<form method="get" action="ProjectList.jsp">
						<button type="submit" onclick="" style="width:auto;">Search</button>
					</form>
				</ul>
				</div>
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
