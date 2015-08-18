<?php
session_start();
if(isset($_REQUEST["btn_contact_us"])){
	require("database.php");
	$name = $_POST["txt_name"];
	$email_id = $_POST["txt_email"];
	$phone_no = $_POST["txt_phone"];
	$massage = $_POST["txt_msg"];
	
	$insert = "insert into contact_us values(null, '$name', '$email_id', '$phone_no', '$massage')";
	if(mysqli_query($con, $insert))
	{
		$_SESSION["msg"]="massage has been Successfully send. contact to as soon as posible time.";
	}
	else{
		$_SESSION["msg"]="something is problem pleas try again.";
	}
}
$contact = "active";
include("header.php");?>
<!-- contact-page -->
<div class="contact">
	<div class="container">
		<div class="contact-page">
                
			<div class="contact-info">
				<h3>CONTACT US</h3>
			</div>
			<div class="contact-map">
				<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Nobel+IT+Solution,opp.+Nirmala+Lance,Dange+chowk,Thergaon.Pune-+411033&amp;aq=&amp;sll=18.612614,73.76565&amp;sspn=0.001487,0.002411&amp;t=h&amp;ie=UTF8&amp;ppyss=confirm:0&amp;z=14&amp;ll=18.612614,73.76565&amp;output=embed" frameborder="0" style="border:1px solid;"></iframe>
			</div>
			<div class="contact-form">
				<form name="contact_us" method="post">
						<input name="txt_name" type="text" placeholder="Name" required>
						<input name="txt_email" type="text" placeholder="email Id" required>
						<input name="txt_phone" type="text" placeholder="Phone No." required>
						<textarea name="txt_msg" type="text" placeholder="Message" required></textarea>
						<input name="btn_contact_us" type="submit" class="btn1" value="Submit">
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //contact-page -->
<?php include("footer.php");?>