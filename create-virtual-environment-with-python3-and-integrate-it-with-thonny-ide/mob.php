<?php

	session_start();

?>

<!DOCTYPE html>

	<html lang = "en-US">

		<head>
			<title>Adeguin.com</title>
			<link rel="shortcut icon" href="adeguin-logo/spokenewsmall.ico">
			<link rel="stylesheet" type="text/css" href="mob-css/Design.css">
			<script src="mob-js/counter_and_toggle.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<!-- meta http-equiv="refresh" content="1" -->
		</head>




		<body>
	
			<!--this is the fb link -->
		
		
		
			<!--header id = "top" class = "headofpage">
			
			<img src="adeguin-logo/youserve.gif" alt="Trusted online service review" style="width:30%; height:80%; float: right;">
			</header -->


			<section class = "navigation">
				<img class = "mainlogo" src="adeguin-logo/s4.gif" alt="Trusted online service review" style="margin-left: 1%; width:200px; height:115px; float: left;">
			
			
				<div class="mymenu" onclick="mymenuFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div></a>
			
			
			</section>
		
			<div id="mySidenav" class="sidenav">
				<img class = "mainlogo" src="adeguin-logo/s4.gif" alt="Trusted online service review" style="margin-left: 3%; width:400px; height:250px; float: left;">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<br><hr style = "margin-top: 30%;">
				<a class = "blogs" href="#">Bloggs</a>
				<a href="#">Landing Offers</a>
				<a href="#">Feedback And Reviews</a>
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
				
				
					$adminfullname = $fname_s . " " . $lname_s;
				
					echo '<div id="fb-root" class = "fb-root" >
						<a style = "text-decoration: none; font-size: 45px; color: white; position: center;" href = "home.php">
						<img style = "border-radius:50px; height: 20%; width: 5%; " src="images/me.jpg" alt="Trusted online service review">' . " " .
						$fname_s . " " . $lname_s . '</a><form action = "/home/logout.php" style = "float: right;"><input type = "submit" name = "submit" style = "font-size: 40px;" method = "post" value = "Logout" = ></form>
					<hr style = "color: yellow;"></div>';
			
					/*$maincomment_form = '<form id = "comment_form" action = "commentproc.php" method = "post">
				
						<textarea id = "textarea" onKeyDown="limitText(this.form.textarea,this.form.countdown,1000);"   class = "commentbox" cols = "50" name = "MAINCOMMENT" placeholder = "Enter your comment here..." required></textarea><br>
						<font size="1">(Maximum characters: 1000)You have <input readonly type="text" name="countdown" size="3" value="1000"> characters left.</font><br><br>
						<input class = "nameincomment" type = "text" name = "MAINCOMMENTNAME" placeholder = "name" value = "' . $fname_s . '" readonly hidden>
						<input class = "emailincomment" type = "text" name = "MAINCOMMENTEMAIL" placeholder = "Email" value = "' . $email_s . '" readonly hidden>
						<input class = "websiteincomment" type = "text" name = "MAINCOMMENTWEBSITE" placeholder = "Website" value = "' . $website_s . '" readonly hidden>
						<input type = "submit" value = "Post comment">
				
					</form>'; */
				
				
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
					<a class = "Signup" href="#SignUp">  Sign Up </a><br><hr>
					
					
					<form id  = "Login" action = "/home/signinproc.php" style="display: block" method = "post">
					
						<h3 class = "myformh3" >SIGN IN</h3>
					
						<input class = "signinname" type = "text" name = "LOGINEMAIL" placeholder = "Email" autofocus required><br>
						<input class = "signinpass" type = "password" name = "LOGINPWD" placeholder = "Password" required>
					
						<br><input class = "myformbutton" type = "submit" value = "Next" >
						<br><br><hr><br>
					</form>';
				
					/*$maincomment_form = '<form id = "comment_form" action = "commentproc.php" method = "post">
							<textarea id = "textarea" onKeyDown="limitText(this.form.textarea,this.form.countdown,1000);"   class = "commentbox" cols = "50" name = "MAINCOMMENT" placeholder = "Enter your comment here..." required></textarea><br>
							<font size="1">(Maximum characters: 1000)You have <input readonly type="text" name="countdown" size="3" value="1000"> characters left.</font><br><br>
							<input class = "nameincomment" type = "text" name = "MAINCOMMENTNAME" placeholder = "name" >
							<input class = "emailincomment" type = "text" name = "MAINCOMMENTEMAIL" placeholder = "Email">
							<input class = "websiteincomment" type = "text" name = "MAINCOMMENTWEBSITE" placeholder = "Website" >
							<input type = "submit" value = "Post comment">
					</form>'; */
				
				}
			
				//////////////////////////////////////////////////////////////////////////////////////
			
			?>



			<section class = "container">
				<article class = "center">
					<h1>"Hi i am Albie the creator of this site.."</h1>
						<p>I am 10 year hobbyist python3 programmer, i am here to help you to build your own virtual Office/business.</p> 
						<p>I am able to create Dynamic and static website with PHP language.</p>
						<p>I am more capable to build website with Python Flask.</p>
							
							<p>you can try this User account for testing only coz the email validation is still underconstruction.</p>
							<p>username: jiegosilang@yahoo.com</p>
							<p>Password: ji3go</p>
							
							<h1>See my latest Vlog Tutorial below</h1>
							<p>You will learn so much from me about any related computer topics.
							programming and also about how to use linux operating system and more.</p>
							<p>if you learned very well from my video tutorial, subscribe to my youtube channel, like, share and hit the notification bell for new updates and new video uploaded. </p>
							
							<br><hr><br>
							
							<h1>Windows shared folder accessing from Linux</h1>
							<iframe width="100%" height="600px" src="https://www.youtube.com/embed/2Byeshz3SBs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<br>
			
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

					</article><!-- center end -->
			
				
				
				
			
										
			
					
					
				
				
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
									<form action = "/home/signupproc.php" method = "post">
					
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
								</div>';
								
							//echo $loginform;
						
						

						}
						
						?>
					
				
				
				</article>
			
				<br><br><br><br><br><br><br><br><br><a class = "movtotop" style = "align: center;" href="#top">Back to top</a>
			
			</section><!-- Container ends -->
		
	


			
			<br><br>
		
			<footer>
	
			<hr>
			<a class = "copyright" target="_blank" href="http://www.copyrighted.com/copyrights/view/eixo-ycap-cehu-p0h3">&copy;</a>
			Copyright 2015 by Adeguin Trusted Online Service, LLC.
			<br><a href="adeguin-html/privacy-policy" class="Privacy_Policy">Privacy Policy</a> |
			<a href="adeguin-html/terms-and-conditions" class="Terms_And_Conditions">Terms And Conditions</a> | 
			<a href="adeguin-html/disclaimer" class="Disclaimer">Disclaimer</a>
			<p class = "Notice">Prior to using this website, you should review the Terms and Conditions. Your access to and use of this Site 
			constitutes acceptance of such Terms and Conditions.</p>
			</footer>
	
	
		</body>
	
	</html>
