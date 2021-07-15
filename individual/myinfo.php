

<!DOCTYPE html>
<html>
<head>
	<title>Individuals</title>
	<link rel="stylesheet"  href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Individuals</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href=" searchoff.php">Search Brgy. Officials</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>
<body >
		<div class="headerP" style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px   ">
	<h2>My Information</h2>
</div>



<form method="post" action="myinfo.php" class="infoP" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">






<div class="contentP" style="font-weight: bold;">


	<label>ID: 

	 	   <br>
	 	   <br>
	 	   <label> Email : 
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : 
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : 
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : 
	 	   	 	   <br>
	 	   <br>
	 	   <label> Blood Type :
	 	   	 	   <br>
	 	   <br>

	 	   	<div class="input-group">
		<button type="submit" name="appointmenthistory" class="btn">My-Appointment-History</button>
	</div>
	 	  


	
        
           
	
</div>

  
</form>


		
         	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Appointment History</caption>
		<tr>
		<th>Brgy. OfficialsID</th>  ?>
		<th>Brgy. OfficialsName</th>
		<th>Appointment</th>
		<th>Brgy. Official's Note</th>	


		</tr> 
		
		

 </table>









 












	






</body>
</html>

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                         
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->