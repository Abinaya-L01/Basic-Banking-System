<html>
<head>
<link href="vcus.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="home" align="right">
  <div id="logo">
    <img src="spk.jfif" width="35" height="35">
    </div>
<b><input type="button" id="btn1" onclick="location.href='Main_Bk.html';" value="Home" /></b>
<form method="post" action="transfer.php">
</div>
  <h1 align="center"><b>Customers</b></h1>

<div class = "about" >

<?php
 $con=mysqli_connect("localhost","root","","bank");
 mysqli_select_db($con,'bank');
    $q="SELECT * FROM customer WHERE email='$_GET[id]'";
   
    $records=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($records))
    { 
       $name=$row['name'];
       $reg=$row['email'];
       $acc =$row['account_no'];
       $hos=$row['balance'];
       echo "<th>";
	   echo "<tr>Name   :  ".$row['name']."</tr> <br>";
           echo"<br>";
	   echo "<tr>E-Mail :".$row['email']."</tr> <br>";
           echo"<br>";
           echo "<tr>Balance:".$row['balance']."</tr> <br>";
       
    }   
    
?>

<br><br>
<b><input type="submit" id="btn1" onclick="location.href='transfer.php';" value="Transfer" /></b>
</div>

</body>
</html>