<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d");
    $article =$_REQUEST['article'];
    $description = $_REQUEST['description'];
	$property = $_REQUEST['property'];
    $um = $_REQUEST['um'];
	$uv = $_REQUEST['uv'];
	$accountable = $_REQUEST['accountable'];
	$user = $_REQUEST['user'];
	$responsibility = $_REQUEST['responsibility'];
	$remarks = $_REQUEST['remarks'];
	$dateac = $_REQUEST['dateac'];
	$submittedby = $_SESSION["username"];
    $ins_query="insert into icti
    (`article`,`trn_date`,`submittedby`,`description`,`property`,`um`,`uv`,`dateac`,`accountable`,`responsibility`,`remarks`,`user`)values
    ('$article','$trn_date','$submittedby','$description','$property','$um','$uv','$dateac','$accountable','$responsibility','$remarks','$user')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>DENR-CO New Record</title>
<!link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="w3.css">
</head>
<body>
<div class="form">
<p><a href="welcome.php">Home</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Central Office Add New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />

	 <select type="text" name="article" placeholder="Enter Unit of Measure." required>
			<?php
			// php select option value from database

				$hostname = "localhost";
				$username = "root";
				$password = "";
				$databaseName = "inventory";

			// connect to mysql database

				$connect = mysqli_connect($hostname, $username, $password, $databaseName);



			// mysql select query
				$query = "SELECT * FROM `article`";

			// for method 1

				$result1 = mysqli_query($connect, $query);
			?>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option  value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
	
 <br>
<p><textarea row="6" cols="50" type="text" name="description" placeholder="Enter Description" required ></textarea></p>
<p><input type="text" name="property" placeholder="Enter Property no." required /></p>
<p><select type="text" name="um" placeholder="Enter Unit of Measure." required /></p>
	<option value="SET">SET</option>
		<option value="UNIT">UNIT</option>
	</select>	
<p><input type="text" name="uv" placeholder="Enter Unit Value" required /></p>
<p> <input type="date" id="dateac" name="dateac"></p>
<p><input type="text" name="accountable" placeholder="Enter Accountable Person" required /></p>
<p><input type="text" name="user" placeholder="Enter Current User" required /></p>
<p><input type="text" name="responsibility" placeholder="Enter Responsible Office." required /></p>
<p><textarea row="6" cols="50" type="text" name="remarks" placeholder="R e m a r k s " required ></textarea></p>
<p><input name="submit" type="submit" value="SAVE" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>