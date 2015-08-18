<?php 
$clients = "active";
include("header.php");?>
<!-- services-page -->
<div class="clients-page">
	<div class="container">
		<div class="clients-bor">
			<div class="clients-info">
				<h3>CLIENTS</h3>
				<p>Over 5000+ clients in less than 1.5 years including Fortune 500 companies. Some of them are listed below.</p>
			</div>
			<div class="clients-grids">
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 5,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:320,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				<ul id="flexiselDemo1">			
					<li>
						<div class="client-grid text-center">
							<img src="images/7.png" alt="" />
						</div>
					</li>
					<li>
						<div class="client-grid text-center">
							<img src="images/8.png" alt="" />
						</div>
					</li>
					<li>
						<div class="client-grid text-center">
							<img src="images/9.png" alt="" />
						</div>
					</li>
					<li>
						<div class="client-grid text-center">
							<img src="images/10.png" alt="" />
						</div>
					</li>
					<li>
						<div class="client-grid text-center">
							<img src="images/11.png" alt="" />
						</div>
					</li>
				</ul>
			</div>

			<div class="clients-say">
				<div class="clients-info">
					<h3>OUR CLIENTS SAY ABOUT US</h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo 
					inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="say-grids">
					<div class="say-grid">
						<div class="col-md-3 say-left">
							<img src="images/23.png" alt=""/>
						</div>
						<div class="col-md-9 say-right">
							<p>Lorem ipsum dolor amet,  libero turpis non cras ligula, libero turpis non cras ligula, id commodo, aenean est in 
								volutpat amet sodales, porttitor bibendum facilisi suspendisse </p>	
							<p><i><span>John Doe</span>- Managing Director of Samsung</i></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="say-grid">
						<div class="col-md-9 say-right a">
							<p>Lorem ipsum dolor amet,  libero turpis non cras ligula, libero turpis non cras ligula, id commodo, aenean est in 
								volutpat amet sodales, porttitor bibendum facilisi suspendisse </p>	
							<p><i><span>Patrick</span>- Managing Director of Nokia</i></p>
						</div>
						<div class="col-md-3 say-left a">
							<img src="images/24.png" alt=""/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //services-page -->
<?php include("footer.php");?>