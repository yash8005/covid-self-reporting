<?php 
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initialscale=1.0">
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
    margin: 10px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
	<h1>COVID-19 NOVEL CORONA VIRUS SELF REPORTING PORTAL</h1>
	<h3>GANGAPUR CITY, RAJASTHAN</h3>
	<title>NOVEL CORONA VIRUS</title>
	<script type="text/javascript">
 	function formValidation()
 	{
	 	var name = document.registration.name;
	 	var numb = document.registration.mobile;
	 	
		
	 		if (phonenumber(numb))
			{
				return true;
			}

 	}
 	
 	
 	function phonenumber(number)
 	{
	 	var phoneno = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
	 	if (number.value.match(phoneno)) {
	 		return true;
 		} 
 		else{
 				alert("Not a valid Phone Number");
 				return false;
 			}
 	}
 	
 	
 </script>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
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
			<!-- <img src="images/user_profile.png"  > -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

	<h1 class="header"> Novel Corona-Virus Self Reporting Form</h1>
 <form method="post" onSubmit="return formValidation();" name="registration" enctype="multipart/form-data" autocomplete="yes" on>
 <table align="center" width="100%" height="60%" style="marggin-top:-70%">
 <tr>
 <td>Self Reporting Type</td>
 <td><select name="type">
	 	<option value="default" selected>Select Self Reporting Type</option>
	 	<option value="international">International travel</option>
	 	<option value="domestic">Domestic Travel</option>
	 	<option value="ontact">Contact of Postiive Patient</option>
 	</select></td>
 </tr>
 <tr></tr><tr></tr>
 <tr>
 	<td>Name</td>
 	<td><input class="input-group" type="text" name="name" placeholder="Name" minlength="3" maxlength="15" required></td>
 </tr>
 <tr></tr>
 <tr>
	 <td> Address </td>
 	<td><textarea name="address" placeholder="Address" rows=4 cols=30></textarea></td>
 </tr>
 <tr>
 <td>Zone</td>
 <td><select name="zone">
	 	<option value="default" selected>Select Zone</option>
	 	<option value="east">East Zone</option>
	 	<option value="west">West Zone</option>
	 	<option value="north">North Zone</option>
		<option value="south">South Zone</option>
 	</select></td>
 </tr>
 <tr>
 	<td>Age</td>
 	<td> <input class="input-group" type="text" name="age" length=3 placeholder="Age" required></td>
 </tr>
 <tr>
 	<td>Gender</td>
 	<td><select name="gender">
	 	<option value="default" selected>Select Gender</option>
	 	<option value="male">Male</option>
	 	<option value="female">Female</option>
	 	<option value="other">Other</option>
 	</select></td>
 </tr>
 <tr>
 	<td>Mobile Number</td>
 	<td><input class="input-group" type="text" name="mobile" length=10 placeholder="Enter 10-digit mobile number"></td>
 </tr>
 <tr>
 	<td>Travelling From</td>
 	<td><input class="input-group" type="text" name="travel" required></td>
 </tr>
 <tr>
	 <td>Return Date</td>
	 <td><input class="input-group" type="date" name="returns" required></td>
</tr>
 <tr>
 	<td>Passport Number</td>
 	<td><input class="input-group" type="text" name="passport" placeholder="Passport number"></td>
 </tr>
<tr>
	 <td> Have you come in contact with </td>
	 <td rowspan="2"><label> <input class="input-group" type="radio" name="contact"value="Yes"  >Yes </label></td>
	 <td rowspan="2"><label> <input class="input-group" type="radio" name="contact"value="No" checked>No </label></td>
 </tr>
 <tr>
	 <td> Corona Positive Patient</td>
 </tr>
 <tr>
	 <td> Suffering from fever </td>
	 <td><label><input class="input-group" type="radio" name="fever" value="Yes" >Yes </label></td>
     <td><label> <input class="input-group" type="radio" name="fever"value="No" checked>No </label></td>
 </tr>
 <tr>
	 <td> Have cough</td>
	 <td><label><input class="input-group" type="radio" name="cough" value="Yes" >Yes </label></td>
     <td><label> <input class="input-group" type="radio" name="cough"value="No" checked>No </label></td>
 </tr>
 <tr>
	 <td> Difficulty in breathing </td>
	 <td><label><input class="input-group" type="radio" name="breathing" value="Yes" >Yes </label></td>
     <td><label> <input class="input-group" type="radio" name="breathing" value="No" checked>No </label></td>
 </tr>
 <tr>
	 <td>Other Details</td>
 	 <td><textarea name="details" placeholder="Enter other details/symptoms you might have" rows=4 cols=30></textarea></td>
 </tr>
 </table>
 <table>
 <tr>
     <td style="text-align: center"><button name="test" type="submit" class="btn">Proceed</button></td>
	 <td style="text-align: center"><button type="reset" class="btn">Cancel</button></td>
 </tr>
 <tr>
 	
 </tr>
 </table>
 </form>
</body>
</html>

<?php
              
if(isset($_POST['test']))
{
	require_once "config.php";
	$type=$_POST['type'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $zone=$_POST['zone'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
	$travel=$_POST['travel'];
	$returns =$_POST['returns'];
	$passport = $_POST['passport'];
	$contact = $_POST['contact'];
	$fever = $_POST['fever'];
	$cough = $_POST['cough'];
	$breathing = $_POST['breathing'];
    $details=$_POST['details'];

	$query = "INSERT INTO self_test (type,name,address,zone,age,gender,mobile,travel,returns,passport,contact,fever,cough,breathing,details)
			VALUES('$type', '$name', '$address', '$zone', '$age', '$gender', '$mobile', '$travel', '$returns', '$passport', '$contact', '$fever', '$cough', '$breathing', '$details')" ;
	if($mysqli->query($query) === true){
		$_SESSION['success']  = "Form Details Successfully Added!";
      //  echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

	
    // Close connection
    // $mysqli->close();
}

?>