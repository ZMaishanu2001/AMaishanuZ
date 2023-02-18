<?php
// THIS IS A CONNECTION TO CONNECT SECTION
	include "connect.php";
?>
<?php	
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$area=$_POST['area'];
				
			echo "Welcome ".$fname." ".$lname." ".$email." ".$area;
		$result=mysql_query("INSERT INTO message (fname, lname, email, area) VALUES('{$fname}', '{$lname}', '{$email}', '{$area}')") or die (mysql_error());
		if(!$result)
		{
			echo<<<_end
				<script>
					var answer=confirm("Admin not ssuccesfully create");
					if(!answer)
					{
							echo "Your Message not succesfully";
						}
						else
						{
							echo "Your Message was succesfully created";
						}
					{
						window.location="a_admin.php";
					}
					else
					{
						window.location="a_admin.php";
					}
				</script>
_end;
			}
			else
			{
				header("location:success.php");
				//header("location:admin_home.php");
			}
						
						
			}
?>