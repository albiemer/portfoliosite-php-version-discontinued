<?php

	session_start();

?>

<!DOCTYPE html>

	<html lang = "en-US">

		<head>
			<title>Adeguin.com</title>
			<meta name="copyrighted-site-verification" content="fc39c1de0477f117" />
			<link rel="shortcut icon" href="adeguin-logo/spokenewsmall.ico">
			<link rel="stylesheet" href="adeguin-css/Design.css">
			<script src="adeguin-js/counter_and_toggle.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<!-- meta http-equiv="refresh" content="1" -->
		</head>




		<body>
	
			<!--this is the fb link -->
		
		
		
			<!--header id = "top" class = "headofpage">
			
			<img src="adeguin-logo/youserve.gif" alt="Trusted online service review" style="width:30%; height:80%; float: right;">
			</header -->


			<section class = "navigation">
				<img class = "mainlogo" src="adeguin-logo/s4.gif" alt="Trusted online service review" style="margin-left: 1%; margin-right: 10%; width:80px; height:50px; float: left;">
				<a class = "active" href="index.php"> Home </a>
				<a href="create-virtual-environment-with-python3-and-integrate-it-with-thonny-ide/bloggs.php"> bLoggs </a>
				<a href="landing-offers.php"> Project  </a>
				<a href="contact">  Contact  </a> 
			
			
				<div class="mymenu" onclick="mymenuFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div></a>
			
			
			</section>
		
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#">About</a>
				<a href="#">Services</a>
				<a href="#">Clients</a>
				<a href="#">Contact</a>
			</div>
		
			
			<!--section class = "linkshow">
		
			</section><!-- link show end -->
		
			<?php 
			
				/////////////////////////////////////////////////////////////////////////////////////
				
				if (isset($_SESSION['LOGINEMAIL'])){

					$fname_s = $_SESSION['LOGINFNAME'];
					$lname_s = $_SESSION['LOGINLNAME'];
					$email_s = $_SESSION['LOGINEMAIL'];
					$website_s = $_SESSION['LOGINWEBSITE'];
					$myid_s = $_SESSION['LOGINID'];
					$profile_s = $_SESSION['LOGINMYPROFILE'];
					
				
				
					$adminfullname = $fname_s . " " . $lname_s;
				
					echo '<div id="fb-root" class = "fb-root" >
						<a style = "text-decoration: none; font-size: 100%; color: white; position: center;" href = "index.php">
						<img style = "border-radius:50px; height: 15%; width: 3%; " src="' . "/Useraccount/" . $email_s . "/" . $profile_s . '" alt="Trusted online service review">' . " " .
						$fname_s . " " . $lname_s . '</a><form action = "logout.php" style = "float: right;"><input type = "submit" name = "submit" style = "font-size: 10px;" method = "post" value = "Logout" = ></form>
					<hr style = "color: yellow;"></div>';
				
				
					if (isset($_SESSION['SUBDELETE'])){
				
						unset($_SESSION['SUBDELETE']);
				
						echo '<div id = "thisisnotyoursubcommentdelete" class="modalDialog">				
									<form action = "javascript:history.go(-1)" method = "post">
										<br><br><h3 class = "deleteconfirmlabel" style = "margin-top: 20%" >This is not your comment and unable to delete.</h3>
										<br><br><input style = "margin-left: 30%;" class = "myformbuttonmodal" type = "submit" value = "ok" >
									</form>
								</div>';
				
					}
				
					if(isset($_SESSION['SUBEDIT'])){
					
					
						echo '<div id = "thisisnotyoursubcommentedit" class="modalDialog">				
									<form action = "javascript:history.go(-1)" method = "post">
										<br><br><h3 class = "deleteconfirmlabel" style = "margin-top: 20%" >This is not your comment and unable to edit.</h3>
										<br><br><input style = "margin-left: 30%;" class = "myformbuttonmodal" type = "submit" value = "ok" >
									</form>
								</div>';
					}
					
				
				}else{  //half
				
					$myprofilename = '<h4>Albiemer Porte</h4>';
				
					$loginform = '<br><a href="javascript:logintoggle();">Sign In</a>
					<a class = "Signup" href="#SignUp">☞  Sign Up </a><br><hr>
					
					
					<form id  = "Login" action = "signinproc.php" style="display: block" method = "post">
					
						<h3 class = "myformh3" >SIGN IN</h3>
					
						<input class = "signinname" type = "text" name = "LOGINEMAIL" placeholder = "Email" required><br>
						<input class = "signinpass" type = "password" name = "LOGINPWD" placeholder = "Password" required>
					
						<br><input class = "myformbutton" type = "submit" value = "Next" >
						<br><br><hr><br>
					</form>';

				
				}
			
				//////////////////////////////////////////////////////////////////////////////////////
			
			?>



			<section class = "container">
				
				<?php echo $its, $_SESSION['FAILEDUPLOAD']; ?>
				
				<article class = "center">
					
					<h1>"Hello! My name is Albie and i'm a designer with a portfolio."</h1>
						<p>I am 10 year hobbyist python3 programmer, i am here to help you to build your own virtual Office/business.</p>
						<p>I am more capable to build website with Python Flask.</p>
							
							<p>subscribe now or click <a href = "home.php#SignUp">SIGNUP</a> to learn more about computer technology and additional tips and tricks.</p>

							
							<h1>See my latest Vlog Tutorial below</h1>
							<p>You will learn here with any Computer related topics.
							programming and also about how to use linux operating system and more.</p>
							<p>if you learned well from my video tutorial, subscribe to my youtube channel, like, share and hit the notification bell to make you update for new uploaded videos. </p>
							
							<br><hr><br>
							
							<h1>Create Virtual Environment With Python3 And Integrate It With Thonny IDE</h1>
							<p>-How to install python3 on terminal</p>
							<p>-How to create virtual environment using python3 command tools</p>
							<p>-How to activate virtual environment on terminal</p>
							<p>-How to install libarary directly on virtual environment</p>
							<p>- Other tips</p>
							
							<iframe width="100%" height="315" src="https://www.youtube.com/embed/-tnEc2tW_rY?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<br><hr>
							
							<h1>LEARN STEP BY STEP WTIH SCREESHOTS</h1>
							<h4>STEP 1: Install Python3</h4>
								to install python3 programming language to your computer if you haven't yet.<br><br> 
								<img src="vlogimages/create-virtual-environment-with-python3-and-integrate-it-with-thonny-ide/installpython3.jpg" alt="Mountain View" style="width:100%; height:100%">
												
								<h4>STEP 2: Create virtual environment using python3 venv command tools "python3 -m venv <samplefolder>"</h4>
								be sure that you know the current directory for creating virtual environment folder<br><br>
								<img src="vlogimages/create-virtual-environment-with-python3-and-integrate-it-with-thonny-ide/python3venv.jpg" alt="Mountain View" style="width:100%; height:100%">
												
								<h4>STEP 3: Activate virtual environment that was created from python3 venv command.</h4>
								just type on the terminal "source samplefolder/bin/activate" then after you activate you will see at the begin the "(samplefolder) schop@debpc:~$"<br><br>
								<img src="vlogimages/create-virtual-environment-with-python3-and-integrate-it-with-thonny-ide/venvactivate.jpg" alt="Mountain View" style="width:100%; height:100%">
								
								<h4>STEP 4: Install library using pip or pip3.</h4>
								Be sure that your virtual environment is activated on the terminal before to install library, to make sure that the library are only be installed on virtual environment and not to the libary of python3 of your operating system.<br><br>
								Tips: its better to install library on virtual environment to avoid install unnecesaary library on python3 in your operating system and that way your system can be avoid become polluted library that does not needed from your system.<br><br>
								<img src="vlogimages/create-virtual-environment-with-python3-and-integrate-it-with-thonny-ide/pip3install.jpg" alt="Mountain View" style="width:100%; height:100%">
								<br>
								
								<h4>Click here to fully view article and write a comment..,
									<BR><a href = "article.html">CLICK HERE TO CONTINUE READING ARTICLE...</a>
									<br>
								</h4>
							
							<hr>
							
							
						<?php
							include("dbinclude.php");
							if (isset($_SESSION['NAME']) && isset($_SESSION['TEXTAREAREPLYCOMMENT']) && isset($_SESSION['ID'])){
		
								$ses_name = $_SESSION['NAME'];
								$ses_id = $_SESSION['ID'];
								$ses_commentreplyedit = $_SESSION['TEXTAREAREPLYCOMMENT'];
					
								unset($_SESSION['NAME']);
								unset($_SESSION['TEXTAREAREPLYCOMMENT']);
								unset($_SESSION['ID']);
			
					
								header("Location:home.php#replyedit");
			
							}
		
				
									
							if (!$conn){
								echo 'Connect Failed';
							}
				
							$comment_read = "SELECT * FROM $dbinclude ORDER BY ID";
							$result = $conn->query($comment_read);
	
							if ($result->num_rows>0){
		
								while($row = $result->fetch_assoc()){
			
									$nameid = $row["Name"] . $row["Id"];
									$nameidcomment = $row["Name"] . $row["Id"] . "comment";
									$nameiddelete = $row["Name"] . $row["Id"] . "delete";
									$nameidedit = $row["Name"] . $row["Id"] . "edit";
			
			
						
									if ('albiemer' == $row["Name"] && 'albiemer.porte@yahoo.com' == $email_s){

										echo '<br><br><section id = "' . $nameidcomment . '" class = "comment_style">' . $row["Usertype"] . ':&nbsp&nbsp&nbsp' . $row["Name"] . '<hr><section class = "comment_head"><img class = "comment_image" src="' . $row["Email"] . "/" . $row["Myprofile"] . '" alt="Trusted online service review">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>';
										echo '<textarea id = "comment_content" class = "comment_content" disabled name = "textareacomment" resize = "none" rows = "12" cols = "10">' . $row["Comment"] . '</textarea></section>';
					
										echo '<hr><a id = "clkedit" class = "reply_to_albiemer" href = "#' . $nameidedit . '">EDIT</a> &nbsp | &nbsp <a class = "reply_to_albiemer" href = "#' . $nameiddelete . '">DELETE</a><hr>';
						
					
										echo $row["Delete_content"];
					
										$commentreplytoexplode = $row["Comment_reply"]; 
					
										$commentreplytoexplode = (explode(',', $commentreplytoexplode));
					
										$replycount = count($commentreplytoexplode) - 1;
					
										echo  '<a id="displaycomment" href="javascript:replycount();">Reply(' . $replycount . ')</a>
												<div id="replycountdiv" style="display:block;"><br>';
					
					 
					
				
										foreach ($commentreplytoexplode as $item) {
											echo $item;
										}
					
										echo '</div>';
							
										echo '<br><hr>';
							
										echo '<div id = "replyedit" class="modalDialogedit2" style="border-left:1px solid green; height: auto; margin-left: 3%;">
												<br><hr><br>&nbsp&nbsp' . $ses_name . '<hr><section class = "comment_head">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>
												<a href="javascript:history.go(-1)" title="Close" class="close">X</a>
												<form action = "commentreplyedit.php" method = "post">
												<textarea id = "comment_content" class = "comment_content_edit" name = "TEXTAREACOMMENT" resize = "none" rows = "12" cols = "10" autofocus required>' . $ses_commentreplyedit . '</textarea>
												<textarea id = "comment_content" class = "comment_content_edit" name = "TEXTAREACOMMENTOLD" resize = "none" rows = "12" cols = "10" readonly hidden >' . $ses_commentreplyedit . '</textarea>
												<input type = "text" name = "NAME" value = "' . $ses_name . '" readonly hidden>
												<input type = "text" name = "ID" value  = "' . $ses_id . '" readonly hidden>
												<br>&emsp;<input type = "submit" value = "Save Edit">
										</form></div><br>';

											///////////////////////////////////
							
							
							
							
				
				
									}elseif($row["Email"] == $email_s){

										echo '<br><section id = "' . $nameidcomment . '" class = "comment_style">' . $row["Usertype"] . ':&nbsp&nbsp&nbsp' . $row["Name"] . '<hr><section class = "comment_head"><img class = "comment_image" src="images/minion.jpg" alt="Trusted online service review">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>';
										echo '<textarea id = "comment_content" class = "comment_content" disabled name = "textareacomment" resize = "none" rows = "12" cols = "10">' . $row["Comment"] . '</textarea></section>';
				
										echo '<hr><a id = "clkedit" class = "reply_to_albiemer" href = "#' . $nameidedit . '">EDIT</a> &nbsp | &nbsp <a class = "reply_to_albiemer" href = "#' . $nameiddelete . '">DELETE</a><hr>';
				
										echo $row["Delete_content"];
					
										$commentreplytoexplode = $row["Comment_reply"]; 
					
										$commentreplytoexplode = (explode(',', $commentreplytoexplode));
					
										$replycount = count($commentreplytoexplode) - 1;
					
					
					
										echo  '<a id="displaycomment" href="javascript:replycount();">Reply(' . $replycount . ')</a>
											<div id="replycountdiv" style="display:block;"><br>';
					
				
										foreach ($commentreplytoexplode as $item) {
											echo $item;
										}
					
										echo '</div>';
					
										echo '<br><hr>';
					
										echo '<div id = "replyedit" class="modalDialogedit2" style="border-left:1px solid #000; height: auto; margin-left: 3%;">
												<br><hr><br>&nbsp&nbsp' . $ses_name . '<hr><section class = "comment_head">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>
												<a href="javascript:history.go(-1)" title="Close" class="close">X</a>
												<form action = "commentreplyedit.php" method = "post">
												<textarea id = "comment_content" class = "comment_content_edit" name = "TEXTAREACOMMENT" resize = "none" rows = "12" cols = "10" autofocus required>' . $ses_commentreplyedit . '</textarea>
												<textarea id = "comment_content" class = "comment_content_edit" name = "TEXTAREACOMMENTOLD" resize = "none" rows = "12" cols = "10" readonly hidden>' . $ses_commentreplyedit . '</textarea>
												<input type = "text" name = "NAME" value = "' . $ses_name . '" readonly hidden>
												<input type = "text" name = "ID" value  = "' . $ses_id . '" readonly hidden>
												<br>&emsp;<input type = "submit" value = "Save Edit">
										</form></div><br>';
				
				
				
									}else{
					
										echo '<br><section id = "' . $nameidcomment . '" class = "comment_style">' . $row["Usertype"] . ':&nbsp&nbsp&nbsp' . $row["Name"] . '<hr><section class = "comment_head"><img class = "comment_image" src="images/minion.jpg" alt="Trusted online service review">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>';
										echo '<textarea id = "comment_content" class = "comment_content" disabled name = "textareacomment" resize = "none" rows = "12" cols = "10">' . $row["Comment"] . '</textarea></section>';
				
										echo $row["Delete_content"];
					
										$commentreplytoexplode = $row["Comment_reply"]; 
					
										$commentreplytoexplode = (explode(',', $commentreplytoexplode));
					
										$replycount = count($commentreplytoexplode) - 1;
					
					
										echo  '<a id="displaycomment" href="javascript:replycount();">Reply(' . $replycount . ')</a>
												<div id="replycountdiv" style="display:block;"><br>';
				
										foreach ($commentreplytoexplode as $item) {
											echo $item;
										}
					
										echo '</div>';
					
										echo '<br><hr>';
					
										echo '<div id = "replyedit" class="modalDialogedit2" style="border-left:1px solid #000; height: auto; margin-left: 3%;">
												<br><hr><br>&nbsp&nbsp' . $ses_name . '<hr><section class = "comment_head">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>
												<a href="javascript:history.go(-1)" title="Close" class="close">X</a>
												<form action = "commentreplyedit.php" method = "post">
												<textarea id = "comment_content" class = "comment_content_edit" name = "TEXTAREACOMMENT" resize = "none" rows = "12" cols = "10" autofocus required>' . $ses_commentreplyedit . '</textarea>
												<textarea id = "comment_content" class = "comment_content_edit" name = "TEXTAREACOMMENTOLD" resize = "none" rows = "12" cols = "10" readonly hidden>' . $ses_commentreplyedit . '</textarea>
												<input type = "text" name = "NAME" value = "' . $ses_name . '" readonly hidden>
												<input type = "text" name = "ID" value  = "' . $ses_id . '" readonly hidden>
												<br>&emsp;<input type = "submit" value = "Save Edit">
											</form></div><br>';
					
									}//albiemer

								} // fetch_assoc Test
				
							} // num_rows test
				

							$conn->close();
			
						?>				

					</article><!-- center end -->
			
				
				
				
			
					<section class = "left">
			
						<?php echo $myprofilename; ?>
						
						<div class="accordion vertical">
						
						<?php
						if (isset($_SESSION['LOGINEMAIL'])){
						echo '<img src="' . 'Useraccount/' . $email_s . '/' . $profile_s . '" style = "width: 55%; height: auto;" alt="Italian Trulli">';
						
						echo '<form method = "post" action = "uploadpic.php" enctype="multipart/form-data">
							<input type="file" name="choosefile" required>
							<br><button type="submit upload" name="uploadfile">upload now</button>
						</form>';
						
						
						}else{
						echo '<img src="images/me.jpg" style = "width: 55%; height: auto;" alt="Italian Trulli">';
						}
						?>
						
						
						<br><br><br>
						
						<img src="images/my-prolevel.jpg" style = "width: 55%; height: auto;" alt="Italian Trulli">
						
						</div>
							
						<hr>
						
						<a href="https://www.linkedin.com/in/albiemer-porte/">
							<img src="images/linkedin.png" style = "width: 55%; height: auto;" alt="Italian Trulli">
						</a>
						<hr>
						
						<h6>Email:<br>albiemerporte@gmail.com
						Contact Number:<br>(+63)9771348160<br>
						Telephone No.:<br>(02)83627681</h6>
				
						<!-- Facebook Badge START --><!-- Facebook Badge END -->
		
					</section> <!-- left ends -->					
			
					
					<section class = "right">
				
				
						<!-- sign in-signup -->
				
						<?php
				
						if (isset($_SESSION['SIGNUPERROR'])){
			
								$signuperror = $_SESSION['SIGNUPERRORFORM'];
			
								unset($_SESSION['SIGNUPERRORFORM']);
								unset($_SESSION['SIGNUPERROR']);
								
								echo $signuperror;
			
						}else{
				
							echo '<div id="SignUp" class="modalDialog">
									<div>
									<a href="javascript:history.go(-1)" title="Close" title="Close" class="close">X</a>
									<form action = "signupproc.php" method = "post">
					
									<h3 class = "myformh3modal" >SIGN UP</h3>
						
									<h5 style = "color:red;"></h5>
									<input class = "regnamemodal" type = "text" name = "SIGNUPFNAME" placeholder = "First Name..." required><br>
									<input class = "regnamemodal" type = "text" name = "SIGNUPLNAME" placeholder = "Last Name..." required><br>
									<input class = "regemailmodal" type = "email" name = "SIGNUPEMAIL" placeholder = "Email..." required>
									<input class = "regemailmodal" type = "password" name = "PPASSWORD" placeholder = "Password..." required>
									<input class = "regemailmodal" type = "password" name = "CONFIRMPASSWORD" placeholder = "Confirm Password..." required>
									OPTIONAL:
									<input class = "regemailmodal" type = "text" name = "SIGNUPWEBSITE" placeholder = "Website..." >
						
									<br><br><input class = "myformbuttonmodal" type = "submit" value = "Next" >
									</form>
									</div>
								</div>';
								
							echo $loginform;
						
						

						}
						
						$conn->close();
						
						?>
					
						<b>Previous VLOG</b>
						<br><br>
						<a href = "access-folder-from-android-phone-to-linux-part-1.php">
						<img src="vlogimages/access-folder-from-android-phone-to-linux-part-1/AFFAPTLP1.jpg" alt="Mountain View" style="width:100%; height:100%">
						</a>
						<h4>This tutorial is about how to access folder from Linux OS to Windows OS.</h4>
						<hr>
						<h4>Messages</h4>
						<img src="images/scams.png" alt="Mountain View" style="width:100%; height:100%">
						<h4>This site is for outsource and recommendation only, be aware from scam when you leave from this authority site.</h4>
						<hr>
						<h5>RELATED BLOGGS</h5>
						<a href = "http://albiemer.fbstampede.hop.clickbank.net/">how to become a fucker</a>
						<a href = "http://albiemer.fbstampede.hop.clickbank.net/">how to be an astronaut</a>
						<hr>
					
			
					</section><!-- right ends -->
				
				
				</article>
			
				<br><br><a class = "movtotop" style = "align: center;" href="#top">Back to top</a>
			
			</section><!-- Container ends -->
		
	


			
			<br><br>
		
			<footer>
	
			
			<a class = "copyright" target="_blank" href="http://www.copyrighted.com/copyrights/view/eixo-ycap-cehu-p0h3">&copy;</a>Copyright 2015 by Adeguin Trusted Online Service, LLC.
			<br><a href="adeguin-html/privacy-policy" class="Privacy_Policy">Privacy Policy</a> <a>|</a>
			<a href="adeguin-html/terms-and-conditions" class="Terms_And_Conditions">Terms And Conditions</a> | 
			<a href="adeguin-html/disclaimer" class="Disclaimer">Disclaimer</a>
			<p class = "Notice">Prior to using this website, you should review the Terms and Conditions. Your access to and use of this Site 
			constitutes acceptance of such Terms and Conditions.</p>
			</footer>
	
	
		</body>
	
	</html>
