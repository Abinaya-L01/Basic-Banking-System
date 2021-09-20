<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="transfer2.css">
    <title>Transaction Form</title>
</head>
    
<body>
   <div class="home"  align="right">
     <b><input type="button" id="btn1" onclick="location.href='Main_Bk.html';" value="Home"/><b>
   </div>
  <div align="center"  class="login">
  <h2><center>Transaction Form</center></h2>
  <form method="post" action="transfer2.php">
  <?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
 <br><br><br>

   
   <div class="first" >
     <label for="name">Sender's Name</label><br>
     <input type="text" id="name"   name="sname" style="font-size:12pt;height:30px;width:300px;"><br><br> 
     <label for="name">Sender's Account_No</label><br>
     <input type="text" id="acc"   name="sacc" style="font-size:12pt;height:30px;width:300px;"><br><br>

     <label for="name">Recipient's Name</label><br>
     <input type="text" id="name"   name="rname" style="font-size:12pt;height:30px;width:300px;"><br><br>
     <label for="name">Recipient's Account_No</label><br>
     <input type="text" id="acc"   name="racc" style="font-size:12pt;height:30px;width:300px;"><br><br>
     <label for="name">Transfer Amount</label><br>
     <input type="text" id="name"   name="amt" style="font-size:12pt;height:30px;width:300px;"><br><br>
  
   <div class="">
    <button style="border-radius:19px; border-color:#b8860b; color:goldenrod;background-color:white;" type="submit" value="transfer">TRANSFER</button>
   </div>
</div>

  </form>



</div>
</body>
</html>
