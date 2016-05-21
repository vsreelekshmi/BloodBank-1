<?php
$db = pg_connect("host=localhost port=5432 dbname=bloodbank user=postgres password=admin");

   $sql =<<<EOF
      SELECT * FROM donor_view;
EOF;

   $donors = pg_query($db, $sql);
?>


<?php
$db = pg_connect("host=localhost port=5432 dbname=bloodbank user=postgres password=admin");

   $sql =<<<EOF
      SELECT * FROM Client;
EOF;

   $clients = pg_query($db, $sql);
?>

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Blood Bank</title>
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
   <link href="default.css" rel="stylesheet" type="text/css" media="all" />
   <style> 
      #content{
         background: #c72121;
         padding: 0em 7em;
      }
      table{
         position: absolute;
         top: 150px;
         background: #FFF;
         margin: 0 auto;
      }     
      #content h1{
         margin: 0 auto;
         position: relative;
         top: 10px;
         color: #FFF;
      }
   </style>

</head>

<body>
<!-- MENU / HEADER-->
      <div id="header-wrapper">
         <div id="header" class="container">
            <div id="logo">
               <h1><a href="#" title="Blood Bank">Blood Bank</a></h1>
               <span>Donate now!</span> 
            </div>
         
            <div id="menu">
               <ul>
                  <li><a href="admin-homepage.html"   title="Home">Home</a></li>
                  <li><a href="admin-addDonor.html" title="Add">Add</a></li>
                  <li><a href="admin-approveRequest.php" title="Requests">Requests</a></li>
                  <li><a href="admin-viewPage.html" class="currentpage" title="View">View</a></li>
                  <li><a href="admin-search.html" title="Search">Search</a></li>
                  <li><a href="index.html" title="Logout">Logout</a><li>
               </ul>
               
            </div>
         </div>
      </div>

<!-- MENU / HEADER-->

<!-- BODY -->
    <div id="content"> 
            <h1>DONOR LIST</h1>
            <table width="600" border="2" cellspacing="1" cellpadding="1">
               <tr>
                  <th>ID Number</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Birthday</th>
                  <th>Age</th>
                  <th>Weight</th>
                  <th>Height</th>
                  <th>Ethnicity</th>
                  <th>House No</th>
                  <th>Street</th>
                  <th>Barangay</th>
                  <th>City/Municipality</th>
                  <th>Province</th>
                  <th>Zip Code</th>
                  <th>Blood Type</th>
                  <th>Blood RH</th>
                  <th>Gallons</th>
                  <th>Amount Donated</th>

               </tr>
            

         <?php
            if(!$donors){
               echo pg_last_error($db);
               exit;
            } 
            while($records = pg_fetch_assoc($donors)){
               echo "<tr>";
               echo "<td>";
                  echo "<a href='UPDATE-D.html?action=view&id=".$records['idno']."'> ".$records['idno']." </a>";
               echo "</td>";
               echo "<td>" . $records['fname'] . "</td>";
               echo "<td>" . $records['mname'] . "</td>";
               echo "<td>" . $records['lname'] . "</td>";
               echo "<td>" . $records['birthday'] . "</td>";
               echo "<td>" . $records['age'] . "</td>";
               echo "<td>" . $records['weight'] . "</td>";
               echo "<td>" . $records['height'] . "</td>";
               echo "<td>" . $records['ethnicity'] . "</td>";
               echo "<td>" . $records['houseno'] . "</td>";
               echo "<td>" . $records['street'] . "</td>";
               echo "<td>" . $records['barangay'] . "</td>";
               echo "<td>" . $records['citymun'] . "</td>";
               echo "<td>" . $records['province'] . "</td>";
               echo "<td>" . $records['zipcode'] . "</td>";
               echo "<td>" . $records['bloodtype'] . "</td>";
               echo "<td>" . $records['bloodrh'] . "</td>";
               echo "<td>" . $records['gallons'] . "</td>";
               echo "<td>" . $records['amountdonated'] . "</td>";
               // echo "<td>";
               //    echo "<a href='delete-client.php?action=view&id=".$records['idno']."'> ".DELETE." </a>";
               // echo "</td>";
               // echo "<td>";
               //    echo "<a href='admin-homepage.html?action=view&id=".$records['idno']."'> ".UPDATE." </a>";
               // echo "</td>";          
               echo "</tr>";
            }
            pg_close($db);
         $result = pg_query($query);   
         ?>

         </table>
      
      </div>
<!-- BODY -->

</body>
</html>
