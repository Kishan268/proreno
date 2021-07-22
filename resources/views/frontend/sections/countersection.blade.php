<section id="counter-section" class="ht-section">
		<div class="overlay" style="background-image: url(https://www.renovationsauckland.co.nz/images/0/0/mcp-2-bg.jpg)}"></div>
		<div class="container">
			<div class="clearfix"></div>
			<div class="col-md-6 col-md-offset-3 lz-counter-subheading"> </div>
			<div class="clearfix"></div>
			<div class="counterbox">
				<div class="counter-box">
					<!-- <div class="clearfix"></div> -->
					<div class="ourinfo-post-wrap">
						<div class="row ourinfo-post-boxes">
							<div class="row counter-post-boxes">
								<div class="col-md-3 col-sm-3 padding0 ourinfo-box">
									<div class="ourinfo-post text-center wow zoomIn" data-wow-duration="3s">
										<div class="details">
											<h5 class="count">100</h5>
											<h3>PROJECTS DONE</h3> </div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3 padding0 ourinfo-box">
									<div class="ourinfo-post text-center wow zoomIn" data-wow-duration="3s">
										<div class="details">
											<h5 class="count">50</h5>
											<h3>HAPPY CLIENTS</h3> </div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3 padding0 ourinfo-box">
									<div class="ourinfo-post text-center wow zoomIn" data-wow-duration="3s">
										<div class="details">
											<h5 class="count">5+</h5>
											<h3>YEARS EXPERIENCE</h3> </div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3 padding0 ourinfo-box">
									<div class="ourinfo-post text-center wow zoomIn" data-wow-duration="3s">
										<div class="details">
											<h5 class="count">20</h5>
											<h3>BUSINESS PARTNERS</h3> </div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- <div class="clearfix"></div> -->
	</section>
	<script>
	jQuery.noConflict();
	$(function() {
		function ourinfopostHeight() {
			var ht = 0;
			$('section#counter-section .ourinfo-post').each(function(i) {
				var tHt = $(this).height();
				if(ht < tHt) {
					ht = tHt;
				}
			});
			$('section#counter-section .ourinfo-post').height(ht + 'px');
		}
		ourinfopostHeight();
	});
	$(window).resize(function() {
		ourinfopostHeight();
	});
	</script>
	<script>
	$(document).ready(function() {
		var counters = $(".count");
		var countersQuantity = counters.length;
		var counter = [];
		for(i = 0; i < countersQuantity; i++) {
			counter[i] = parseInt(counters[i].innerHTML);
		}
		var count = function(start, value, id) {
			var localStart = start;
			setInterval(function() {
				if(localStart < value) {
					localStart++;
					counters[id].innerHTML = localStart;
				}
			}, 40);
		}
		for(j = 0; j < countersQuantity; j++) {
			count(0, counter[j], j);
		}
	});
	</script>