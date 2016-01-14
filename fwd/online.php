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
  <form action="online.php" method="post">
  <fieldset>
    <label><h3>Enter product name:</h3></label>
    <input type="text" placeholder="Type product name..." name="name"><br>
    <input type="submit" name="submit">
    
  </fieldset>
  </form></center>

<?php 
$con = mysqli_connect("localhost","root",null);
mysqli_select_db($con,'shop');     
$query ="SELECT * FROM online WHERE pname ='$_POST[name]' ORDER BY pprice";
$r=mysqli_query($con,$query);
?>
<div class="well">
<table class="table"> 
  <thead><tr><th>name</th><th>site</th><th>price</th>
  <th>link</th></tr></thead>
<?php
while($row=mysqli_fetch_assoc($r))
{
?>
  <tr>
    <td> <?php echo $row['pname'] ?> </td>
    <td> <?php echo $row['psite'] ?> </td>
    <td> <?php echo $row['pprice'] ?> </td>
    <td> <a href= "<?php echo $row['purl'] ?>">view</a> </td>
  </tr>
<?php
}
?>
</table>
</div></div></div>
</body>
</html>