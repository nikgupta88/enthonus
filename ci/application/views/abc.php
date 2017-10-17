<html>
<head>
<title>create an account
</title>
<script src="http://localhost/ci/js/jquery.js"></script>
<script>
var x=1;
var z=1;
function emailck()
{
		var email = $('#email').val();
		var em = document.getElementById("em");

		$.ajax({
	 	 method: "POST",
	  	url: "emck",
	  	data: { name1: email, location: "Boston" }
		})
		.done(function( msg ) {
	    		var i=msg;
	    	
	    
				if(i==1)
				{
					em.innerHTML="* email already registered";
					z=0;
				}
				else
				{
					em.innerHTML="";
					z=1;
				}
				

	    
	  });


}




function mob()
{
		var mob = $('#mobilenumber').val();
		var mobile = document.getElementById("mobile");

		$.ajax({
	 	 method: "POST",
	  	url: "text",
	  	data: { name1: mob, location: "Boston" }
		})
		.done(function( msg ) {
	    		var i=msg;
	    	
	    
				if(i==1)
				{
					mobile.innerHTML="* already number registered";
					x=0;
				}
				else
				{
					mobile.innerHTML="";
					x=1;
				}
				

	    
	  });


}



function check(){

var pass=document.getElementById("address");
var cnfpass=document.getElementById("cnfaddress");
var img=document.getElementById("img");
if(cnfpass.value==pass.value)
img.src= "http://localhost/ci/pwd/tick.png"
else
img.src= "http://localhost/ci/pwd/crs.png"



}
function cheakpass()
{
	var pass=document.getElementById("address");
	var cnfpass=document.getElementById("cnfaddress");
	var y=1;

	if(cnfpass.value!=pass.value)
	{
	alert("password is not same");
	y=0;

	}
	if(x==0)
	{
		alert("please fill another mobile number");
	}

	if(z==0)
	{
		alert("please fill another email");
	}

		if(x&&y&&z)
		{
			var err=true;
		return (err);
		}
		else{
		var err=false;
		return (err);
		}
		
}


</script>

</head>
<body bgcolor=white height=100% width=100%>
<table border=15 height = 100% width=100% cellspacing="0" cellpadding="0">
<tr height=100% width=100%>
<td width=100% height=100% background="http://localhost/ci/create an account images/ab.jpg">


<form id='register' action='db' method='post' onsubmit="return cheakpass();" style=color:white " >
<center>
<legend><H1>CREATE AN ACCOUNT</H1></legend><br></br><center>
<label for='name' ><h2>Your Full Name*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='name' id='name' minlength="3" Placeholder="min 3character" /><br></br>
<label for='email' >Email Address*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='email' name='email' id='email' minlength="5" onkeyup="emailck();" Placeholder="@abcd.com"/>
<div id="em" style="color:red"></div>
<br>
 
<label for='username' >UserName*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='username' id='username' minlength="3" Placeholder="min 3character" /><br></br>
<label for='username' >mobile number*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='text' name='mobilenumber' id='mobilenumber' minlength="10" maxlength="10" onkeyup="mob();"Placeholder="max or min 10number"  />
&nbsp&nbsp
<div id="mobile" style="color:red"></div>
<br>


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
<input required="true" type='text' name='pincode'  minlength="6" maxlength="6" Placeholder="6digit"/>



<br/>
<br>

<label for='username' >Permanent Address*&nbsp&nbsp:</label>
<input required="true" type='text' name='addre' id='password' minlength="5" maxlength="50" Placeholder="max or min 10number"/><br></br>

<label for='username' >Password*&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='password' name='password' id="address" minlength="8" maxlength="50" Placeholder="max or min 10number"/><br></br>
<label for='username' >confirm Password*
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input required="true" type='password' name='cnfmpassword' id="cnfaddress" minlength="8" maxlength="50" onkeyup=check(); Placeholder="max or min 10number"/>
<img id="img" src="">
</h1><br></br>



 

 
 <input type='submit' name='login' value='Submit'  />
 

 
</fieldset>
</form>
</td>

</tr>

</body>
</head>
</html>
