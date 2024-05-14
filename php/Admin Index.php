<?php require_once ('connection.php'); 
  session_start();
  ?>


<?php 

	$query = "SELECT * FROM admin";

    $result_set = mysqli_query ($connection , $query);

    if ($result_set->num_rows > 0) {

	 	$table = '<table>';
	 	$table .= '<tr> <th>First Name</th> <th>Last Name</th> <th>User Name</th> <th>Email</th> <th>Contact Number</th> </tr>';


	 	while ($record = mysqli_fetch_assoc($result_set)){
	 		$table .= '<tr>';
	 		$table .= '<td>' . $record['FirstName'] . '</td>';
	 		$table .= '<td>' . $record['LastName'] . '</td>';
	 		$table .= '<td>' . $record['Username'] . '</td>';
	 		$table .= '<td>' . $record['Email'] . '</td>';
	 		$table .= '<td>' . $record['ContactNumber'] . '</td>';
	 		$table .= '</tr>';
	 	}

	 	$table .= '</table>';
	 }

 ?>



<?php include ('header.php'); ?>

<html>
<head>
	
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../css/Admin main.css">
	<link rel="stylesheet" type="text/css" href="../css/Delete Admin.css">
	
	
</head>


<body>
	<div class="BASE"> 

			<div class="Ad-H1">
				<p>Admin's Infromation</p>
					<hr>
			</div><!-- Ad-H1 -->

			<div>
		 		<?php echo $table; ?>
			</div>

	</div><!-- BASE --> 	
	

  <div class="ADD">

	    <form action="ADD Admin.php">  
	      <input type="submit" value="Add Admin">
	    </form>

	    <form action="Adminlogout.php" method="POST">
	      <input name="Adminlogout" type="submit" value="Log Out">
	    </form> 

	    <form action="EditAcc.php" method="POST">
	      <input name="EditAcc" type="submit" value="Edit">
	    </form>

	    <form action="DeleteAdmin.php" method="POST" class="DelAcc">
	    	<label class="LBL" for="uname">User Name:</label>
          <input type="text" id="uname" name="uname" required>
        	  <div class="DelButton">
	     				 <input  name="Adminlogout" type="submit" value="Delete Account">
	    			</div>
	  	</form>



  </div> <!-- ADD -->



</body>

<?php include ('footer.php'); ?>


</html>
<?php mysqli_close($connection); ?>