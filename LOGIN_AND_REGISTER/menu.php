<?php include('server.php');?>
<!DOCTYPE HTML>
<html>
   <head>
   
   <title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
   </head>
    <body>
	
         <div class="header" >
         <?php  if(isset($_SESSION['username'])):?>
          </div>
              <header id="header">
				<div class="inner">
					<h4><a href="#" class="logo"><font size="+3"><span class="fa fa-home"></span>Home</font><strong></strong></a>
		             </h4>
					<nav id="nav">
					    <a href="http://localhost/LOGIN_AND_REGISTER/menu.php"> <span class="fa fa-user"></span> Profile</a>
						<a href="http://localhost/LOGIN_AND_REGISTER/menu.php">About us</a>
						<a href="register.php?logout='1'"><span class="fa fa-sign-out"></span> Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
            <section id="banner">
				<div class="inner">
					<header>
						<H1>IOT: Agricultural field monitoring system</H1>
						<h2 style="color: white">Welcome <?php echo $_SESSION['username']?></h2>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa fa-leaf"></span>
							<h3>SENSE</h3>
							<p></p>
						</div>

						<div>
							<span class="icon fa fa-pie-chart"></span>
							<h3>ANALYSE</h3>
							<p></p>
						</div>

						<div>
							<span class="icon fa fa-product-hunt"></span>
							<h3>PRODUCE</h3>
							<p></p>
						</div>

					</div>

					<footer>
						<a href="http://localhost/LOGIN_AND_REGISTER/devices.php" class="button">Your devices</a>
					</footer>
				</div>
            </section>
            <footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					
					</form>
				</div>
				<?php 
              else:
				 ?>
				 <center>
					 <br></br><br></br>
				 <H1><font size="+2">You need to <a href="http://localhost/LOGIN_AND_REGISTER/login.php" value="login" style="color: blue">login</a> to access this page</font></H1>
			  </center>
				 <?php
              endif?>
			</footer>
    </body>
</html><?php