<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CO-View Records</title>
<link rel="stylesheet" href="w3.css" />
</head>
<body>
<div class="form">
<p><a href="index.php"><strong>Home</strong></a> 
| <a href="co_insert.php"><strong>ADD New Record</strong></a> 
| <a href="logout.php"><strong>Logout</strong></a></p>
<h2><strong>Central Office ICT Invetory Records</strong></h2>
<table width="100%" border="2" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Article</strong></th>
<th><strong>Description</strong></th>
<th><strong>Property No.</strong></th>
<th><strong>Unit Measure</strong></th>
<th><strong>Unit Value</strong></th>
<th><strong>Date Acquired</strong></th>
<th><strong>Accountable Person</strong></th>
<th><strong>Current User</strong></th>
<th><strong>Responsibility Office</strong></th>
<th><strong>Remarks</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from icti ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["article"]; ?></td>
<td align="center"><?php echo $row["description"]; ?></td>
<td align="center"><?php echo $row["property"]; ?></td>
<td align="center"><?php echo $row["um"]; ?></td>
<td align="center"><?php echo $row["uv"]; ?></td>
<td align="center"><?php echo $row["dateac"]; ?></td>
<td align="center"><?php echo $row["accountable"]; ?></td>
<td align="center"><?php echo $row["user"]; ?></td>
<td align="center"><?php echo $row["responsibility"]; ?></td>
<td align="center"><?php echo $row["remarks"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>