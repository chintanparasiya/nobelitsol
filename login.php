<?php
session_start();
if(isset($_REQUEST["btn_login"])){
	require("database.php");
	$user_nm = $_POST["txt_username"];
	$passwd = $_POST["txt_pwd"];
	
	$select = mysqli_query($con, "select id, user_name, password from register where user_name = '$user_nm' and password = '$passwd' LIMIT 1");
	$result = mysqli_fetch_array($select);
	if(($result["user_name"] == $user_nm) && ($result["password"] == $passwd))
	{
		$_SESSION["id"]=$result["id"];
		$_SESSION["name"]=$result["name"];
		$_SESSION["msg"]="Successfully Login your account..";
		header("location:admin/home.php");
		exit();
	}
	else{
		$_SESSION["msg"]="Enter Credintial Incorrect..";
		header("location:login.php");
		exit();
	}
}
$login = "active";
include("header.php");
?>
<!-- services-page -->
<div class="services-page">
	<div class="container">
		<div class="services-bor">
			<div class="ser-info">
				<h3>LOGIN</h3>
				<p style="text-align:center; color:#E67816;">This Login is Only For Nobel It Solution Students login..</p>
                <form name="login" id="login" method="post">
                	<table align="center">
                    	<tr>
                        	<th>Username</th>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td><input type="text" name="txt_username" required /></td>
                        </tr>
                        <tr height="50">
                        	<th>Password</th>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td><input type="password" name="txt_pwd" required /></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="right"><input type="submit" name="btn_login" value="Login" /></td>
                        </tr>
                    </table>
                </form>
                
			</div>
		</div>
	</div>
</div>
<!-- //services-page -->
<?php include("footer.php");?>
