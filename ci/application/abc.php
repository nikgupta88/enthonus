<html>
<head>
<title>create an account
</title>
<script>

function check(){

var pass=document.getElementById("address");
var cnfpass=document.getElementById("cnfaddress");
var aa=document.getElementById("01");
if(cnfpass.value!=pass.value)
aa.innerHTML = "wrong password";
else
aa.innerHTML="correct password";



}


</script>

</head>
<body bgcolor=white height=100% width=100%>
<table border=15 height = 100% width=100% cellspacing="0" cellpadding="0">
<tr height=100% width=100%>
<td width=100% height=100% background="create an account images/ab.jpg">


<form id='register' action='db.php' method='post' style=color:white " >
<center>
<legend><H1>CREATE AN ACCOUNT</H1></legend><br></br><center>
<label for='name' ><h2>Your Full Name*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='name' id='name' minlength="3" Placeholder="min 3character" /><br></br>
<label for='email' >Email Address*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='email' name='email' id='email' minlength="5" Placeholder="@abcd.com"/><br></br>
 
<label for='username' >UserName*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='username' id='username' minlength="3" Placeholder="min 3character" /><br></br>
<label for='username' >mobile number*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='mobilenumber' id='mobile number' minlength="10" maxlength="10" Placeholder="max or min 10number"/><br></br>


 <label for='username' >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCity*/Pincode
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</label>

<select name="dropdown">
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
<input required="true" type='text' name='pincode' id='mobile number' minlength="6" maxlength="6" Placeholder="6digit"/>



<br/>
<br>

<label for='username' >Permanent Address*&nbsp&nbsp:</label>
<input required="true" type='text' name='addre' id='password' minlength="5" maxlength="50" Placeholder="max or min 10number"/><br></br>

<label for='username' >Password*&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='password' name='password' id="address" minlength="8" maxlength="50" Placeholder="max or min 10number"/><br></br>
<label for='username' >confirm Password*
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='password' name='cnfmpassword' id="cnfaddress" minlength="8" maxlength="50" onkeyup=check(); Placeholder="max or min 10number"/><h1 id="01"></h1><br></br>



 

 <input type='hidden' name='submitted' id='submitted' value='1'/>
 <input type='submit' name='login' value='Submit' />
 

 
</fieldset>
</form>
</td>

</tr>

</body>
</head>
</html>
