<?php
if(!isset($_SESSION)){
	session_start();
}
if(!$_SESSION["id"]){
	header("Location:login");
	exit();
}
 
$stud_portfolio = "active";
include("header.php")?>
<!-- portfolio -->
<div class="gallery-section">
	<div class="container">
		<div class="gallery-bor">
			<h3>STUDENT AREA</h3>
			
			<div class="gallery-grids">
				<div class="top-gallery">
					<div class="side_menu">
                    	<?php include("side_menu.php"); ?>
                    </div>
                    <div class="main_contain">
                    	
						  <?php
                          switch(@$_REQUEST['page'])
                          {
                              case ("c");
                              include("introduction/c.php");
                              break;
							  
							  case ("cpp");
                              include("introduction/cpp.php");
                              break;
							  
							  case ("emb");
                              include("introduction/embedded_c.php");
                              break;
							  
							  case ("c_java");
                              include("introduction/core_java.php");
                              break;
                              
                              
                              
                              default:
                              include("introduction/c.php");
                              break;
                          }
                          ?>
                    
                    </div>
					<div class="clearfix"> </div>
				</div>
					<link rel="stylesheet" href="css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script> 
						<script type="text/javascript">
							jQuery(function($) {
								$(".swipebox").swipebox();
							});
						</script>
			</div>
		</div>
	</div>
</div>
<!-- //portfolio -->
<?php include("footer.php")?>