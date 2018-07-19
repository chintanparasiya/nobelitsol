<?php
if(!isset($_SESSION)){
	session_start();
}
if(!@$_SESSION["msg"]=="")
{
	?>
	<script> alert('<?php echo @$_SESSION["msg"]; $_SESSION["msg"]='';?>');</script>
    <?php
}
?>