
	<section id="testimonials-section" class="ht-section lz-testimonials-section">
		<div class="lightbox">
			<div class="container">
				<div class="col-md-8 col-md-offset-2 ht-section-title-tagline">					<h2 class="ht-section-title lz-testimonials-heading">Client Testimonials</h2>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<div class="testimonials-member-wrap">
					<!-- Carousel slider -->
					<div class="col-md-12 col-sm-12 col-xs-12" data-wow-delay="0.2s">
						<div class="carousel slide" data-ride="carousel" id="quote-carousel">
							<div class="nextprev"> <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> </div>
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators"> </ol>
							<!-- Carousel items -->
							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="">
										<div class="">
											<div class="testimonial-contentbox text-center">
												<div class="clearfix"></div>
												<div class="test-thumb padding0">
													<div class="mask fa fa-quote-left"></div>
													 <img src="" class="img-responsive" alt="MICHAEL DOE - PHOENIX, AZ" /> </div>
												<h6 class="secondry-text">MICHAEL DOE - PHOENIX, AZ</h6>
												<!-- <div class="text-designation">                            </div>  -->
												<div class="clearfix"></div>
												<div class="test-box">
													<p>Not only were they the most thorough with the
initial inspection, but workers also had the best
price offer I have searched for.</p>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="item ">
									<div class="">
										<div class="">
											<div class="testimonial-contentbox text-center">
												<div class="clearfix"></div>
												<div class="test-thumb padding0">
													<div class="mask fa fa-quote-left"></div> 
													<img src="" class="img-responsive" alt="CATHERINE JANE - BERKELEY, CA" /> </div>
												<h6 class="secondry-text">CATHERINE JANE - BERKELEY, CA</h6>
												<!-- <div class="text-designation">                            </div>  -->
												<div class="clearfix"></div>
												<div class="test-box">
													<p>They performed the most comprehensive
inspection and the handyman was the most
knowledgeable worker I have ever met!</p>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								
							</div>
							<!--<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>--></div>
					</div>
					<div class="clearfix"></div>
					<!-- Carousel items -->
				</div>
				<div class="clearFix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<script>
	jQuery.noConflict();
	$(function() {
		function detailsHeight() {
			var ht = 0;
			$('#testimonials-section .counter-post h5').each(function(i) {
				var tHt = $(this).height();
				if(ht < tHt) {
					ht = tHt;
				}
			});
			$('#testimonials-section .counter-post h5').height(ht + 'px');
		}
		detailsHeight();
	});
	$(window).resize(function() {
		detailsHeight();
	});
	</script>
	<script>
	jQuery.noConflict();
	$(function() {
		function testboxHeight() {
			var ht = 0;
			$('#testimonials-section .test-box').each(function(i) {
				var tHt = $(this).height();
				if(ht < tHt) {
					ht = tHt;
				}
			});
			$('#testimonials-section .test-box').height(ht + 'px');
		}
		testboxHeight();
	});
	$(window).resize(function() {
		testboxHeight();
	});
	</script>