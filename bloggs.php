<?php

	session_start();

?>

<!DOCTYPE html>

	<html lang = "en-US">

		<head>
			<title>Adeguin.com</title>
			<link rel="shortcut icon" href="adeguin-logo/spokenewsmall.ico">
			<link rel="stylesheet" type="text/css" href="adeguin-css/bloggcss.css">
			<script src="adeguin-js/counter_and_toggle.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<!-- meta http-equiv="refresh" content="1" -->
		</head>




		<body>
	
			<!--this is the fb link -->
		
		
		
			<!--header id = "top" class = "headofpage">
			
			<img src="adeguin-logo/youserve.gif" alt="Trusted online service review" style="width:30%; height:80%; float: right;">
			</header -->


			<section class = "navigation">
				<img class = "mainlogo" src="adeguin-logo/s4.gif" alt="Trusted online service review" style="margin-left: 1%; margin-right: 10%; width:80px; height:50px; float: left;">
				<a href="index.php">Home</a>
				<a class = "active" href="bloggs.php">  BLoggs  </a>
				<a href="landing-offers.php"> Landing Offers  </a>
				<a href="contact">  Contact  </a> 
			</section>
		
		
			<!--section class = "linkshow">
		
			</section><!-- link show end -->
		
			<?php 
			
				/////////////////////////////////////////////////////////////////////////////////////
			
			
				if (isset($_SESSION['LOGINEMAIL'])){

					$fname_s = $_SESSION['LOGINFNAME'];
					$lname_s = $_SESSION['LOGINLNAME'];
					$email_s = $_SESSION['LOGINEMAIL'];
					$website_s = $_SESSION['LOGINWEBSITE'];
				
				
					$adminfullname = $fname_s . " " . $lname_s;
				
					echo '<div id="fb-root" class = "fb-root" >
						<a style = "text-decoration: none; font-size: 135%; color: white; position: center;" href = "home.php">
						<img style = "border-radius:50px; height: 15%; width: 3%; " src="images/me.jpg" alt="Trusted online service review">' . " " .
						$fname_s . " " . $lname_s . '</a><form action = "logout.php" style = "float: right;"><input type = "submit" name = "submit" style = "font-size: 10px;" method = "post" value = "Logout" = ></form>
					<hr style = "color: yellow;"></div>';
			
					$maincomment_form = '<form id = "comment_form" action = "commentproc.php" method = "post">
				
						<textarea id = "textarea" onKeyDown="limitText(this.form.textarea,this.form.countdown,1000);"   class = "commentbox" cols = "50" name = "MAINCOMMENT" placeholder = "Enter your comment here..." required></textarea><br>
						<font size="1">(Maximum characters: 1000)You have <input readonly type="text" name="countdown" size="3" value="1000"> characters left.</font><br><br>
						<input class = "nameincomment" type = "text" name = "MAINCOMMENTNAME" placeholder = "name" value = "' . $fname_s . '" readonly hidden>
						<input class = "emailincomment" type = "text" name = "MAINCOMMENTEMAIL" placeholder = "Email" value = "' . $email_s . '" readonly hidden>
						<input class = "websiteincomment" type = "text" name = "MAINCOMMENTWEBSITE" placeholder = "Website" value = "' . $website_s . '" readonly hidden>
						<input type = "submit" value = "Post comment">
				
					</form>';
				
				
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
				
					$loginform = '<a href="javascript:logintoggle();">Sign In</a>
					<a class = "Signup" href="#SignUp">  Sign Up </a><br><hr>';
				
					$maincomment_form = '<form id = "comment_form" action = "commentproc.php" method = "post">
							<textarea id = "textarea" onKeyDown="limitText(this.form.textarea,this.form.countdown,1000);"   class = "commentbox" cols = "50" name = "MAINCOMMENT" placeholder = "Enter your comment here..." required></textarea><br>
							<font size="1">(Maximum characters: 1000)You have <input readonly type="text" name="countdown" size="3" value="1000"> characters left.</font><br><br>
							<input class = "nameincomment" type = "text" name = "MAINCOMMENTNAME" placeholder = "name" >
							<input class = "emailincomment" type = "text" name = "MAINCOMMENTEMAIL" placeholder = "Email">
							<input class = "websiteincomment" type = "text" name = "MAINCOMMENTWEBSITE" placeholder = "Website" >
							<input type = "submit" value = "Post comment">
					</form>';
				
				}
			
				//////////////////////////////////////////////////////////////////////////////////////
			
			?>



			<section class = "container">
				<article class = "center">
					<h1>Create Virtual Environment With Python3 And Integrate It With Thonny IDE</h1>
							<p>-How to install python3 on terminal</p>
							<p>-How to create virtual environment using python3 command tools</p>
							<p>-How to activate virtual environment on terminal</p>
							<p>-How to install libarary directly on virtual environment</p>
							<p>- Other tips</p>
							
							<iframe width="560" height="315" src="https://www.youtube.com/embed/-tnEc2tW_rY?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
			
						
					<br><br><hr><br>
				
					<section class = "comment_box">
			
						<?php
						
						include(dbinclude.php);
				
							if (isset($_SESSION['NAME']) && isset($_SESSION['TEXTAREAREPLYCOMMENT']) && isset($_SESSION['ID'])){
		
								$ses_name = $_SESSION['NAME'];
								$ses_id = $_SESSION['ID'];
								$ses_commentreplyedit = $_SESSION['TEXTAREAREPLYCOMMENT'];
					
								unset($_SESSION['NAME']);
								unset($_SESSION['TEXTAREAREPLYCOMMENT']);
								unset($_SESSION['ID']);
			
					
								header("Location:home.php#replyedit");
			
							}
		
				
							$servername = "localhost";
							$username = "albiemer";
							$password = "albi3mer";
							$commentdbase = "comment_db";

							$conn = new mysqli($servername, $username, $password, $commentdbase);
		
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

										echo '<br><br><section id = "' . $nameidcomment . '" class = "comment_style">' . $row["Usertype"] . ':&nbsp&nbsp&nbsp' . $row["Name"] . '<hr><section class = "comment_head"><img class = "comment_image" src="images/me.jpg" alt="Trusted online service review">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>';
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
				
						<br><a id="displaycomment" href="javascript:toggle();">Hide Review Form</a>
						<div id="toggleText" style="display: block">

						<h1>POST REVIEW<h1>
				
						<!-- main comment form -->
						<?php echo $maincomment_form; ?>


						</div>
				
				
				
				
				
				
					</section><!-- comment_style_ends -->

					</article><!-- center end -->
			
				
				
				
			
					<section class = "left">
			
						<h4>REVIEW</h4>
			
						<div class="accordion vertical">
							<ul>
								<li>
								<input type="checkbox" id="checkbox-1" name="checkbox-accordion" />
								<label for="checkbox-1">&#x21e9;Linux Commands</label>
									
									<div class="content">
										<!--a href="#" class="icon-home">Electronics</a><br -->
										<!-- a href="#" class="icon-news">Software</a><br -->
										&#8680;<a href="#" class="icon-image">Games</a><br>
										<!-- a href="#" class="icon-upload">&#8680;Real States</a><br -->
										<!-- a href="#" class="icon-mail">&#8680;Beauty Products</a><br -->
										&#8680;<a href="#" class="icon-lock">Fashion Design</a><br>
				
									</div>
								</li>
		
								<li>
									<input type="checkbox" id="checkbox-2" name="checkbox-accordion" />
									<label for="checkbox-2">&#x21e9;System Failure</label>
									<div class="content">
										&#8680;<a href="#" class="icon-lock">var fullmemory issue</a><br>
										&#8680;<a href="#" class="icon-lock">error update</a><br>
										&#8680;<a href="#" class="icon-lock">unable to update</a><br -->
									</div>
								</li>
		
								<li>
									<input type="checkbox" id="checkbox-3" name="checkbox-accordion" />
									<label for="checkbox-3">&#x21e9;Solved Problems</label>
									<div class="content">
										&#8680<a href="#" class="icon-lock">unable to run OBS</a><br>
										&#8680<a href="#" class="icon-lock">Marriage</a><br>
										&#8680<a href="#" class="icon-lock">Party</a><br>
										&#8680<a href="#" class="icon-lock">Vacation</a>
									</div>
								</li>
		
								<li>
									<input type="checkbox" id="checkbox-4" name="checkbox-accordion" />
									<label for="checkbox-4">&#x21e9;PDF</label>
									<div class="content">
										&#8680<a href="#" class="icon-lock">PYTHON3</a><br>
										&#8680<a href="#" class="icon-lock">FLASK</a><br>
										&#8680<a href="#" class="icon-lock">PHP</a>
									</div>
								</li>
		
								<li>
									<input type="checkbox" id="checkbox-5" name="checkbox-accordion" />
									<label for="checkbox-5">&#x21e9;Free&nbsp;Gifts</label>
									<div class="content">
										&#8680<a href="#" class="icon-lock">Hacking Tutorials</a><br>
										&#8680<a href="#" class="icon-lock">Save & Investment</a><br -->
									</div>
								</li>
		
								<li>
									<input type="checkbox" id="checkbox-6" name="checkbox-accordion" />
									<label for="checkbox-6">&#x21e9;Tips</label>
									<div class="content">
										&#8680<a href="#" class="icon-lock">Earn Money</a><br>
										&#8680<a href="#" class="icon-lock">Hunting Job</a><br>
									</div>
								</li>
		
							</ul>
						</div>
	

						<h4>Connect with me</h4>
		
						<hr>
				
						<!-- Facebook Badge START --><!-- Facebook Badge END -->
		
					</section> <!-- left ends -->					
			
					
					<section class = "right">
				
				
						<!-- sign in-signup -->
				
						<?php echo $loginform;
				
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
									OPTIONAL:
									<input class = "regemailmodal" type = "text" name = "SIGNUPWEBSITE" placeholder = "Website..." >
						
									<br><br><input class = "myformbuttonmodal" type = "submit" value = "Next" >
								</form>
							</div>
						</div>
			
						<form id  = "Login" action = "signinproc.php" style="display: none" method = "post">
					
						<h3 class = "myformh3" >SIGN IN</h3>
					
						<input class = "signinname" type = "text" name = "LOGINEMAIL" placeholder = "Email" autofocus required><br>
						<input class = "signinpass" type = "password" name = "LOGINPWD" placeholder = "Password" required>
					
						<br><input class = "myformbutton" type = "submit" value = "Next" >
						<br><br><hr></form>';
						
						

						}
						
						?>
					
						<h5>LATEST VLOG POST</h5>
						<img src="images/scams.png" alt="Mountain View" style="width:100%; height:100%">
						<h4>This site is for outsource and recommendation only, be aware from scam when you leave from this authority site.</h4>
						<hr>
						<h5>RELATED BLOGGS</h5>
						<a href = "http://albiemer.fbstampede.hop.clickbank.net/">how to become a fucker</a>
						<a href = "http://albiemer.fbstampede.hop.clickbank.net/">how to be an astronaut</a>
						<hr>
					
						<h6>Email:<br>albiemerporte@gmail.com
						Contact Number:<br>(+63)9771348160</h6>
					
			
					</section><!-- right ends -->
				
				
				</article>
		
			</section><!-- Container ends -->
		
	


			<a class = "movtotop "href="#top">Back to top</a>
			<br><br>
		
			<footer>
	
			<hr>
			<a class = "copyright" target="_blank" href="http://www.copyrighted.com/copyrights/view/eixo-ycap-cehu-p0h3">&copy;</a> Copyright 2015 by Adeguin Trusted Online Service, LLC.
			<br><a href="spokenhtml/privacy-policy" class="Privacy_Policy">Privacy Policy</a> |
			<a href="spokenhtml/terms-and-conditions" class="Terms_And_Conditions">Terms And Conditions</a> | 
			<a href="spokenhtml/disclaimer" class="Disclaimer">Disclaimer</a>
			<p class = "Notice">Prior to using this website, you should review the Terms and Conditions. Your access to and use of this Site 
			constitutes acceptance of such Terms and Conditions.</p>
			</footer>
	
	
		</body>
	
	</html>
