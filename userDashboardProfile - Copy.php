<?php session_start();
if(!isset($_SESSION["username"])){
   $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Michael Nyembo Chungu">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>Dashboard</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/bootstrap-select.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-select.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	<script src="js/bootstrap-datetimepicker.js"></script>
    		
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="col-sm-12 userDashboard text-center">
			
			<div class="col-sm-12">
					
					<div class="header">
					
						<div class="col-sm-4">
					
						<div class="logo"></div>
						
					</div>
					
						<div class="col-sm-8">
					
						<div class="headerMenu">
							
							<ul>
								<li>Home</li>
								<li>About Us</li>
								<a href="login.php"><li>Login</li></a>
								<li>Contact Us</li>
							</ul>
							
						</div>
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 MENU -->
			
			<div class="col-sm-12">
					
				<div class="heading text-center">
					My Dashboard <?php echo $_SESSION["username"]; ?>
				</div>
						
			</div>
			
			<div class="col-sm-1"></div>
			
			<div class="col-sm-3 containerBoxLeft">
				
				<div class="col-sm-12 menuContainer bottomBorder active">
					<span class="fa fa-user-o"></span> My Profile
				</div>
				
				<a href="userDashboardBookings.php">
				<div class="col-sm-12 menuContainer bottomBorder">
					<span class="fa fa-copy"></span> My Bookings
				</div>
				</a>
				
				<a href="userDashboardETickets.php">
				<div class="col-sm-12 menuContainer bottomBorder">
					<span class="fa fa-clone"></span> My E-Tickets
				</div>
				</a>
				
				<a href="userDashboardCancelTicket.php">
				<div class="col-sm-12 menuContainer bottomBorder">
					<span class="fa fa-close"></span> Cancel Ticket
				</div>
				</a>
				
				<a href="userDashboardAccountSettings.php">
				<div class="col-sm-12 menuContainer">
					<span class="fa fa-gear"></span> Account Settings
				</div>
				</a>
				
			</div>
			
			<div class="col-sm-7 containerBoxRight"></div>
			
			<div class="col-sm-1"></div>
			
			</div>
		
		</div> <!-- container-fluid -->
		
	</body>
	

	<!-- BODY TAG ENDS -->
	
</html>
	