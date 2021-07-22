<section id="oursteps-section" class="ht-section">
		<div class="lightbox">
			<div class="wow fadeInUp" data-wow-duration="1s">
				<div class="row aboutbox">
					<div class="col-md-8 col-md-offset-2 ht-section-title-tagline">
					
						<h2 class="ht-section-title lz-oursteps-heading">
							Our Steps						</h2>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="container">
				<div class="col-md-12">
					<div class="oursteps-wrap wow fadeInLeft">
						<div class="oursteps-boxes">
							<div class="col-md-4 col-sm-6 tag-wrap padding0">
								<div class="tag">
									<div class="featured-icon"> <span class="fa fa-users"></span> </div>
									<div class="clearfix"></div>
									<h5 class="title">Meet Customers</h5>
									<div class="clearfix"></div>
									<div class="description">Arrange the meeting with the client to take the client project and fix the quotation of work done. </div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 tag-wrap padding0">
								<div class="tag">
									<div class="featured-icon"> <span class="fa fa-search"></span> </div>
									<div class="clearfix"></div>
									<h5 class="title">Planning &amp; Reserch</h5>
									<div class="clearfix"></div>
									<div class="description">After that in step two, we do the planning and research the product we are going to build. </div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 tag-wrap padding0">
								<div class="tag">
									<div class="featured-icon"> <span class="fa fa-files-o"></span> </div>
									<div class="clearfix"></div>
									<h5 class="title">Finalize the Work</h5>
									<div class="clearfix"></div>
									<div class="description">At last, we finalize the project and hand over the product to the customer. </div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<script>
	jQuery.noConflict();
	$(function() {
		function tagHeight() {
			var ht = 0;
			$('#oursteps-section .tag').each(function(i) {
				var tHt = $(this).height();
				if(ht < tHt) {
					ht = tHt;
				}
			});
			$('#oursteps-section .tag').height(ht + 'px');
		}
		tagHeight();
	});
	$(window).resize(function() {
		tagHeight();
	});
	</script>