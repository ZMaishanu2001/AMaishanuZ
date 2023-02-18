 <html>
	<head><title>www.babandochikenrepublic.com</title>
		<style>
			a:link{color:white}
				a:visited{color:green;}
					a:hover{bacground-color:blue;
				color:blue;
			text-decoration:none;
		font-weight:bold;
	}
a:active{background-color:orange;}
	#img{
		position:absolute;
			top:32%;
				left:6%;
					height:50%;
				width:40%;
			}
		#form{
	position:absolute;
top:32%;
	left:50%;
		height:50%;
			width:40%;
				// background-color:#A1A1A1;
					}
						#login{
					position:absolute;
				top:16%;
			left:42%;
		height:12%;
	width:10%;
background-color:#ffffff;
	}
		#menu{
			position:absolute;
				top:0%;
					left:0%;
						height:12%;
					width:100%;
				background-color:#A1A1A1;
			}
		#link{
	position:absolute;
top:4%;
	left:70%;
		height:8%;
			width:30%;
				background-color:#A1A1A1;
					}
				</style></head>
			<?php include ('footer.php'); ?>
		<body>
	<div id="menu">
<h1><b><FONT COLOR="#ffffff" >Food Ordering System </font></b></h1>
	</div>
		<div id="link">
			<h2>
				|<A HREF="home.php" TARGET="WINDOW1"><B>Home</B></A>|
					|<A HREF="about.php" TARGET="WINDOW1"><B>About</B></A>|
				|<A HREF="order.php" TARGET="WINDOW1"><B>Order</B></A>|
			|<A HREF="track.php" TARGET="WINDOW1"><B>Track</B></A>|
		|<A HREF="admin.php" TARGET="WINDOW1"><B>Admin</B></A>|
	</h2>
</div>
	<div id="form">
		<form action ="admin.php" method="POST" onsubmit="return validate(this)" >
			<h1>Username</br></br><input type ="text" name="username" size="70%" placeholder="Enter Username" /></br>
				<h1>Password</br></br><input type ="password" name="password" size="70%" placeholder="Enter Password"/></br></br>
					<input type="submit" name="submit" value="Login" class="form-control btn btn-primary" autocomplete="off"/>
						</form>	
					</div>
				<div id="login">
			<h1><b><ul>Login</ul></b></h1>
		</div>
	<div id="img"><img src="img/4.jpg" width="100%" height="100%"></div>
</body>
	</html>
  		<script language= "JavaScript" type= "text/javascript">
			function validate(form){
				fail = validateUsername(form.username.value)
					fail += validatePassword(form.password.value)
						if (fail == "") return true
					else { alert(fail); return false }
				}
			function validateUsername(field){
		if (field == "") return "No username was entered.\n"
	return ""
}
	function validatePassword(field){
		if (field == "") return "No Password was entered.\n"
			return ""
				}
					//-->
				</script>
			<?php
		include "include/connect.php";
	if (isset ($_POST['submit']))
{
	$username=$_POST['username'];
		$password=$_POST['password'];
			echo "welcome ".$username." ".$password;
				$result=mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'") or die(mysql_error());
					if(mysql_num_rows($result) < 1)
						{
					echo<<<_end
				<script>
			var answer=confirm("Wrong username/password");
		if(!answer)
	{
window.location="admin.php";
	}
		else
			{
				window.location="admin.php";
					}
						</script>
_end;
					}
				else
			{
		header("location:Dashboad.php");
	}
}
	?>