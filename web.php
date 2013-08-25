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
					<li><a id="portfolio" href="#">Portfolio</a></li>
                    <li><a id="web" class="hide" href="web.php">Websites</a></li>
                    <li><a id="app" class="hide" href="apps.php">Mobile Apps</a></li>
					<li><a href="contact-us.php" class="checked">Contact</a></li>
				</ul>
			</header>

			
			<section>
			
				<div class="ao-item">
                    <h1>Our Websites</h1>
					<div class="ao-details">
						<h2>IvyWire Development</h2>
						<p>What better example of our portfolio than our very own website? This website was written and rewritten several times until a design was finally agreed upon by all 5 team members. The website itself was written in the ever-powerful HTML5 alongside CSS3 and some JavaScript to spice it up. This is undoubtedly one of the best websites in our portfolio.</p>
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
						<h2>J&D Recruitment</h2>
						<p>J&D Recruitment is a recruitment agency based in Toronto. The J&D Recruitment website is the first web development project we have done. During the course of the project, we have gained invaluable knowledge in web programming languages such as HTML 5, PHP, CSS3 and JavaScript.</p>
						<p><a href="http://janddrecruitment.com/index.php">Take a look &rarr;</a></p>
					</div>
					<div class="ao-preview">
						<input type="checkbox" id="ao-toggle" class="ao-toggle" name="ao-toggle" />
						<img src="images/jd.jpg" alt="image02" width="700px"/>
						<div class="ao-annotations">
							<span>Easy Logo Upload</span>
							<span>Custom Post Portfolio</span>
							<span>Custom Background Color and Pattern</span>
						</div>
					</div>
				</div>
				
			</section>
            <footer>
                <div class="footer-section">
                    <h4><b>Contact Information</b></h4>
                    <p><b>Email:</b> <a href="mailto:management@ivywire.ca">management@ivywire.ca</a></p>
                    <p><b>Skype:</b> <a href="skype:ivywire-main">ivywire-main</a></p>
                </div>
                <div class="footer-section">
                
                </div>
                <div class="footer-section footer-right">
                    <a href="/">Home</a>
                    <a href="web.php">Websites</a>
                    <a href="apps.php">Mobile Apps</a>
                    <a href="contact-us.php">Contact Us</a>
                </div>
            </footer>
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
                $('#portfolio').click(function(){
                    $('#portfolio').css('color', 'black');
                    $('#web').fadeIn('slow');    
                    $('#app').fadeIn('slow');
                    
                    this.blur();
                });
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
