<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<h1>COVID-19 NOVEL CORONA VIRUS SELF REPORTING PORTAL</h1>
	<h3>GANGAPUR CITY, RAJASTHAN</h3>
	<title>NOVEL CORONA VIRUS</title>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	h1 {
    width: 80%;
    margin: 10px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}

h3 {
    width: 40%;
    margin: 20px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	table {
border-collapse: collapse;
width: 120%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<!-- <img src="../images/admin_profile.png"  > -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

	<table>
<tr>
<th>Self Reporting Type</th>
<th>Name</th><th>Address</th><th>Zone</th><th>Age</th><th>Gender</th><th>Mobile Number</th><th>Travelling From</th>
<th>Return Date</th><th>Passport No</th><th>Contact with</th><th>Fever</th><th>Cough</th>
<th>Breathing Issue</th><th>Other Details</th>
<?php
$conn = mysqli_connect("localhost", "root", "", "multi_login");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM self_test";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["type"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["address"]. "</td><td>". $row["zone"]."</td><td>". $row["age"]."</td><td>". $row["gender"]."</td><td>". $row["mobile"]."</td><td>"
. $row["travel"]."</td><td>". $row["returns"]."</td><td>". $row["passport"]."</td><td>". $row["contact"]."</td><td>". $row["fever"]."</td><td>". $row["cough"]."</td><td>". $row["breathing"]."</td><td>". $row["details"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>






</tr>
</body>
</html>