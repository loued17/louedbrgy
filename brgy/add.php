
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
			<li><a href="searchindi.php">Search Individual</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>

<form method="post" action="add.php" class="add">







	


			<div class="input-group">
		<label style="font-weight: bold;">IndividualID</label>
	   	<input type="text" name="Individualsearch" class="xd">


	</div>





	<div class="input-group">
		<button type="submit" name="SearchPA" class="btn">Search</button>
	</div>











	
<div class="input-group">
		<label>Patient ID</label>
		<input type="text" name="descID" value="<?php echo $row2['UserID']; ?>">

	</div>




	<div class="input-group">
		<label>Name</label>
		<input type="text" name="descName" value="<?php echo $row2['Name']; ?>">

	</div>


	<div class="input-group-add">
		<label>Note</label>
		<input style="" type="text" name="Note">
	</div>


	 <div class="input-group">
			<button type="submit" name="AddD" class="btn">Add</button>
			</div>






</body>

</html>