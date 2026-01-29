<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from icti where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="w3.css" />
</head>
<body>
<div class="form">
<p><a href="welcome.php"><strong>HOME</strong></a> 
| <a href="co_insert.php"><strong>Insert New Record</a> 
| <a href="logout.php">Logout</strong></a></p>
<h1>CO-Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d");
    $article = $_REQUEST['article'];
    $description = $_REQUEST['description'];
	$property = $_REQUEST['property'];
    $um = $_REQUEST['um'];
	$uv = $_REQUEST['uv'];
	$dateac = $_REQUEST['dateac'];
	$accountable = $_REQUEST['accountable'];
	$user = $_REQUEST['user'];
	$responsibility = $_REQUEST['responsibility'];
	$remarks = $_REQUEST['remarks'];
	$submittedby = $_SESSION["username"];
$update="update icti set trn_date='".$trn_date."',
article='".$article."', description='".$description."',
property='".$property."', um='".$um."',
uv='".$uv."', dateac='".$dateac."',
accountable='".$accountable."',
user='".$user."',
responsibility='".$responsibility."',
remarks='".$remarks."',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="article" placeholder="Enter Article Name" 
required value="<?php echo $row['article'];?>" /></p>
<p><textarea row="5" cols="60"  type="text" name="description" placeholder="Enter description" 
required value = "<?php echo $row['description'];?>"> </textarea></p>
<p><input type="text" name="property" placeholder="Enter Property No." 
required value="<?php echo $row['property'];?>" /></p>
<p><input type="text" name="um" placeholder="Enter Unit Measure" 
required value="<?php echo $row['um'];?>" /></p>
<p><input type="text" name="uv" placeholder="Enter Unit Value" 
required value="<?php echo $row['uv'];?>" /></p>
<p><input type="text" name="dateac" placeholder="Enter Date Acquired" 
required value="<?php echo $row['dateac'];?>" /></p>
<p><input type="text" name="accountable" placeholder="Enter Accountable Person" 
required value="<?php echo $row['accountable'];?>" /></p>
<p><input type="text" name="user" placeholder="Enter Current User" 
required value="<?php echo $row['accountable'];?>" /></p>
<p><input type="text" name="responsibility" placeholder="Enter Responsible Office" 
required value="<?php echo $row['responsibility'];?>" /></p>
<p><input type="text" name="remarks" placeholder="R E M A R K S" 
required value="<?php echo $row['remarks'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>