<!DOCTYPE html>
<html>

<?php
session_start();
if(isset($_POST['login']))
{
$servername = "localhost";
$username = "root";
$password = "9039347322";
$dbname = "lg";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if(isset($_POST['login']))
{
	
 $user_name  =    $_POST['name'];
$user_email	=     $_POST['email'];
$user_username	=$_POST['user'];
$user_mobilenumber	=$_POST['mobilenumber'];
$user_city	=$_POST['city'];
$user_password	=$_POST['password'];
$user_pincode	=$_POST['pincode'];
$user_addre	=$_POST['address'];
}	
$sql="insert into createn(name,email,username,mobilenumber,city,pincode,address,password) VALUES (' $user_name','$user_email','$user_username','$user_mobilenumber','$user_city','$user_pincode','$user_addre',$user_password)";

if (mysqli_query($conn, $sql)) {
    echo "<script> alert('registration succesfully')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}	
	

/*if($query)
	echo "<script> alert('registration succesfully')</script>";
else
	echo 'data is not insert succesfully';
*/

$conn->close();

}
?>


<head>
	<title>TOP INDIAN SPICES</title>
	

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Wowslider" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body HEIGHT=100% style="background-color:#d8d8d8;margin:auto" >

<style>

h4{
 color: white;
}
</style>


<table border=0 height = 20% width=100% cellspacing="0" cellpadding="0">
<tr  background="home images/12.jpg" height=8% width=10% >
<td width=20%>><img src="dry fruits images/main.jpg" alt="Test Image" height=20% width=60% /> 
 </td>
<td colspan=7 ><h1 > </h1>
 </td>
<td colspan=2 >

<?php
if(isset($_POST['login']))
{
	 $_SESSION["nam"] =$_POST['user'];
echo	"<center style=color:white valign=bottom><h3>Welcome to<br>Mr." . $_SESSION["nam"];
}
if(isset($_POST['submit']))
{
	$_SESSION["nam"] =$_POST['loginuser'];
	$_SESSION["pass"] =$_POST['pass'];
	$count=0;

		
		$servername = "localhost";
		$username = "root";
		$password = "9039347322";
		$dbname = "lg";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT username,password FROM createn";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		
		while($row = mysqli_fetch_assoc($result)) 
		{
			if($row["username"]==$_SESSION["nam"]&&$row["password"]==$_SESSION["pass"])
			{
			echo	"<center style=color:white valign=bottom><h3>Welcome to<br>Mr." . $_SESSION["nam"];
			$count=$count+1;
			break;	
			}
			
			}
			
			if($count==0) 
			{
				$count=$count+4;
				echo "invalid";
					
			}
		}
		if($count==4) 
			{
				header("Location:home.php");
			}



mysqli_close($conn);
		

}
	
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
</TABLE>












	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/ab.jpg" alt="ab" title="ab" id="wows1_0"/></li>
		<li><img src="data1/images/dailykirana.png" alt="dailykirana" title="dailykirana" id="wows1_1"/></li>
		<li><img src="data1/images/darragrocerygroceryshoppingcheapgroceriesasi11.jpg" alt="darra-grocery-grocery-shopping-cheap-groceries-asi11" title="darra-grocery-grocery-shopping-cheap-groceries-asi11" id="wows1_2"/></li>
		<li><img src="data1/images/groceriesphoto.jpg" alt="groceries-photo" title="groceries-photo" id="wows1_3"/></li>
		<li><img src="data1/images/grocery.jpg" alt="grocery" title="grocery" id="wows1_4"/></li>
		<li><img src="data1/images/images.jpg" alt="images" title="images" id="wows1_5"/></li>
		<li><img src="data1/images/pdt2.jpg" alt="pdt2" title="pdt2" id="wows1_6"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data1/images/r927951_9697797.jpg" alt="css slider" title="r927951_9697797" id="wows1_7"/></a></li>
		<li><img src="data1/images/snackssweetsarekeyonlineopportunitycategoriesfornewonlinegroceryshoppershartmangroup_strict_xxl.jpg" alt="Snacks-sweets-are-key-online-opportunity-categories-for-new-online-grocery-shoppers-Hartman-Group_strict_xxl" title="Snacks-sweets-are-key-online-opportunity-categories-for-new-online-grocery-shoppers-Hartman-Group_strict_xxl" id="wows1_8"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="ab"><span><img src="data1/tooltips/ab.jpg" alt="ab"/>1</span></a>
		<a href="#" title="dailykirana"><span><img src="data1/tooltips/dailykirana.png" alt="dailykirana"/>2</span></a>
		<a href="#" title="darra-grocery-grocery-shopping-cheap-groceries-asi11"><span><img src="data1/tooltips/darragrocerygroceryshoppingcheapgroceriesasi11.jpg" alt="darra-grocery-grocery-shopping-cheap-groceries-asi11"/>3</span></a>
		<a href="#" title="groceries-photo"><span><img src="data1/tooltips/groceriesphoto.jpg" alt="groceries-photo"/>4</span></a>
		<a href="#" title="grocery"><span><img src="data1/tooltips/grocery.jpg" alt="grocery"/>5</span></a>
		<a href="#" title="images"><span><img src="data1/tooltips/images.jpg" alt="images"/>6</span></a>
		<a href="#" title="pdt2"><span><img src="data1/tooltips/pdt2.jpg" alt="pdt2"/>7</span></a>
		<a href="#" title="r927951_9697797"><span><img src="data1/tooltips/r927951_9697797.jpg" alt="r927951_9697797"/>8</span></a>
		<a href="#" title="Snacks-sweets-are-key-online-opportunity-categories-for-new-online-grocery-shoppers-Hartman-Group_strict_xxl"><span><img src="data1/tooltips/snackssweetsarekeyonlineopportunitycategoriesfornewonlinegroceryshoppershartmangroup_strict_xxl.jpg" alt="Snacks-sweets-are-key-online-opportunity-categories-for-new-online-grocery-shoppers-Hartman-Group_strict_xxl"/>9</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslider</a> by WOWSlider.com v8.7</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

<TABLE height=10% WIDTH=100%>
<tr background="home images/12.jpg" style="color:white" ><center>
<td colspan=10 align=down>
<h4><center>Terms & condition &nbsp&nbsp Policies </center></h4>
<h4><center>Security &nbsp&nbsp Help<h4>
<h4><center>About us<h4>
</td>
</tr>
</TABLE>	
	
</body>
</html>