<?php
session_start();


?>

<script>
function gram()
{
	var gm=document.getElementById("gm");
	var kilo=document.getElementById("kilo");
	var msg=document.getElementById("msg");
	var rs=document.getElementById("rs");
	var t=parseInt(kilo.value)*200+((parseInt(gm.value)/100)*20);
	
	msg.innerHTML=kilo.value+"kg - "+gm.value+" gm";
	rs.innerHTML=t+"(rs)";
}
function cheakrs()
{
	var txt1=document.getElementById("gm");
	var txt2=document.getElementById("kg");
	var err=true;
	var x=parseInt(gm.value);
	var y=parseInt(kilo.value);
	if(!(x||y))
	{
			
			alert("weight is not empty");
			err=false;
			
	}
	
	return(err);
	
	
	
}

</script>



<html>
<head>
<title>TOP INDIAN SPICES
</title>
</head>
<body bgcolor=white height=150% width=100%>
<table border=0 height = 150% width=100% cellspacing="0" cellpadding="0">
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
<td WIDTH=10%><b><H4><a href="loginhome.php" style="color:white"><center>
</td>
</tr>

<tr heigh7=10%>
<td>
</td>
<td colspan=3 rowspan=4><img src="provision items/bourbon1 biscuits.jpg" width=90% height=70%> 
</td>
<td colspan=4><center><b><h2>b bisc-200 rs/kg</b></h2>
</td>
<td colspan=2>
</td>
</tr>

<tr height=10%>
<td>
</td>
<td colspan=4><b><h3><font color="red">TOTAL WEIGHT=</font><span id="msg"></span>
<b><h3><font color="red">TOTAL rupees=</font><span id="rs"></span>

</td>
<td colspan=2>
</td>
</tr>

<tr height=5%>
<td>
</td>
<td valign="bottom"><center><h4 style=color:white><font size="4" >
<form onclick="gram();" onsubmit="return cheakrs();">
&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="dropdown" id="kilo">
<option value="0">none</option>
<option value="1">1 kg</option>
<option value="2">2.5 kg</option>
<option value="5">5 kg</option>
<option value="10">10 kg</option>
<option value="50">50 kg</option>
<option value="100">100 kg</option>
</select>

</form>
</h4>
</td>
<td colspan=3>
<form onclick="gram();" onsubmit="return cheakrs();">
<select name="dropdown" id="gm">
<option value="0">none</option>
<option value="50" >50 gm</option>
<option value="100">100 gm</option>
<option value="250">250 gm</option>
<option value="500">500 gm</option>
</select>
</form>
</td>
<td colspan=2>
</td>
</tr>

<tr height=5%>
<td>
</td>
<td>
<form action='last.php' method="post" onsubmit="return cheakrs();"><center>
<input type="submit" value="cash on delievery" id="buy" ></input>
</form>
</td>
<td>
</td>
<td colspan=3>
</td>
<td colspan=2>

</td>
</tr>

<tr height=20%>
<td>
</td>
<td colspan=3>
</td>
<td colspan=4>
</td>
<td colspan=2>
</td>
</tr>

<tr >
<td>
</td>
<td colspan=3>
</td>
<td colspan=4>
</td>
<td colspan=2>
</td>
</tr>

