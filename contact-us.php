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
        
		<link rel="stylesheet" type="text/css" href="css/default-fixed-pics.css" />
        
        <!-- scroll effects css -->
		<link rel="stylesheet" type="text/css" href="css/demo-onscroll-effect.css" />
		<link rel="stylesheet" type="text/css" href="css/component-form.css" />
        <script src="js/onscrolleffect/modernizr.custom.js"></script>
		
		
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<div class="container">
			<header class="clearfix">
				<div class="logo-section">
					<span>New and rebuilt</span>
					<h1>IvyWire Dev</h1>
				</div>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/">Portfolio</a></li>
					<li><a href="contact-us.php">Contact</a></li>
				</ul>
			</header>
		
            <div class="content">
    <?php
                if (isset($_REQUEST['email']))
                    {
                        $to_email = 'toemail@example.com';
                        $name = $_REQUEST['full_name'];
                        $phone = $_REQUEST['phone'];
                        $email = $_REQUEST['email'] ;
                        $inquiry = $_REQUEST['inquiry'];
                        $message = $_REQUEST['message'] ;
                        $headers = "From: info@example.com\r\n";
                        $headers .= "Reply-To: ".$email."\r\n";
                        $headers .= "Content-Type: text/html";
                        $string = "
                            <p>Hello Admin</p>
                            <p>Someone  has applied to your services with the following information:</p>
                            <br>
                            <p>Name: ".$name."</p>
                            <br>
                            <p>Telephone: ".$phone."</p>
                            <br>
                            <p>Email: ".$email."</p>
                            <br>
                            <p>This client would like to inquire about: ".$inquiry."</p>
                            <br>
                            <p>Message: ".$message."</p>
                            ";
                        
                        mail($to_email, $subject, $string, $headers);
                        echo "<div id='contact'>
                        <form class='cbp-mc-form'>
                            <div class='cbp-mc-column'>
                                <h2>Contact Us</h2>
                                <p>Interested in working with us? Feel free to contact us through any of these lines:</p>
                                <p>Email: ivywireline@gmail.com</p>
                                <p>Skype: ivywire-main</p>
                            </div>
                            <div class='cbp-mc-column'>
                                <p>Thank you for your interest.</p>
                            </div>";
                    }
                else
                {
                    echo "<div id='contact'>
                        <form class='cbp-mc-form' method='post' action='/contact-us.php'>
                            <div class='cbp-mc-column'>
                                <h2>Contact Us</h2>
                                <p>Interested in working with us? Feel free to contact us through any of these lines:</p>
                                <p>Email: ivywireline@gmail.com</p>
                                <p>Skype: ivywire-main</p>
                            </div>
                            <div class='cbp-mc-column'>
                                <label for='full_name'>Full name*</label>
                                <input type='text' id='full_name' name='full_name' placeholder='Enter your name' required>
                                <label for='email'>Email Address*</label>
                                <input type='text' id='email' name='email' placeholder='joe@doe.com' required>
                                <label for='phone'>Phone*</label>
                                <input type='text' id='phone' name='phone' placeholder='123 455 7890' required>
                                <label for='inquiry'>What are you inquiring about?*</label>
                                <select id='inquiry' name='inquiry'>
                                    <option>Mobile Apps</option>
                                    <option>Web Development</option>
                                    <option>Other</option>
                                </select>
                                <label for='message'>Details*</label>
                                <textarea id='message' name='message' required></textarea>
                            </div>
                            <div class='cbp-mc-submit-wrap'><input class='cbp-mc-submit' type='submit' value='Submit' /></div>
                        </form>
                    </div>";
                }
    ?>
                
            </div>
        </div>
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script src="//code.jquery.com/jquery-latest.min.js"></script>

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

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	<!--fixedbackground script-->
		<script>
			$(function() {
				cbpFixedScrollLayout.init();
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
        
        
        <!--onscroll effect script-->
        <script src="js/onscrolleffect/classie.js"></script>
		<script src="js/onscrolleffect/cbpScroller.js"></script>
		<script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
		</script>
        <script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller2' ) );
		</script>
        <script>
		$(".cbp-mc-form").validate();
		</script>
    </body>
</html>
