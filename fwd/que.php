<?php 
$con = mysqli_connect("localhost","root",null);
mysqli_select_db($con,'shop');     
$query ="SELECT * FROM `online` WHERE pname ='$_POST[name]' ORDER BY 'pprice'";
$r=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($r))
{
?>
<table border="1">
  <tr>
    <td> <?php echo $row['pname'] ?> </td>
    <td> <?php echo $row['psite'] ?> </td>
    <td> <?php echo $row['pprice'] ?> </td>
    <td> <a href= "<?php echo $row['purl'] ?>">view</a> </td>
  </tr>
</table>
<?php
}
?> 