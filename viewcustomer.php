<html>
<head>
<link rel="stylesheet" href="table.css"> 
</head>
<body>
<div class="home"  align="right">
  <div id="logo">
    <img src="spk.jfif" width="35" height="35">
    </div>
<b><input type="button" id="btn1" onclick="location.href='Main_Bk.html';" value="Home" /></b>
</div>
<br>
<h1 align="center"><b>Customers</b></h1>

<table>
<tr>
<th>Name</th>
<th>E-Mail</th>
<th>Account_No</th>
<th>Balance</th>
<th></th>
</tr>
<?php
  $con=mysqli_connect("localhost","root","","bank");
    mysqli_select_db($con,'bank');

    $sql="SELECT * from customer";
    $records=mysqli_query($con,$sql);
    

    while($row=mysqli_fetch_array($records)){
           echo "<tr>";
	   echo "<td >".$row['name']."</td>";
	   echo "<td>".$row['email']."</td>";
            echo "<td>".$row['account_no']."</td>";
	   echo "<td>".$row['balance']."</td>";
	   echo "<td><a href=vcus.php?id=".$row['email'].">View</a></td>";
}
?>
</table>
</body>
</html>