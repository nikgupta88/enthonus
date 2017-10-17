<?php

Class select extends CI_Model
{
 	function blog($user, $pass) 
 	{
		session_start();
		
			//$_SESSION["name"] =$_POST['user'];
			//$_SESSION["pass"] =pass'];
			$count=0;

				$username= $user;
				$servername = "localhost";
				$username = "root";
				$password = "123456";
				$dbname = "nikhil";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
				}
				

				$sql = "SELECT username,password FROM create_an_account";
				//echo $sql;
				$result = mysqli_query($conn, $sql);
				//print_r($result);

				if (mysqli_num_rows($result) > 0) {
				// output data of each row
				
				while($row = mysqli_fetch_assoc($result)) 
				{ 
					
					if($row["username"]==$user && $row["password"]==$pass)
					{
						
					$count=1;
					break;
					
					}
					
					
					
				}
				
				}
		mysqli_close($conn);
				

		
		if ($count==1)
		header("Location:loginhome");
		else
		header("Location:home");

	}
?>