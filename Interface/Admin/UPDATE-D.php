<html>  
<head> 
	<title>Edit Donor</title> 
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<style>
		#content{
		background: #c72121;
		min-height: 300px;
		padding: 0em 7em;
	}
	#form-style{
		position: relative;
		top: 50px;
		left: 0;
		right: 0;
		bottom: 0;
		margin: auto;
		width: 500px;
		min-height: 150px;
	    padding: 10px 10px 10px 20px;
	    font: 12px "Roboto", "Lucida Grande", sans-serif;
	    font-weight: 3px;
	    border: 1px solid #c72121;

	    color: black;
	    background: #FFF;

	}

	#form-style h1{
	    text-align: center;
	}

	#form-style h1, h2{
		 color: black;
	}

	/*#form-style p {
	    padding: 0;
	    display: block;
	    list-style: none;
	    margin: 10px 0 0 0;
	}
*/
	#form-style label{
		width:150px;
	    margin-top: 3px;
	    display:inline-block;
	    float: left;
	    padding-left:3px;
	}

	#form-style input[type=submit], #form-style input[type=button], #deleteButton{
		margin-left: 153px;
	    background: #c72121;
	    padding: 8px 15px 8px 15px;
	    border: none;
	    color: #FFF;
	    width: 230px; 
	}
	#form-style input[type=submit]:hover, #form-style input[type=button]:hover{
	    cursor: pointer;
	}
	#form-style a{
		text-decoration: none;
		color: #FFF;
	}
	.required{
		color: red;
		padding-left: 2px;
	}
	.hr-1{
		border-top: 3px double black;
	}
	#deleteButton{
		width: 200px;
	}
	#deleteButton a{
		font-size: 13px;
		padding-left: 15px;
	}
	</style>
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
				<li><a href="admin-homepage.html"  class="currentpage" title="Home">Home</a></li>
				<li><a href="admin-addDonor.html" title="Add">Add</a></li>
				<li><a href="admin-approveRequest.php" title="Requests">Requests</a></li>
				<li><a href="admin-viewPage.html" title="View">View</a></li>
				<!-- <li><a href="admin-search.html" title="Search">Search</a></li> -->
				<li><a href="index.html" title="Logout">Logout</a><li>
			</ul>
			
		</div>
	</div>
</div>

<!-- MENU / HEADER-->

<div id="content">
	<div id="form-style">
		
	<form method="POST" action="update-donor-record.php">
		<tr>

			<?php 

				$db = pg_connect("host=localhost port=5432 dbname=bloodbank user=postgres password=admin");
			
				if(!$db){
					echo pg_last_error();
				}


				echo $id = $_GET['id'];
						
				$query = "SELECT * FROM donor_view where idno='$id'"; 
				$result = pg_query($query);

					while($row = pg_fetch_array($result)){
						$fname = $row['fname'];
						$mname = $row['mname'];
						$lname = $row['lname'];
						$phone = $row['phone'];
						$houseno = $row['houseno'];
						$street = $row['street'];
						$barangay = $row['barangay'];
						$citymun = $row['citymun'];
						$province = $row['province'];
						$zipcode = $row['zipcode'];
						$ethnicity = $row['ethnicity'];
						$bloodtype = $row['bloodtype'];
						$bloodrh = $row['bloodrh'];
						$birthday = $row['birthday'];
						$weight = $row['weight'];
						$height = $row['height'];
					}

			?>
				<p>ID to Update : <input type="text" name="idno" value="<?=$id?>"><br> 
	            <p>First Name : <input name="fname_update" type="text" value="<?=$fname?>"><br> 
	            <p>Middle Name: <input type="text" name="mname_update" size="20" length="30" value="<?=$mname?>"><br>
	            <p>Last Name: <input type="text" name="lname_update" size="20" length="30" value="<?=$lname?>"><br> 
	            <p>Phone: <input type="text" name="phone_update" size="20" length="30" value="<?=$phone?>"><br> 
	            <p>House Number: <input name="houseno_update" type="text" value="<?=$houseno?>"><br>
	            <p>Street: <input name="street_update" type="text" value="<?=$street?>"><br>
	            <p>Barangay: <input name="barangay_update" type="text" value="<?=$barangay?>"><br>
	            <p>City/Municipality: <input name="citymun_update" type="text" value="<?=$citymun?>"><br>
	            <p>Province <input name="province_update" type="text" value="<?=$province?>"><br>
	            <p>ZIP CODE <input name="zipcode_update" type="text" value="<?=$zipcode?>"><br>
	            <p>Ethnicity: <input name="ethnicity_update" type="text" value="<?=$ethnicity?>"><br>
	            <p>Blood Type: <select name="bloodtype_update" value="<?=$bloodtype?>">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="AB">AB</option>
									<option value="O">O</option>
								</select><br>
	            <p>Blood RH: <select name="bloodrh_update" value="<?=$bloodrh?>">
									<option value="+">+</option>
									<option value="-">-</option>
								</select><br>
	            <p>Birthdate: <input name="birthday_update" type="text" value="<?=$birthday?>"><br>
	            <p>Weight: <input name="weight_update" type="text" value="<?=$weight?>"><br>
	            <p>Height: <input name="height_update" type="text" value="<?=$height?>"><br>
	            <br>
	            <input type="submit" name="submit" value="UPDATE"> 
	            <br>
	            <div id="deleteButton">
		        	<?php
						echo "<a href='delete-client.php?action=view&id=".$id."'> ".DELETE." </a>";
					?>
		        </div>
		        <br>
		        <div id="addDonationButton">
		        	<form method="POST" action="addDonation.php">
						<input type="submit" name="submit" value="ADD DONATION">
		        	</form>
		        </div>
	</form>
		</div>
</div>
</body>  
</html>
