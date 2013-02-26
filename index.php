<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Software Transformator</title>
        <link rel="stylesheet" type="css/text" href="css/style.css"/>
		<link rel="stylesheet" type="css/text" href="savecss.css"/>
        <script src="js/jquery-1.3.js" type="text/javascript"></script>  
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
        <script src="js/animated-menu.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <span class="tit">Software Transformator</span>
            </div>
            <div class="navbar">
                <hr>
                <ul>
                    <li class="black">
                        <p><a href="#">Home</a></p>
                    </li>
                    <li class="black">
                        <p><a href="member.php">Member</a></p>
                        <p class="subtext">Get in touch</p>
                    </li>
                    <li class="black">
                        <p><a href="schedule.php">Schedule</a></p>
                        <p class="subtext">Send us your stuff!</p>
                    </li>
                    <li class="black">
                        <p><a href="#">Sharing</a></p>
                        <p class="subtext">Legal things</p>
                    </li>
                    <li class="black">
                        <p><a href="chatting.php">Chating</a></p>
                        <p class="subtext">Legal things</p>
                    </li>
                    <li class="black">
                        <p><a href="#">About</a></p>
                        
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
			<div class="banner">
                <img src="images/jkt.jpg" style="margin-left:10px; width:1330px; height:565px; position:center;"/>
        		</div>
				<div class="sidebar" style="background:url('images/bg.jpg'); height:1373px; position:relative; width:375px">
				<div id="form_wrapper" class="form_wrapper">
					<form class="register">
						<h3>Register</h3>
						<div class="column">
							<div>
								<label>First Name:</label>
								<input type="text" />
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Last Name:</label>
								<input type="text" />
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Website:</label>
								<input type="text" value="http://"/>
								<span class="error">This is an error</span>
							</div>
						</div>
						<div class="column">
							<div>
								<label>Username:</label>
								<input type="text"/>
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Email:</label>
								<input type="text" />
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Password:</label>
								<input type="password" />
								<span class="error">This is an error</span>
							</div>
						</div>
						<div class="bottom">
							<div class="remember">
								<input type="checkbox" />
								<span>Send me updates</span>
							</div>
							<input type="submit" value="Register" />
							<a href="index.html" rel="login" class="linkform">You have an account already? Log in here</a>
							<div class="clear"></div>
						</div>
					</form>
					<form class="login active">
						<h3>Login</h3>
						<div>
							<label>Username:</label>
							<input type="text" />
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password: <a href="forgot_password.html" rel="forgot_password" class="forgot linkform">Forgot your password?</a></label>
							<input type="password" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<div class="remember"><input type="checkbox" /><span>Keep me logged in</span></div>
							<input type="submit" value="Login"></input>
							<a href="register.html" rel="register" class="linkform">You don't have an account yet? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
					<form class="forgot_password">
						<h3>Forgot Password</h3>
						<div>
							<label>Username or Email:</label>
							<input type="text" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<input type="submit" value="Send reminder"></input>
							<a href="index.html" rel="login" class="linkform">Suddenly remebered? Log in here</a>
							<a href="register.html" rel="register" class="linkform">You don't have an account? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
				<div class="clear"></div>
			</div>
		<div class="line-separator"></div>
		
		<section class="tabs" style="position:absolute; margin-top:550px;">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Artikel</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Related</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		        <label for="tab-3" class="tab-label-3">Kategori</label>
			
	            <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4">Twitter</label>
            
			    <div class="clear-shadow"></div>
			
		        <div class="content">
			        <div class="content-1">
						<h2>Artikel</h2>
                        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
						</div>
			        <div class="content-2">
						<h2>Related Post</h2>
                        <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
						</div>
			        <div class="content-3">
						<h2>Kategori</h2>
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
						</div>
				    <div class="content-4">
						<h2>Twitter</h2>
                        <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.</p>
						</div>
		        </div>
			</section>
			</div>
		
		
	<?php 
	include 'footer.php';
	?>	
    </body>
</html>
