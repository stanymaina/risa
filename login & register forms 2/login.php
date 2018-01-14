<?php 
include "ASEngine/AS.php"; 
if($login->isLoggedIn())
    header("Location: index.php");

$token = $register->socialToken();
ASSession::set('as_social_token', $token);
$register->botProtection();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Risa Login/Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="asset/css/form-elements.css">
        <link rel="stylesheet" href="asset/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="asset/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="asset/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="asset/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="asset/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="asset/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	<div class="container">
                	
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>Risa Technologies</h1>
                        <div class="description">
                        	<p>
	                         	By <a href="#" target="_blank"><strong>Oquion</strong></a>
                        	</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 show-forms">
                    	<span class="show-register-form active">Register</span> 
                    	<span class="show-forms-divider">/</span> 
                    	<span class="show-login-form">Login</span>
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" action="" method="post" class="r-form auth-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="r-form-first-name">First name</label>
	                        	<input type="text" name="r-form-first-name" placeholder="First name..." class="r-form-first-name form-control" id="r-form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Last name</label>
	                        	<input type="text" name="r-form-last-name" placeholder="Last name..." class="r-form-last-name form-control" id="r-form-last-name">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Username</label>
	                        	<input type="text" name="r-form-last-name" placeholder="Username..." class="r-form-last-name form-control" id="reg-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-email">Email</label>
	                        	<input type="text" name="r-form-email" placeholder="Email..." class="r-form-email form-control" id="reg-email">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Password</label>
	                        	<input type="text" name="r-form-last-name" placeholder="Password..." class="r-form-last-name form-control" id="reg-password">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Last name</label>
	                        	<input type="text" name="r-form-last-name" placeholder="Repeat Password..." class="r-form-last-name form-control" id="reg-repeat-password">
	                        </div>
							<div class="form-group">
	                        	<input type="text" name="r-form-last-name" placeholder="<?php echo ASSession::get("bot_first_number"); ?> + 
                                <?php echo ASSession::get("bot_second_number"); ?>" class="r-form-last-name form-control" id="reg-bot-sum">
	                        </div>
	                        <!-- <div class="form-group">
	                        	<label class="sr-only" for="r-form-about-yourself">About yourself</label>
	                        	<textarea name="r-form-about-yourself" placeholder="About yourself..." 
	                        				class="r-form-about-yourself form-control" id="r-form-about-yourself"></textarea>
	                        </div> -->
				            <button type="submit" class="btn" id="btn-register">Sign me up!</button>
						</form>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-pencil"></i></div>
							<div class="col-sm-10">
								<h3>Beautiful Forms</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-commenting"></i></div>
							<div class="col-sm-10">
								<h3>Awesome Login</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-magic"></i></div>
							<div class="col-sm-10">
								<h3>Great Registration</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
                    </div>
                </div>
                
                <div class="row login-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" action="" method="post" class="l-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="l-form-username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="l-form-username form-control" id="login-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="l-form-password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="l-form-password form-control" id="login-password">
	                        </div>
				            <button type="submit" class="btn" id="btn-login">Sign in!</button>
				    	</form>
				    	<div class="social-login">
                        	<p>Or login with:</p>
                        	<div class="social-login-buttons">
								<?php if ( FACEBOOK_ENABLED ): ?>
	                        	<a class="btn btn-link-1" href="socialauth.php?p=facebook&token=<?php echo $token; ?>"><i class="fa fa-facebook"></i></a>
								<?php endif; ?>
								
								<?php if ( TWITTER_ENABLED ): ?>
	                        	<a class="btn btn-link-1" href="socialauth.php?p=twitter&token=<?php echo $token; ?>"><i class="fa fa-twitter"></i></a>
								<?php endif; ?>
								
								<?php if ( GOOGLE_ENABLED ): ?>
	                        	<a class="btn btn-link-1" href="socialauth.php?p=google&token=<?php echo $token; ?>"><i class="fa fa-google-plus"></i></a>
								<?php endif; ?>
								
                        	</div>
                        </div>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-user"></i></div>
							<div class="col-sm-10">
								<h3>New Features</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-eye"></i></div>
							<div class="col-sm-10">
								<h3>Easy To Use</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-twitter"></i></div>
							<div class="col-sm-10">
								<h3>Social Integrated</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
                    </div>
                </div>
                    
        	</div>
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by Carl Stanley at <a href="#" target="_blank"><strong>Oquion</strong></a> 
        					having a lot of fun. <i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="asset/js/jquery-1.11.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/jquery.backstretch.min.js"></script>
        <script src="asset/js/scripts.js"></script>
		<script type="text/javascript" src="ASLibrary/js/asengine.js"></script>
        <script type="text/javascript" src="ASLibrary/js/register.js"></script>
        <script type="text/javascript" src="ASLibrary/js/login.js"></script>
        <script type="text/javascript" src="ASLibrary/js/passwordreset.js"></script>
        
        <!--[if lt IE 10]>
            <script src="asset/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>