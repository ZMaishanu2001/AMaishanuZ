<?php 
	//include'link/menu.php'
?>
<html>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
		background-image: url("backgrounds/bg_diag_wood.jpg");
		background-repeat: no-repeat;
		background-position: right top;
		margin-right: 10px;
		background-attachment: fixed;
		background-size: 100%, 100%;
	}
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: rgb(241, 181, 181);
  color: white;
}


.navbar{
    padding-left: 10%;
    padding-top: 2px;
    padding-bottom: 2px;
    position: fixed;
    top: 0;
    width: 100%;
}
	
	#form{
			position:absolute;
			top:30%;
			left:34.5%;
			height:43%;
			width:31%;
			background-image: url("backgrounds/rays-wood2.jpg");
			box-shadow:10px 10px 5px #888888;
			border-radius:15px 15px 15px 15px;
	}
	#note{
			position:absolute;
			top:3%;
			left:2%;
			height:30%;
			width:96%;
			background-image: url("backgrounds/bg_noise.jpg");
			//box-shadow:10px 10px 5px #888888;
			border-radius:15px 15px 15px 15px;
	}
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
#admin{
			position:absolute;
			top:35%;
			left:32%;
			height:7%;
			width:15%;
			background-color:#000000;
			border-radius:5px
	}		

</style>
</head>
		<body bgcolor="#ffffff">
		<div class="navbar">
  <a href="index.php">Home</a>
  <a href="#about_me">About Me</a>
  <a href="#skills">Skills</a>
  <a href="n_admin.php">New Admin</a>
  <a href="view_m.php">View Message</a>
  <a href="a_admin.php">Admin</a>
</div>
			
<?php
include "connect.php";
	if(isset($_POST['submit']))
	{
		$u_name=$_POST['u_name'];
		$pwd=$_POST['pwd'];
		
			echo "welcome user, ".$u_name." ".$pwd;
			
		$result=mysql_query("INSERT INTO adp (u_name, pwd) VALUES('{$u_name}', '{$pwd}')" );
		if(!$result)
		{
				echo<<<_end
				<script>
					var answer=confirm("Access Dynie");
					if(!answer)
					{
							echo "Access D";
						}
						else
						{
							echo "Admin was succesfully created";
						}
					{
						window.location="new_admin.php";
					}
					else
					{
						window.location="new_admin.php";
					}
				</script>
_end;
			}
			else
			{
				header("location:a_admin.php");
			}
						
						
			}
				
?>
			
						
													
		
		</body>
		
		
</html>









<html>

	
	<head>
<body>
	<fieldset id = "form"><b>
	<div id="note"><br /><font color="white"><center>*** El Maishanu View point ***</center></b><br/>
	&nbsp;&copy By Z Maishanu 2019</font>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</div>
	<form action ="a_admin.php" method="POST" >
	<br/><br/><br/><br/><br/><br/><br/><center>
				
				<div id="admin"><a href="login.php"><FONT COLOR="white"><b>Admin</b></FONT></a></div>
	</center>
		<table style="width:100%">
			  <tr>
					<th><h3><b>Username</th></b>
					<th><center><input type="text"name="u_name" size="25%" autofocus required ></th></center>		
				</tr>
				<tr>
					<td><h3><b><center>Password</center></b></td>
					<td><center><input type="password"name="pwd" size="25%" autofocus required ></td></center>		
				</tr>
		</table>	
		<b><center><input type = "submit" name ="submit" value = "Login"></center></b>
	</form>
	</fieldset>
</body>
</html>
			