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
.table{
    width: 80%;
    height: auto;
    background-color: rgb(237, 233, 230);
    margin: 0 10%;
    padding: 15px 10px;
}	

</style>
</head>
<body bgcolor="#ffffff">
		<div class="navbar">
  <a href="index.php">Home</a>
  <a href="#about_me">About Me</a>
  <a href="#skills">Skills</a>
  <a href="n_admin.php">New Admin</a>
  <a href="#contact">Contact</a>
  <a href="a_admin.php">Admin</a>
</div>


<div class="table">
	<br><br>
<?php
	include "connect.php";
		$result=mysql_query("SELECT * FROM message");
		
		echo "<table width=\"80%\" align=center border=1 bgcolor=\"ffffff\">";
		
		echo "<tr><td width=\"1%\" align=center bgcolor=\"149014\">S/N.</td>
			 <td width=\"10%\" align=center bgcolor=\"149014\">FIRST NAME</td>
			 <td width=\"10%\" align=center bgcolor=\"149014\">LAST NAME</td>
			 <td width=\"10%\" align=center bgcolor=\"149014\">EMAIL</td>
			 <td width=\"50%\" align=center bgcolor=\"149014\">MESSAGE</td>";
			
					while($row=mysql_fetch_array($result))
					{
					
							$sn=$row['sn'];
						$fname=$row['fname'];
						$lname=$row['lname'];
					    $email=$row['email'];
						$area=$row['area'];
					    
																								
						echo "<tr><td align=center>
						<a href=\"view_m.php?sns=$sn&fnames=$fname&lnames=$lname&emails=$email&areas=$area\">$sn</a>
						
						<td>$fname</td><td>$lname</td><td>$email</td><td>$area</td>";
					}
					echo "</table>";
?>
</div>