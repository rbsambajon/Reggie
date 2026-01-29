<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Times New Roman, Helvetica, sans-serif;
}

/* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #228B22;
  font-family: times new roman;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 18px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #32CD32;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #228B22;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

body {
 background-image: url("bg.jpg");
 background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: 2000px 1000px;
}
</style>
</head>
<body>
<h1 style="font-size:15px">
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">FILE MAINTENANCE
      <i class="fa fa-caret-down"></i>
    </button>
		<div class="dropdown-content">
			<a href="co_insert.php">CENTRAL OFFICE</a>
			<a href="#">NCR (NATIONAL CAPITAL REGION)</a>
			<a href="#">CAR (CORDILLERA ADMINISTRATIVE REGION)</a>
			<a href="#">REGION I</a>
			<a href="#">REGION II</a>
			<a href="#">REGION III</a>
			<a href="#">REGION IV-A (CALABARZON)</a>
			<a href="#">REGION IV-B (MIMAROPA)</a>
			<a href="#">REGION V</a>
			<a href="#">REGION VI</a>
			<a href="#">REGION VII</a>
			<a href="#">REGION VIII</a>
			<a href="#">REGION IX</a>
			<a href="#">REGION X</a>
			<a href="#">REGION XI</a>
			<a href="#">REGION XII</a>
			<a href="#">REGION XIII (CARAGA)</a>
		</div>
  </div>
  
		<div class="dropdown">
			<button class="dropbtn">REPORTS
				<i class="fa fa-caret-down"></i>
			</button>
		<div class="dropdown-content">
			<a href="#">CENTRAL OFFICE</a>
			<a href="#">NCR (NATIONAL CAPITAL REGION)</a>
			<a href="#">CAR (CORDILLERA ADMINISTRATIVE REGION)</a>
			<a href="#">REGION I</a>
			<a href="#">REGION II</a>
			<a href="#">REGION III</a>
			<a href="#">REGION IV-A (CALABARZON)</a>
			<a href="#">REGION IV-B (MIMAROPA)</a>
			<a href="#">REGION V</a>
			<a href="#">REGION VI</a>
			<a href="#">REGION VII</a>
			<a href="#">REGION VIII</a>
			<a href="#">REGION IX</a>
			<a href="#">REGION X</a>
			<a href="#">REGION XI</a>
			<a href="#">REGION XII</a>
			<a href="#">REGION XIII (CARAGA)</a>
		</div>
	
		</DIV>
	
	
		<div class="dropdown">
			<button class="dropbtn">MISC.
				<i class="fa fa-caret-down"></i>
			</button>
		<div class="dropdown-content">
			<a href="#">LINK 1</a>
			<a href="#">LINK 2</a>
			<a href="#">LINK 3</a>
	  
		</div>
	
		</DIV>
		<div class="dropdown">
			<button class="dropbtn">EXIT
				<i class="fa fa-caret-down"></i>
			</button>
		<div class="dropdown-content">
			<a href="LOGOUT.PHP">LOG-OUT</a>
			
	  
		</div>
	
		</DIV>
</div>
</h1>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
