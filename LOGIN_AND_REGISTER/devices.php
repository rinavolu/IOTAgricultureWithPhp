<?php include('server.php');?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<center><body class="subpage" >
    <header id="header">
				<div class="inner">
               <a href="http://localhost/LOGIN_AND_REGISTER/devices.php" class="logo" ><strong>DEVICES</strong></a>
					<nav id="nav">
					       <a href="#">Faq</a>
                           <a href="http://localhost/LOGIN_AND_REGISTER/menu.php">About us</a>
                           
                           <a href="register.php?logout='1'">  <span class="fa fa-sign-out"></span> Logout</a>
                           
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
            </header>
            <div   style="background-image: url('templated-projection/images/deviceslogo.jpg');">
            <font size="+2">
            <h3 style="color:black;"><br></br>Your Devices</h3>
              </font>

            <?php if(isset($_SESSION["username"])):?> 
             <?php  $flag=0;
              $count=0;
               $loginname=($_SESSION['username']);
               $username_query_a="select node_a from access where USER_ID='$loginname'";
               $result_r = mysqli_query($dbname,$username_query_a)->fetch_array()[0] ?? '';
               if($result_r == "yes"){
               ?> 
                   <ul class="actions">
                  <li> 
                     <font size="+2">
                      <a href="http://localhost/LOGIN_AND_REGISTER/testpagenodea.php"class="button special" value="nodeA">
                      <span class="fa fa-database"></span>
                      node_A</a> 
                  </font>
                 </li>
                    </ul>
                    
                   <?php
               $count=$count+1;
               }
               $username_query_b="select node_b from access where USER_ID='$loginname'";
               $result_r = mysqli_query($dbname,$username_query_b)->fetch_array()[0] ?? '';
               if($result_r=="yes"){
               ?>
                 <ul class="actions">
                  <li>
                  <font size="+2">
                   <a href="http://localhost/LOGIN_AND_REGISTER/testpagenodeb.php" class="button special" value="nodeB">
                   <span class="fa fa-database"></span>
                   node_B</a>
               </font>
                   </li>
                    </ul> 
                   <?php
               $count=$count+1;
               }
               if($count == 0){
               ?><h3><mark style="background-color:#90EE90">It seems you dont have any devices. To deploy contact us</mark></h3>
                   <ul class="actions">
                   <li>
                       <a href="#" class="button special">Contact us</a>
                    </li>
               </ul>
                    <?php
               }
               else if($count<=1)
               {
                ?><h3><mark style="background-color:#90EE90">To deploy contact us</mark></h3>
                <ul class="actions">
                <li>
                    <a href="#" class="button special">Contact us</a>
                 </li>
                </ul>
                 <?php
               }
               ?>
               <br></br>
               <ul class="actions">
               <li>
                <font size="+2" >
               <a href="http://localhost/LOGIN_AND_REGISTER/menu.php" class="button fit"><span class="fa fa-home"></span>Home</a>
               </font>
               <br></br>
               <br></br>
               <br></br>
               
               </li>
               </ul>
               <?php
               ?>
             <?php endif ?>
          </div>
         
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

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>
         </div>
		<!-- Scripts -->
			<script src="templated-projection/assets/js/jquery.min.js"></script>
			<script src="templated-projection/assets/js/skel.min.js"></script>
			<script src="templated-projection/assets/js/util.js"></script>
			<script src="templated-projection/assets/js/main.js"></script>

	</body><center>
</html>