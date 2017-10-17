<script>
function call()
{ var txt1=document.getElementById("pass1");
var txt2=document.getElementById("pass2");
var img=document.getElementById("img");
if(txt1.value==txt2.value)
{ img.src="pwd/tick.png";
}
else
{ img.src="pwd/crs.png";
}
}
</script>
<script>
function cheakpass()
{
	var txt1=document.getElementById("pass1");
	var txt2=document.getElementById("pass2");
	var err=true;
	if(txt1.value!=txt2.value)
	{
			alert("password is not same");
		err=false;
	}
	return(err);
	
	
	
}
</script>


<?php
session_start();
?>
<html>
<head>
<title>TOP INDIAN SPICES
</title>
<body bgcolor=white height=100% width=100%>
<table border=0 height = 100% width=100% cellspacing="0" cellpadding="0">
<tr height=10% background="dry fruits images/12.jpg" height=10% width=10% >
<td width=10%>
 </td>
<td colspan=7 ><h1 ><img src="dry fruits images/main.jpg" alt="Test Image" height=20% width=25% /> </h1>
 </td>
 <td colspan=2>
 <form style="color:white" action="loginhome.php" method="post" >
User name: <input type="text" name="loginuser" id='loginuser'/><br>
Password&nbsp : <input type="password" name="pass" id='pass' />
<center><input type="submit" name="submit" value="submit" /></center>
&nbsp&nbsp<a href="create an account.php" style="color:white">Create an account</a>
&nbsp&nbsp&nbsp <a href="spicess.html" style="color:white"> Forgot password</a>


</form>

</tr>


<tr height=2% bgcolor=black>
<td colspan=2>

</td>

<td WIDTH=10%><b><H4><a href="home.php" style="color:white"><center>HOME</a>
</td>
<td WIDTH=10%> <B><H4><a href="spicess.php" style="color:white"><center>SPICES
</td>
<td WIDTH=10%> <b><H4><a href="dryfruits.php" style="color:white"><center>DRY FRUITS
</td>
<td WIDTH=10%><b><H4><a href="kiraana items.php" style="color:white"><center>KIRAANA ITEMS
</td>
<td WIDTH=10%><b><H4><a href="provision items.php" style="color:white"><center>PROVISION ITEM
</td>
<td WIDTH=10%><b><H4><a href="general store items.php" style="color:white"><center>GENRAL STORE ITEMS
</td>
<td WIDTH=10%><b><H4><a href="home.php" style="color:white"><center>
</td>
<td WIDTH=10%><b><H4><a href="home.php" style="color:white"><center>
</td>
</tr>








<tr  width=100%>
<td width=100%  background="create an account images/ab.jpg" colspan=10>


<form id='register' action='loginhome.php' method='post' style=color:white onsubmit="return cheakpass();" valign=top>
<center>
<legend><H1>CREATE AN ACCOUNT</H1></legend><br></br><center>

<label for='name' ><h2>Your Full Name*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='name' id='name' minlength="3" Placeholder="min 3character" /><br></br>

<label for='email' >Email Address*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='email' name='email' id='email' minlength="5" Placeholder="@abcd.com"/><br></br>
 
<label for='username' >UserName*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='user' id='user' minlength="3" Placeholder="min 3character" /><br></br>

<label for='username' >mobile number*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='mobilenumber' id='mobilenumber' minlength="10" maxlength="10" Placeholder="max or min 10number"/><br></br>


 <label for='pincode' >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCity*/Pincode
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</label>

<select name="city" id="city">
<option value="agra" selected>Agra</option>
<option value="ajmer">Ajmer</option>
<option value="bhopal">Bhopal</option>
<option value="bombay">Bombay</option>
<option value="banglore">Banglore</option>
<option value="chennai">chennai</option>
<option value="delhi">Delhi</option>
<option value="dabra">Dabra</option>
<option value="gwalior">Gwalior</option>
<option value="manipur">Manipur</option>
<option value="nagpur">Nagpur</option>
<option value="pune">Pune</option>
</select>
<input required="true" type='text' name='pincode' id='pincode' minlength="6" maxlength="6" Placeholder="6digit only"/>



<br/>
<br>

<label for='username' >Permanent Address*&nbsp&nbsp:</label>
<input required="true" type='text' name='address' id='address' minlength="5" maxlength="50" Placeholder="max or min 10number"/><br></br>

<label for='username' >Password*&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='password' name='password' id='pass1' minlength="8" maxlength="50" Placeholder="max or min 10number"/><br></br>

Confirm password*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input required="true" type='password' name='password' id='pass2' minlength="8" maxlength="50" Placeholder="max or min 10number" onkeyup="call();" />
<img id="img" src=""><br>




 

 <input type='hidden' name='submitted' id='submitted' value='1'/>
 <input type='submit' name='login' value='Submit' />
 

 
</fieldset>
</form>
</td>

</tr>

</body>
</head>
</html>