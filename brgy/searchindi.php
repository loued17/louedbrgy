
<!DOCTYPE html>
<html>
<head>
	<title>BRGY. Officials</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>BRGY. Officials</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="offapp.php">My Appointments</a></li>
			<li><a href=" searchindi.php">Search Individuals</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>

<body>


	
<form method="post" action="searchpatient.php" class="individualsearch">

	

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Individuals ID</label>
		<label style="font-weight: bold">*Individuals Name</label>
		<input type="text" name="IID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>

	







	</form>


         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Individuals Information</caption>>

		<tr>
		<th>IndividualID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Citizenship</th>


		</tr> 


</body>
</html>
