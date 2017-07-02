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
	<div id="search-box">
		<div class="clearfix">
			<div id="contents">
				<h2 style="font-style : Lato-Thin ;">Search by Project Name...</h2>
				<div>
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here !!" title="Type in a name">
        <?php
          $dbhost = "localhost";
          $dbuser = "pranith";
          $dbpass = "pranith";
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
          mysqli_select_db($conn, "student_portal");
          $sql = "SELECT ROLLNO,PROJECTID,DESCRIPTION,FILENAME FROM maint;";
          $retval = mysqli_query($conn,$sql) or die('Error, query failed');
          ?>
          <table id='customers'>
            <?php
              while (list($rollno,$projectid,$description,$filename)=mysqli_fetch_array($retval)) {
            ?>
                <tr><td><?php echo $rollno?></td>
                    <td><?php echo $projectid?></td>
                    <td><?php echo $description?></td>
                    <td><a href="file_download.php?projectid=<?php echo $projectid;?>"><button><?php echo $filename?></button></a><br/></td></tr>
            <?php
              }
        ?>
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
	<script>
		function myFunction() {
		var input, filter, table, tr, td, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("customers");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) {
				if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				}
				else {
					tr[i].style.display = "none";
				}
			}
		}
	}
	</script>
</body>
</html>
