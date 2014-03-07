<?php include("header.html"); ?>
	
<?php include("slider.html"); ?>
		
		<section class="half">
		
			<h2>Write Sales, Not Orders!</h2> 
			
			<p>Put the right items in orders today, and see them show up in next weeks' sales reporting. It is just that simple. But it takes a purpose built solution to enable suppliers and retailers to consistently achieve this goal.</p>
		
			<p>Dijji Restock&#0153; was built by our industry leading experts so that your experienced personnel can fully harness their skills to drive superior sales results. Borne from a decade of use in retail's toughest Seasonal categories, Dijji Restock&#0153; is unmatched in function and boasts the most complete feature set in Seasonal Retailing today.</p>
		
		</section>
		
		<section class="half">
			
			<img src="i/restock-data-view.jpg" alt="video-placeholder" width="" height="" style="width: 100%; height: auto; margin-top: 3.5em" />
			
		</section>
		
		<div class="clear"></div>
		
		<section class="graph-section">
			
			<h2>Robust Features Your Team Needs</h2>
									
			<div class="graph-column">
				<h3>Load key attributes & detail such as:</h3>
				<ol class="graph-list">
					<li><span>Primary/secondary assignment</span></li>
					<li><span>Item volume ranking</span></li>
					<li><span>Store volume ranking</span></li>
					<li><span>High profile or problem stores</span></li>
					<li><span>Min or max inventory targets</span></li>
					<li><span>Advertised items and dates</span></li>
					<li><span>Approved item listing exceptions by date</span></li> 
					<div class="clear"></div>
				</ol>
			</div>
			
			<div class="graph-column">
				<h3>Unique &amp; Exclusive Functionality:</h3>
				<ol class="graph-list">			
					<li><span>Order review &amp; "Cleanup" routines</span></li>
					<li><span>Selective automation</span></li>
					<li><span>Live inventory tracking across multiple orders</span></li>
					<li><span>Advertised item notification & reporting</span></li>
					<li><span>Order rules & exceptions</span></li>
					<li><span>Multiple store ranking/sorting methods</span></li>
					<li><span>Unlimited custom order outputs</span></li>
					<div class="clear"></div>
				</ol>
			</div>	
			
			<div class="clear"></div>
		
		</section>
		
		<section class="half">
			
			<img src="i/dijjirestock-maps-gauge-screen.jpg" alt="dijji-restock-maps-gauge-screen" width="" height="" style="width: 100%; height: auto; margin-top: 3em;" />
		
		</section>
		
		<section class="half">
		
			<h2>Do your replenishment tools and processes give you enough control and visibility?</h2>
			<p>DijjiRestock&#0153; makes it very simple to create and review orders in the most efficient manner possible. This includes fully automated results, fully manual order writing, and anywhere in between. In fact, Restock allows you to utilize varying levels of automation and manual review in every order. That is the power of Restock. It allows your Team and ours to utilize their experience and industry expertise to create the most accurate orders possible.</p>
		
		</section>		
		
		<div class="clear"></div>
				</div>
				
<?php include("footer/footer.html"); ?>	

	<!-- FlexSlider -->
	<script defer src="jquery.flexslider.js"></script>
	
	<script type="text/javascript">
	
		//Slider 
	  	$(window).load(function() {
		    $('#std-slider').flexslider({
		      animation: 'slide',
		      controlsContainer: '.flex-container'
		    });
		    $('#m-slider').flexslider();
		});
	  	
	  	//Opens and Closes Navigation
		$(".nav-toggle").click(function () {
	    	$(".nav").slideToggle("slow");
	    });
	
	    //Shows Navigation if it has been closed before stretching to wider res
		$(window).resize(function() {
	        if($(window).width() >= 680) {
	            $('.nav').show();
	        }
	    }).resize();
	        
		//Login Dropdown Menu Hide When Click outside of Menu
		$(document).click(function() {
		    $(".login").removeClass("show");
		});
		//Login Button Trigger
		$(".login-btn").click(function(event) {
			$(".login").addClass("show");
		    event.stopPropagation();
		});	        
			        
		//Scroll Back To Top
		jQuery('.backtotop').click(function(){
			jQuery('html, body').animate({scrollTop:0}, 'slow');
		});

  	</script>

	<!-- Optional FlexSlider Additions -->
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
	
	<script src="js/tooltip.js"></script>