<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Donation</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="admin-addDonation.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<!-- MENU / HEADER-->
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="admin-homepage.html" title="Blood Bank">Blood Bank</a></h1>
			<span>Donate now!</span> 
		</div>
		<div id="menu">
			<ul>
				<li><a href="admin-homepage.html" title="Home">Home</a></li>
				<li><a href="admin-addDonor.html" title="Add">Add</a></li>
				<li><a href="admin-viewPage.html" title="View">View</a></li>
				<li><a href="admin-search.html" title="Search">Search</a><li>
			</ul>
			
		</div>
	</div>
</div>

<!-- MENU / HEADER-->

<!-- BODY -->
<div id="content"> 
	<form name="insert" action="add_donation.php" method="POST" >
		<div id="form-style">
			<li><label>ID Number: </label><input type="number" name="idno" required/></li>
			<input type="hidden" name="bloodtype" value= "<?php echo htmlspecialchars($_GET['btype']); ?>" />
			<input type="hidden" name="bloodrh" value= "<?php echo htmlspecialchars($_GET['brh']); ?>" />
			<li><label>Date of Donation: </label><input type="date" name="date" required/></li>
			<li><label>Time of Donation: </label><input type="time" name="time" required/></li>  
			<li><label>Amount (in cc): </label>
				<select name="amount">
						<option value="350">350 cc</option>
						<option value="450">450 cc</option>
				</select>
				<span class="required">*</span></li>
			</li>
			<center><li><input type="submit" /></li></center>
		</div>
</form>  
</div>
<!-- BODY -->



</body>
</html>
