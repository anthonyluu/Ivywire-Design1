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
        
        <link rel="stylesheet" href="css/second.css">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
            
		<link rel="stylesheet" type="text/css" href="css/override.css" />
        
        <!-- scroll effects css -->
		<link rel="stylesheet" type="text/css" href="css/component-form.css" />
        <link rel="stylesheet" type="text/css" href="css/styler.css" />
        <link rel="stylesheet" type="text/css" href="css/style-annotation.css" />
        <script src="js/onscrolleffect/modernizr.custom.js"></script>
		
		
    </head>
    <body class="contact-us">
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
					<li><a href="contact-us.php">Contact</a></li>
				</ul>
			</header>
		
            <div class="content">
    <?php
                if (isset($_REQUEST['email']))
                    {
                        $to_email = 'management@ivywire.ca';
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
                                <p>We're always looking to grow! Feel free to contact us through any of these lines:</p>
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
                                <label for='full_name'>Full name*</label>
                                <input type='text' id='full_name' name='full_name' placeholder='Enter your name' required>
                                <label for='email'>Email Address*</label>
                                <input type='text' id='email' name='email' placeholder='joe@doe.com' required>
                                <label for='phone'>Phone</label>
                                <input type='text' id='phone' name='phone' placeholder='123 455 7890'>
                                <label for='inquiry'>What are you inquiring about?*</label>
                                <select id='inquiry' name='inquiry'>
                                    <option>Mobile Apps</option>
                                    <option>Web Development</option>
                                    <option>Other</option>
                                </select>
                                <label for='message'>Details*</label>
                                <textarea id='message' name='message' required></textarea>
                            </div>
                            <div class='cbp-mc-column'>
                                <h2>Contact Us</h2>
                                <p>We're always looking to grow! Feel free to contact us through any of these lines:</p>
                                <p>Email: management@ivywire.ca</p>
                                <p>Skype: ivywire-main</p>
                            </div>
                            <div class='cbp-mc-submit-wrap'><input class='cbp-mc-submit' type='submit' value='Submit' /></div>
                        </form>
                    </div>";
                }
    ?>
                
            </div>
        </div>
        
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

		<script src="//stephband.info/jquery.event.move/js/jquery.event.move.js"></script>
		<script src="//stephband.info/jquery.event.swipe/js/jquery.event.swipe.js"></script>

		
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
                    $('#portfolio').css('color', '#A4A4A4');
                    $('#web').fadeIn('slow');    
                    $('#app').fadeIn('slow');
                });
        </script>
    </body>
</html>
