<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.container {
    background-image: url("ground.jpg");
    height:100vh;
}
</style>
</head>
<body>

<div class="container">
  <h1><strong>Save & Shop</strong></h1>
  <center>
  <br><br><br>
  <div class="well well-sm">
  <form action="offline.php" method="post">
  <fieldset>
    <label><h3>Enter cityname:</h3></label>
    <input type="text" placeholder="Type city name..." name="cname"><br>
    <label><h3>Enter product name:</h3></label>
    <input type="text" placeholder="Type product name..." name="name"><br>
    <input type="submit" name="submit">
    
  </fieldset>
  </form></center>

<?php 
$con = mysqli_connect("localhost","root",null);
mysqli_select_db($con,'shop');     
$query ="SELECT * FROM offline WHERE pname ='$_POST[name]' AND city ='$_POST[cname]' ORDER BY price";
$r=mysqli_query($con,$query);
?>
<div class="well">
<table class="table"> 
  <thead><tr><th>name</th><th>price</th><th>address</th>
  </tr></thead>
<?php
while($row=mysqli_fetch_assoc($r))
{
?>
  <tr>
    <td> <?php echo $row['shopname'] ?> </td>
    <td> <?php echo $row['price'] ?> </td>
    <td> <?php echo $row['address'] ?> </td>
  </tr></tbody>
<?php
}
?>
</table>
</div></div></div>
</body>
</html>