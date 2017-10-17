<?php
session_start();

if(isset($_POST['login']))
	//echo "<script> alert('registration succesfully')</script>";
?>
<html>
<head>
<title>TOP INDIAN SPICES
</title>
<body bgcolor=white height=200% width=100%>
<table border=0 height = 200% width=100% cellspacing="0" cellpadding="0">
<tr height=10% background="dry fruits images/12.jpg" height=10% width=10% >
<td width=10%>
 </td>
<td colspan=7 ><h1 ><img src="dry fruits images/main.jpg" alt="Test Image" height=20% width=25% /> </h1>
 </td>
 <td colspan=2>
 <?php

echo	"<center style=color:white valign=bottom><h3>Welcome to<br>Mr." . $_SESSION["nam"];

?>
<form style="color:white" action="home.php" method="post">
<center><input type="submit" name="login" value="logout" /></center>
</form>

</tr>


<tr height=2% bgcolor=black>
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
<td WIDTH=10%><b><H4><a href="loginhome.php" style="color:white"><center>
</td>
</tr>

<tr>
<td rowspan=7 colspan=2> 
</td>
<td height=20% width=11% ><a href="Almond nut(baadam).php" style="text-decoration:none"><img src="dry fruits images/36.jpg"  width=100% >
</td>
<td height=20% width=11% ><a href="Cashew nut(kaaju).php" style="text-decoration:none"><img src="dry fruits images/37.jpg"  width=100% >
</td>
<td  height=20% width=11% ><a href="chestnut(akhrot).php" style="text-decoration:none"><img src="dry fruits images/38.jpg" width=100% >
</td>
<td height=20% width=11% ><a href="coconut(narial).php" style="text-decoration:none"><img src="dry fruits images/39.jpg" width=100% height=60%>
</td>
<td height=20% width=11% ><a href="coconut.php" style="text-decoration:none"><img src="dry fruits images/40.JPG" width=100% height=6.5%>
</td>
<td height=20% width=11% ><a href="chiroji.php" style="text-decoration:none"><img src="dry fruits images/41.jpg" width=100% >
</td> 
<td height=20% width=11% ><a href="kismis.php" style="text-decoration:none"><img src="dry fruits images/42.jpg" width=100% height=48%>
</td>
<td height=20% width=11% ><a href="makhaana.php" style="text-decoration:none"><img src="dry fruits images/45.jpg" width=100% height=40% >
</td>

</tr>

<tr>
<td height=5% width=11% align=middle><h4><b><center><a href="Almond nut(baadam).php" style="text-decoration:none">Almond nut(baadam)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg
 </center>
<td height=5% width=11% align=middle><h4><b><center><a href="Cashew nut(kaaju).php" style="text-decoration:none">
Cashew nut(kaaju)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg</br></BR> 

<form style="color:white" action="logindryfruits.php" method="post">
<input type='hidden' name='submitted' id='submitted' value='1'/>
 <input type='submit' name='buy' value='BUY NOW' /><form>
 </center> 
 
 
</td>


<td height=5% width=11% align=middle><h4><b><center><a href="chestnut(akhrot).php" style="text-decoration:none">
Chestnut(akhroot)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center> 
</td>
<td height=5% width=11% align=middle><h4><b><center><a href="coconut(narial).php" style="text-decoration:none">
coconut(naarial)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center> 
</td>
<td height=5% width=11% align=middle><h4><b><center><a href="coconut.php" style="text-decoration:none">
coconut(naarial golaa)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center>
</td>
<td height=5% width=11% align=middle><h4><b><center><a href="chiroji.php" style="text-decoration:none">
Cudpahnut(chiroji)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center>
</td>
<td height=5% width=11% align=middle><h4><b><center><a href="kismis.php" style="text-decoration:none">
Currant(kismiss)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center>
</td>
<td height=5% width=11% align=middle><h4><b><center><a href="makhaana.php" style="text-decoration:none">
Lotus Seeds Pop(makhaana)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center>
</td>
</tr>

<tr>

<td height=20% width=11% ><a href="chuaara.php" style="text-decoration:none"><img src="dry fruits images/44.jpg" width=100% height=10%> 
</td>
<td height=20% width=11% ><a href="buylogin.php" style="text-decoration:none"><img src="dry fruits images/46.jpg" width=100% height=40%> 
</td>
<td height=20% width=11% ><a href="buylogin.php" style="text-decoration:none"><img src="dry fruits images/47.jpg" width=100% > 
</td>
<td height=20% width=11% ><a href="buylogin.php" style="text-decoration:none"><mg src=.jpg width=100% >
</td>
<td height=20% width=11% ><mg src=.png width=100% >
</td>
<td height=20% width=11% ><mg src=.jpg width=100% >
</td>
<td height=20% width=11% ><mg src=.jpg width=100% >
</td>
<td>
</td>
</tr>

<tr>
<td height=5% width=11% align=middle><h4><b><center><a href="buylogin.php" style="text-decoration:none">
Dates Dried(chuaara)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center>
</td>
<td height=5% width=11% align=middle><h4><b><center><a href="buylogin.php" style="text-decoration:none">
Fig(anjeer)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center>
</td>
<td height=5% width=11% align=middle><h4><b><center><a href="buylogin.php" style="text-decoration:none">
Peanuts(muhfali)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br>-200 rs/kg </center>
</td>
<td height=5% width=11% align=middle><h4><b><center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br> </center>
</td>
<td height=5% width=11% align=middle><h4><b><center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br> </center>
</td>
<td height=5% width=11% align=middle><h4><b><center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br> </center>
</td>
<td height=5% width=11% align=middle><h4><b><center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br></br> </center>
</td>
<td>
</td>
</tr>

<tr>
<td > 
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
</tr>

<tr>
<td height=5%> 
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
</tr>

<tr>
<td > 
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
</tr>

<tr background="dry fruits images/12.jpg">
<td height=8%> 
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
</tr>

</body>
</head>
</html>
