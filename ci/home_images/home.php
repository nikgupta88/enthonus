
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

</head>
<body HEIGHT=100% style="background-color:#d8d8d8;margin:auto" >

<style>

h4{
 color: white;
}
</style>


<table border=0 height = 20% width=100% cellspacing="0" cellpadding="0">
<tr  background="home images/12.jpg" height=8% width=10% >
<td width=20%>><img src="home images/spices.jpg" alt="Test Image" height=10% width=60% /> 
 </td>
<td colspan=2 ><h1 > </h1>
 </td>
<td colspan=2 >
<form style="color:white" action="select.php" method="post">
User name: <input type="text" name="user" /><br>
Password&nbsp : <input type="password" name="pass" />
<center><input type="submit" name="submit" value="submit" /></center>
&nbsp&nbsp<a href="abc.php" style="color:white">Create an account</a>
&nbsp&nbsp&nbsp <a href="abc.php" style="color:white"> Forgot password</a>


</form>
</td>
</tr>


<tr height=2% bgcolor=black>
<td >
</td>

<td WIDTH=10%><b><H4><a href="home.php" style="color:white"><center>HOME</a>
</td>
<td WIDTH=10%> <B><H4><a href="aboutus.php" style="color:white"><center>ABOUTUS</a>
</td>
<td WIDTH=10%> <b><H4><a href="contact.php" style="color:white"><center>CONTACT</a>
</td>

</tr>

</TABLE>

<center><h2>
<?php
session_start();

		$servername = "localhost";
		$username = "root";
		$password = "123456";
		$dbname = "nikhil";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT content,text1  FROM manage where id=1";
		
		$result = mysqli_query($conn, $sql);

			
		
		
		$row = mysqli_fetch_assoc($result);

			echo $row["text1"]."<br>";
		
			echo "<img src='images/".$row["content"]."' height=40% width=40%>";
			
			
			
			
		


		



?>	






</h2></center>

	
</body>
</html>
