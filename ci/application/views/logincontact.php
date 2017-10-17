
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
<tr  background="http://localhost/ci/home_images/12.jpg" height=8% width=10% >
<td width=20%>><img src="http://localhost/ci/home_images/spices.jpg" alt="Test Image" height=10% width=60% /> 
 </td>
<td colspan=2 ><h1 > </h1>
 </td>
<td colspan=2 >
<?php

echo	"<center style=color:white valign=bottom><h3>Welcome to<br>Mr." .$this->session->userdata('name');
?>
<form action="home" method="post">
<input type="submit" value="logout" name="logout">
</form>
</td>

</tr>


<tr height=2% bgcolor=black>
<td >
</td>

<td WIDTH=10%><b><H4><a href="loginhome" style="color:white"><center>HOME</a>
</td>
<td WIDTH=10%> <B><H4><a href="loginaboutus" style="color:white"><center>ABOUTUS</a>
</td>
<td WIDTH=10%> <b><H4><a href="logincontact" style="color:white"><center>CONTACT</a>
</td>

</tr>

</TABLE>

<center><h2>