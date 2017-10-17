<!DOCTYPE html>
<html >
<head>
	<title>manage</title>


<script src="http://localhost/ci/js/jquery.js"></script>
	<script>
function fetch(){
		var file = $('#x').val();
		var text = $('#y').val();
		
	//document.write(file+"<br>"+"text");
		$.ajax({
	 	 method: "POST",
	  	url: "update",
	  	data: { name1: file,name2: text, location: "Boston" }
		})
		.done(function( msg ) {
	    		var i;
	    	
	    
				alert("data updated");
				

	    
	  });




	}

	</script>















</head>
<body height=100% width=100%>
<table border=2 height=200% width=100% >
	<tr height=20% width=100%>
		<td colspan="3">
			
		</td>
	</tr>
	<tr height=10% width=100%>
		<td>
			<a href="manage"> manage home </a>
		</td>
		<td><a href="manageabout">manage about </td>
		<td><a href="managecontact">manage contact</td>
	</tr>
	<?php
		if(isset($_GET['status']) && $_GET['status'] == 'success'){
				?>
			<script type="text/javascript">
				alert ("update sucessfully");
			</script>
				



			<?php	} ?>
	<tr height=140% width=100%>
		<td colspan="3">
			<form action="update" method="post" enctype="multipart/form-data" >
			<h2>manage home</h2>
			<input type="text" name="y" id="y" placeholder="input text" >
			<br>

			<input type="file" name="x" id="x">
			<input type="submit" name="home" value="upload image" onclick="fetch()">

			</form>
		</td>
		

	</tr>


</table>
</body>
</html>