<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/unslider.css">
        
		<link rel="stylesheet" type="text/css" href="css/component-fixed-pics.css" />
		<link rel="stylesheet" type="text/css" href="css/default-fixed-pics.css" />
        <link rel="stylesheet" type="text/css" href="css/styler.css" />
        
        
        <link rel="stylesheet" type="text/css" href="css/style-annotation.css" />
        <script src="js/modernizr.custom.js"></script>
		
		
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container">
			<header class="clearfix">
                
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="apps.php">Apps</a></li>
                    <li><a href="web.php">Web</a></li>
					<li><a href="contact-us.php" class="checked">Contact</a></li>
				</ul>
			</header>

			
			<section>
			
				<div class="ao-item">
                    <h1>Apps</h1>
					<div class="ao-details">
						<h2>App 1</h2>
						<p>Here is one of our simple apps that we created. It works by taking a bit of this and adding it to a bit of that. With a bit of tweaking, we were able to build what you see on the left.</p>
						<p><a href="/">Take a look &rarr;</a></p>
					</div>
					<div class="ao-preview">
						<input type="checkbox" id="ao-toggle" class="ao-toggle" name="ao-toggle" />
						<img src="images/template1.jpg" alt="image01" width="700px" />
						<div class="ao-annotations">
							<span>Full Localisation Support   &#62;</span>
							<span>Custom Image Widget</span>
							<span>Blog and Contact Widgets</span>
							<span>Easy Theme Options</span>
							<span>4 Footer Widget Columns</span>
						</div>
					</div>
				</div>
				
				<div class="ao-item ao-item-left">
					<div class="ao-details">
						<h2>App 2</h2>
						<p>The design of this app makes a great match with a portfolio. It comes with many features like full localisation support and easy theme options.</p>
						<p><a href="http://themeforest.net/item/blenton-premium-wordpress-template/1995225">Try it here &rarr;</a></p>
					</div>
					<div class="ao-preview">
						<input type="checkbox" id="ao-toggle" class="ao-toggle" name="ao-toggle" />
						<img src="images/template2.jpg" alt="image02" width="700px"/>
						<div class="ao-annotations">
							<span>Easy Logo Upload</span>
							<span>Custom Post Portfolio</span>
							<span>Custom Background Color and Pattern</span>
						</div>
					</div>
				</div>
				
			</section>
			
		</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script src="//stephband.info/jquery.event.move/js/jquery.event.move.js"></script>
		<script src="//stephband.info/jquery.event.swipe/js/jquery.event.swipe.js"></script>

		<script src="//unslider.com/unslider.min.js"></script>
		
	<!-- scrolling layout script includes -->
		<script src="js/jquery.easing.min.js"></script>
		<!-- waypoints jQuery plugin by http://imakewebthings.com/ : http://imakewebthings.com/jquery-waypoints/ -->
		<script src="js/waypoints.min.js"></script>
		<!-- jquery-smartresize by @louis_remi : https://github.com/louisremi/jquery-smartresize -->
		<script src="js/jquery.debouncedresize.js"></script>
		<script src="js/cbpFixedScrollLayout.min.js"></script>
	<!-- scrolling layout script includes END-->

	<!--fixedbackground script-->
		<script>
			$(function() {
				cbpFixedScrollLayout.init();
			});
		</script>
                
    <!-- toggle script -->
        <script>
            function DisplayOne(){
                
            }
            function DisplayTwo(){
            
            }
            function DisplayThree(){
            
            }
        </script>
	<!--slider script-->
		<script>
			if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
			}

			$('.banner').unslider({
				arrows: true,
				fluid: true,
				dots: true
			});

			//  Find any element starting with a # in the URL
			//  And listen to any click events it fires
			$('a[href^="#"]').click(function() {
				//  Find the target element
				var target = $($(this).attr('href'));

				//  And get its position
				var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

				//  jQuery will return false if there's no element
				//  and your code will throw errors if it tries to do .offset().left;
				if(pos) {
					//  Scroll the page
					$('html, body').animate({
						scrollTop: pos.top,
						scrollLeft: pos.left
					}, 1000);
				}

				//  Don't let them visit the url, we'll scroll you there
				return false;
			});

			var GoSquared = {acct: 'GSN-396664-U'};
		</script>
    </body>
</html>
