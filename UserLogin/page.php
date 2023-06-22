<?php
include('config.php');
$query = "SELECT pt_fname, pt_lname, pt_age, pt_address FROM patients";
$result = mysqli_query($conn, $query);
?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Address</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['pt_fname']; ?> </td>
   <td><?php echo $data['pt_lname']; ?> </td>
   <td><?php echo $data['pt_age']; ?> </td>
   <td><?php echo $data['pt_address']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table