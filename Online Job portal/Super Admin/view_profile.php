<?php
	session_start();

	if(isset($_COOKIE['STATUS'])){
		if($_COOKIE['STATUS'] == "OK"){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
    <table border = "1" align="center">
        <tr>
            <td colspan = "3" align="center">
                <img width="50" height="40" src="Profile Picture/Default.jpg">
            </td>
            <td rowspan = "5">
                <button type="submit" formaction="edit_profile.php">Edit Profile</button>
            </td>
        </tr>

        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $_COOKIE["name"];?></td>
        </tr>
        <tr>
            <td><strong>Username</strong></td>
            <td><?php echo $_COOKIE["uname"];?></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><?php echo $_COOKIE["email"];?></td>
        </tr>

        <tr>
            <td colspan = "3" align="center"><strong>YOU ARE THE SUPER ADMIN</strong></td>
        </tr>
        
    </table>

    <p align="center"><a href="Dashboard.php" >Back to Dashboard</a></p>
</body>
</html>

<?php
}else{
		header('location: SuperAdminLogin.php');
		}
	}else{
		header('location: SuperAdminLogin.php?msg=Please Log in');
	}
?>
