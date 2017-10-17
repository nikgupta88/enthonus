<?php
session_start();
?>





<html>
<head>
<title>TOP INDIAN SPICES
</title>
</head>
<body bgcolor=white height=150% width=100%>
<table border=0 height = 100% width=100% cellspacing="0" cellpadding="0">
<tr height=7% background="home images/12.jpg" height=10% width=10% >
<td width=10%>
 </td>
<td colspan=7><h1 ><img src="dry fruits images/main.jpg" alt="Test Image" height=20% width=25% /> </h1>
 </td>
<td colspan=2>
<?php
if(isset($_POST['login']))
{
	 $_SESSION["nam"] =$_POST['username'];
echo	"<center style=color:white valign=bottom><h3>Welcome to<br>Mr." . $_SESSION["nam"];
}
else
echo	"<center style=color:white valign=bottom><h3>Welcome to<br>Mr." . $_SESSION["nam"];
	
?>
<form style="color:white" action="home.php" method="post">
<center><input type="submit" name="login" value="logout" /></center>
</form>
</td>
</tr>

<tr height=2% bgcolor=black
 >
<td colspan=2>
</td>

<td WIDTH=10%><b><H4><a href="loginhome.php" style="color:white"><center>HOME</a>
</td>
<td WIDTH=10%> <B><H4><a href="loginspicess.php" style="color:white"><center>SPICES
</td>
<td WIDTH=10%> <b><H4><a href="logindryfruits.php" style="color:white"><center>DRY FRUITS
</td>
<td WIDTH=10%><b><H4><a href="loginkiraana items.php" style="color:white"><center>KIRAANA ITEMS
</td>
<td WIDTH=10%><b><H4><a href="loginprovision items.php" style="color:white"><center>PROVISION ITEM
</td>
<td WIDTH=10%><b><H4><a href="logingeneral store items.php" style="color:white"><center>GENRAL STORE ITEMS
</td>
<td WIDTH=10%><b><H4><a href="loginhome.php" style="color:white"><center>
</td>
<td WIDTH=10%><b><H4><a href="loginhome.html" style="color:white"><center>
</td>
</tr>

<tr height=85% >
<td colspan=10 background="01.jpg">
<h1><b><center><valign="top">Your order has been submitted<br>Thanks for visiting this site</td>
</tr>
</table>
</body>
</html>