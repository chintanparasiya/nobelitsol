<?php 
$portfolio = "active";
include("header.php")?>
<!-- portfolio -->
<div class="gallery-section">
	<div class="container">
		<div class="gallery-bor">
			<h3>PORTFOLIO</h3>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<div class="gallery-grids">
				<div class="top-gallery">
					<?php
					include("database.php");
					$select_project = mysqli_query($con, "select * from project");
					while($row_project = mysqli_fetch_array($select_project)){
					?>
                    <div class="col-md-3 gallery-grid gallery1">
						<a href="project/<?php echo $row_project['images'];?>" class="swipebox"><img src="project/<?php echo $row_project['images'];?>" class="img-responsive" style="height:150px;" alt="/">
							<div class="textbox">
								<p><?php echo $row_project['title'];?></p>
							</div></a>
					</div>
                    <?php
					}
					?>
					<div class="clearfix"></div>
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