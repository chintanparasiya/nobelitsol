<?php 
$home = "active";
include("header.php");?>
<!-- banner -->
<div class="banner">
	<div class="container">
<!-- responsiveslides -->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
						</script>
			<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-info">
								<div class="bann-top">
									<div class="banner-right">
										<div class="bann-pad">
											  <h1>Welcome to Nobel IT Solutions & Development</h1>
											  <p>We offer wide range of training and development courses in the IT field and various services from the traditional web application development to the mobile application development.</p>
											  <a href="about">Learn More Now</a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<div class="bann-top second">
									<div class="banner-right">
										<div class="bann-pad">
											  <h1>We believe in transformation of IT stakeholders...</h1>
											  <p>We aim to provide syllabus wise courses for BCA, BCs, MCA, MCM, MCs, Engineering and Diploma students. We also conduct IT language courses including C, C++, JAVA, .net, PHP etc.</p>
											  <a href="about">Learn More Now</a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</li>
					</ul>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="bann-bot">
	<div class="container">
		<div class="banner-info-second">
			<div class="row bann-col">
				<div class="col-md-4 banner-grid">
					<i></i><h2>Solutions Made Easy</h2>
						<div class="clearfix"></div>
					<p>We aim to provide syllabus wise courses for BCA, BCs, MCA, MCM, MCs, Engineering and Diploma students. We also conduct IT language courses including C, C++, JAVA, .net, PHP etc.</p>
					<p><a class="btn btn-default" href="about" role="button">Read More</a></p>
				</div>
				<div class="col-md-4 banner-grid">
					<span></span><h2>We Listen To You</h2>
						<div class="clearfix"></div>
					<p>We offer wide range of training and development courses in the IT field and various services from the traditional web application development to the mobile application development.</p>
					<p><a class="btn btn-default" href="about" role="button">Read More</a></p>
				</div>
				<div class="col-md-4 banner-grid">
					<label></label><h2>Monitoring your Output</h2>
						<div class="clearfix"></div>
					<p>Noble IT Solutions is a Pune based institution engaged in providing training and development courses and services such as web application development for students and corporate professionals.</p>
					<p><a class="btn btn-default" href="about" role="button">Read More</a></p>
				</div>
					
			</div>
			<div class="news">
				<div class="news-left">
					<p>We believe in transformation of IT stakeholders...</p>
				</div>
				<div class="news-right">
					<a href="about">Get More News</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
	</div>
</div>
<!-- //banner-bottom -->
<?php include("footer.php");?>