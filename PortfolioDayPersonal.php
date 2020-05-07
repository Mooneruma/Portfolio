<!DOCTYPE html>
<html>
<head>
  <title>Portfolio Day Personal Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<style>

	#center{
		text-align: center;
	}

	body, html {
	 background-image: url("circle-2696910_1920.jpg") !important;
	}
	
	.container{
		background-color: white;
		border-style: solid;
	}
</style>


<div class="jumbotron text-center" style =  " background: none; color: white;">
  <!--<img src = "BannerKmoonpage.png" width = "50%";>-->
 <b><h1>Kyle Moon's Portfolio Page</h1>
  <p>Please feel free to view some of my work.</p></b>
</div>
  
<div class="container">

  <div class = "row">
	<div class="col-sm-12">
		<div id = "center">
		<h3><b>Personal Message</b></h3>
		<p>I'm looking forward to exploring the future possibilities of a
		career within the web development world. Front end programming is a current passion of mine and learning how to design. Currently, I'm looking 
		for something long term that I can work on and push my programming
		skills. While I am inexperienced, once I'm employed by you, you can
		guarantee that I'm going to put in the time and effort to sharpen my skills.</p>

	</div>
	</div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
      <h3><b>Personal Info</b></h3>
      <p> <img src = "Kyle Moon.jpg" height = "350" ></p>
	  <p><h2>Kyle James William Moon</h2></p>
	<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoNine">Work History</button>
	<div id="demoNine" class="collapse">
	<h2><a href = "Resume.png" target="_blank">View My resume</a></h2>
	<h2><a href = "https://github.com/Mooneruma" target="_blank">View My Github</a></h2><br>
	<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
	<script type="IN/Share" data-url="https://www.linkedin.com/in/kyle-moon-8795421a3/"></script>
	<br><br>
	<!--  <p>Montanna Mikes</p>
	  <p>Host</p>
      <p>2011-2012</p>
	  <br>
	  <p>Culvers</p>
	  <p>Closing Manager</p>
	  <p>2012-2014</p>
	  <br>
	  <p>Papa Johns</p>
	  <p>Store Employee</p>
	  <p>2014-2015</p>
	  <br>
	  <p>Casey's</p>
	  <p>overnight store operations</p>
	  <p>2015-2016</p>
	  <br>
	  <p>QuickTrip</p>
	  <p>Night Assistant Manager</p>
	  <p>2017-Present</p>
	  <br>-->
	  </div>
    </div>
    <div class="col-sm-4">
      <h3><b>I would be happy to be in contact with you.</b></h3>
		<p>
			<?php 

	class Email{
		
			private $recipient;
			private $sender;  
			private $subject;  
			private $message;  
		
		public function  __construct($inRecipient){
			$this->recipient = $inRecipient; 
		}
		
		public function setRecipient ($inRecipient){
			$this->recipient = $inRecipient;
		}
		
		public function getRecipient (){
			return $this->recipient;
		}
		
		public function setSender ($inSender){
			$this->sender = $inSender;
		}
		
		public function getSender (){
			return $this->sender;
		}
		
		public function setSubject ($inSubject){
			$this->subject = $inSubject;
		}
		
		public function getSubject (){
			return $this->subject;
		}
		
		public function setMessage ($inMessage){
			$this->message = $inMessage;
		}
		
		public function getMessage (){
			return $this->message;
		}
		
		public function sendMail(){
		
			$to = $this->getRecipient();
			$subject = $this->getSubject();
			$messageText = wordwrap($this->getMessage(), 50, "/n", FALSE);
			$header = 'From: ' . $this->getSender();
			
			return mail($to, $subject, $messageText, $header);
			
		}
	}
	
	
	if (isset($_POST['submit'])) {
	$contactEmail = new Email(""); 
	
	$contactEmail->setRecipient("redesignedmoon@gmail.com");
	
	$contactEmail->setSender("admin@kmoonpage.com");
	
	$contactEmail->setSubject($_POST['first_name']);
	
	$contactEmail->setMessage('Contact: ' . $_POST['email'] . ' Message: ' . $_POST['message']);
	$emailStatus = $contactEmail->sendMail(); 
	?>
	<br>Thank You! your message has been recieved.<br><br>
	<?php
	}
			
			?>
			
			<form name = "ContactForm" id = "ContactForm" method="post">
				Name:<br> <input type="text" name="first_name"><br>
				Email:<br> <input type="text" name="email"><br>
				Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
				<input type="submit" name="submit" value="Submit">
			</form>

		</p>      
    </div>
    <div class="col-sm-4">
      <h3><b>Relevant Coursework</b></h3>        
	  <p>
		<ul>
			<li>Web Design</li>
			<li>HTML and CSS</li>
			<li>Digital Marketing</li>
			<li>Javascript</li>
			<li>Wordpress</li>
			<li>E-commerce</li>
			<li>PHP</li>
			<li>Photoshop & Fireworks</li>
			<li>Drupal</li>
			<li>Intro to Database</li>
			<li>React</li>
			<li>SQL & mySQL</li>
			<li>Java</li>
		</ul>
	  </p>
     
    </div>
  </div>
  
<div class = "row">
	<div class="col-sm-12">
		<div id = "center">
			<h3><b>Showcase Work</b></h3><br><br>
		</div>
	</div>
</div>
<div class = "center">
	<div class="row">
		<div class="col-sm-4">
			<div class = "border">
				<b><p><a href = "\AdvHomework/Final/bootst.html">BootStrop Final Project</p></b>
				<b><p><img src = image/BootstrapFinal.PNG width = "250" height = "150" ></a></p></b>
				<p><a href = "https://github.com/Mooneruma/CSS-SASS-and-Responsive-Design/tree/master/Final">Github link</a></p>
			</div>
			<br><br><br>
			<div class = "border">
				<b><p><a href = "homework/Project/index.html">Zanzibars Coffee</p></b>
				<b><p><img src = image/Zanzibars.PNG width = "250" height = "150"></a></p></b>
				<p><a href = "https://github.com/Mooneruma/Intro-to-HTML/tree/master/Project">Github link</a></p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class = "border">
				<b><p><a href = "\Advanced_JavaScript/Final/HomeProj.html" >Advanced JavaScript Final</p></b>
				<b><p><img src = image/AdvancedJavascript.PNG width = "250" height = "150"></a></p></b>
				<p><a href = "https://github.com/Mooneruma/Advanced_JavaScript/tree/master/Final">Github link</a></p>
			</div>	
			<br><br><br>	
			<div class = "border">
				<b><p><a href = "IntroPHP/Final/Final.php">Intro to PHP final</p></b>
				<b><p><img src = image/IntroPHP.PNG width = "250" height = "150"></a></p></b>
				<p><a href = "https://github.com/Mooneruma/Intro-to-PHP/tree/master/Final">Github link</a></p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class = "border">
				<b><p><a href = "\drupalProject/">Drupal Portfolio Project Project</p></b>
				<b><p><img src = image/DrupalFinal.PNG width = "250" height = "150"></a></p></b>
				<p>Link not included.</p>
			</div>
			<br><br><br>
			<div class = "border">
				<b><p><a href = "\Prototypes/TestProto.php">Portfolio Day Form</p></b>
				<b><p><img src = image/Form.PNG width = "250" height = "150"></a></p></b>
				<p><a href = "https://github.com/Mooneruma/PortfolioDay/tree/master/Prototypes">Github link</a></p>
			</div>
		</div>
	</div> 
</div>
  

  
<div class = "row">
	<div class="col-sm-12">
		<div id = "center">
			<h3><b>Former Work</b></h3>
		</div>
	</div>
</div>

  
	<div class="row">
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demo">Advanced JavaScript</button>
		<div id="demo" class="collapse">
			<h3>Advanced JavaScript</h3>
			<p><a href = "\Advanced_JavaScript/Assignment1/Assgn1.html" > Javascript Review</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment1/Assgn1pt2.html" > Window Object Review & DOM Review</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment2/Assgn2.html" > Define and Describe JQuery</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment2/Assgn2a.html" > Convert Javascript to JQuery</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment3/Assign3.html" > JQuery ui form</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment4/FormTest.html" > Form Validation</a></p>
			<!--<p><a href = "\Advanced_JavaScript/AjaxProj/index.php" > Team Project</a></p>-->
			<p><a href = "\Advanced_JavaScript/Recipe/RecipeProj.html" > Recipe Project</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment5/Assgn5a.html" > Dynamic Content</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment5/Assgn5b.html" > Dynamic Structure Form</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment7/JsonCreate.html" > JSON create</a></p>
			<p><a href = "\Advanced_JavaScript/Assignment8/Assignment8.html" > JSON consume</a></p>
			<p><a href = "\Advanced_JavaScript/Cookies/Cookies.html" > Cookies</a></p>
			<!--<p><a href = "\Advanced_JavaScript/React/index.html" > React</a></p>-->
			<p><a href = "\Advanced_JavaScript/Final/HomeProj.html" > Final</a></p>									
			<p><a href = "https://github.com/Mooneruma/Advanced_JavaScript">Github Files</a></p>
		</div>
		<br><br>
		</div>
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoTwo">Responsive Design</button>
		<div id="demoTwo" class="collapse">
			<h3>CSS, SASS and Responsive Design</h3>
			<p><a href = "\AdvHomework/Assgn1/Assign.html">Assignment: Research & Demonstrate CSS3 Features</a></p>
			<p><a href = "\AdvHomework/Assgn2/Assign2.html">Assignment: Research & Demonstrate the CSS3 Selectors</a></p>
			<p><a href = "\AdvHomework/Assgn3/Assign3.html">Assignment: Define CSS Preprocessor</a></p>
			<p><a href = "\AdvHomework/Assgn4/Assign4.html">Assignment: Download and Implement SASS</a></p>
			<p><a href = "\AdvHomework/Assgn5/Assign5.html">Assignment: Pre-processor Example and Demonstrate</a></p>
			<p><a href = "\AdvHomework/Assgn6/Assign6.html">Assignment: Research 2D vs 3D Transformations</a></p>
			<p><a href = "\AdvHomework/Assgn7/Assign7.html">Assignment: Demonstrate CSS 2D Transformations</a></p>
			<p><a href = "\AdvHomework/Assgn8/Assign8.html">Assignment: Demonstrate CSS 3D Transformations</a></p>
			<p><a href = "\AdvHomework/Assgn9/Assign9.html">Assignment: Demonstrate SASS Transformation Mixin</a></p>
			<p><a href = "\AdvHomework/10/Assign10.html">Assignment: Demonstrate CSS Transitions</a></p>
			<p><a href = "\AdvHomework/11/Assign11.html">Assignment: Demonstrate SASS Transition Mixin</a></p>
			<p><a href = "\AdvHomework/12/Assign12.html">Demonstrate CSS 2D Transformations working with CSS Transitions</a></p>
			<p><a href = "\AdvHomework/13/Assign13.html">Assignment: Research CSS Animations</a></p>
			<p><a href = "\AdvHomework/14/Assign14.html">Assignment: Demonstrate CSS Animations</a></p>
			<p><a href = "\AdvHomework/14/Assign14.html">Assignment: Demonstrate SASS Animation Mixin</a></p>
			<!--<p><a href = "\AdvHomework/Addproj/AdprojSpde.html">Project: Advertising Effect</a></p>-->
			<p><a href = "\AdvHomework/Atoz/Atoz.html">Atoz CSS Media Queries</a></p>
			<p><a href = "\AdvHomework/Atoz/Atoz.html">Demonstrate And Apply CSS media queries</a></p>
			<p><a href = "\AdvHomework/Nav/navAssign.html">Navigation Menu</a></p>
			<!--<p><a href = "\AdvHomework/BootStrap/Research.html">Research and review Bootstrap</a></p>-->
			<p><a href = "\AdvHomework/BootStrap/bootst.html">Demonstrate Bootstrap</a></p>
			<p><a href = "\AdvHomework/BootDemo/bootst.html">Boostrap apppcation and demonstrate</a></p>
			<p><a href = "\AdvHomework/Choice/Choice.html">Responsive Design Framework Choice</a></p>
			<!--<p><a href = "\AdvHomework/Choice/Research.html">research responsive Design Demonstrate</a></p>-->
			<p><a href = "\AdvHomework/Choice/Choice.html">Responsive Design Framework Demo</a></p>
			<p><a href = "\AdvHomework/Final/bootst.html">Portfolio Project</a></p>
			<p><a href = "\drupalProject/">Drupal Portfolio Project Project</a></p>
			<!--<p><a href = "\FourthWallReviews/">FourthWall Website Portfolio Project Project</a></p>-->
			<p><a href = "https://github.com/Mooneruma/CSS-SASS-and-Responsive-Design">Github Files</a></p>
		</div>
		<br><br>
		</div>
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoThree">Intro to HTML and CSS</button>
		<div id="demoThree" class="collapse">
			<h3>Intro to HTML and CSS</h3>        
			<p><a href = "\formHandler/WDV101-exampleFormHandler.html">Form Handler</a></p>
			<p>Tutorial One</p>
			<p><a href="homework/Tutorial1/case1/shopsolution.htm">Case 1</a></p>
			<p><a href="homework/Tutorial1/case2/bricksolution.htm">Case 2</a></p>
			<p>Tutorial Two</p>
			<p><a href="homework/Tutorial3/case1/wireless.html">Case 1</a></p>
			<p><a href="homework/Tutorial3/case2/record.htm">Case 2</a></p>
			<p>Pathname Project</p>
			<p><a href= "homework/WDV 101 PathName Project/index.htm">Pathname Project</a></p>
			<p>Tutorial 4</p>
			<p><a href = "homework/Tutorial4/case2/womensweb.html">Case 2</a></p>
			<p><a href = "homework/Tutorial4/case3/power.html">Case 3</a></p>
			<p>Lab Project 1</p>
			<p><a href = "homework/LabProj/CityGarden.html">Lab project1</a></p>
			<p>Tutorial 5</p>
			<p><a href = "homework/Tutorial5/case3/books.html">Case3</a></p>
			<p><a href = "homework/Tutorial5/case4/hope.html">Case4</a></p>
			<p>Tutorial 6</p>
			<p><a href = "homework/Tutorial6/case3/ziller.html">Case3</a></p>
			<p><a href = "homework/Tutorial6/case4/travel.html">Case4</a></p>
			<p>Tutorial 7</p>
			<p><a href = "homework/Tutorial7/case2/letter.html">Case2</a></p>
			<p><a href = "homework/Tutorial7/case4/hooks.html">Case4</a></p>
			<p>Tutorial 8</p>
			<p><a href = "homework/Tutorial8/case2/berst.html">Case2</a></p>
			<p><a href = "homework/Tutorial8/case4/personal.html">Case4</a></p>
			<p>Tutorial 9</p>
			<p><a href = "homework/Tutorial9/case2/food.html">Case2</a></p>
			<p><a href = "homework/Tutorial9/case4/survey.html">Case4</a></p>
			<p>Form Example</p>
			<p><a href = "homework/Form/FormH.html">Case4</a></p>
			<p>Zanzibars Coffee Project</p>
			<p><a href = "homework/Project/index.html">Zanzibars Coffee</a></p>
			<p><a href = "https://github.com/Mooneruma/Intro-to-HTML">Github Files</a></p>
		</div>
		<br><br>
		</div>
	</div>  
	<div class="row">
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoFour">Intro to PHP</button>
		<div id="demoFour" class="collapse">
			<h3>Intro to PHP</h3>
			<p><a href = "IntroPHP/testGit.php" > Download Git Client & Create a Repository account </a></p>
			<p><a href = "IntroPHP/PhpBasic.php" > PHP basics </a></p>
			<p><a href = "IntroPHP/Package/Functions.php" > PHP Functions </a></p>
			<p><a href = "IntroPHP/studentInfoForm/studentInfoForm.php" > Self Posting Form </a></p>
			<p><a href = "IntroPHP/Emailer/ObjEmail.php" > Emailer Test</a></p>
			<p><a href = "IntroPHP/Package/Self-Post.php">Self-Post</a></p>
			<p><a href = "IntroPHP/Package/Validate.php">Validate</a></p>
			<p><a href = "IntroPHP/Package/FormPage.php">Insert</a></p>
			<p><a href = "IntroPHP/Package/UnrestrictedDisplay.php">Display Events</a></p>
			<p><a href = "IntroPHP/Package/SelectOne.php">Display One Event</a></p>
			<p><a href = "IntroPHP/Package/UnrestrictedDisplay.php">Delete Buttons</a></p>
			<p><a href = "IntroPHP/Package/UnrestrictedDisplay.php">Update Buttons</a></p>
			<p><a href = "IntroPHP/Package/TimeAssgn.php">Skill Test</a></p>
			<p><a href = "IntroPHP/Package/Login.php">Login</a></p>
			<p><a href = "IntroPHP/Package/Login.php">Login Page</a></p>
			<!--<p><a href = "https://github.com/Mooneruma/WDV341KM">Github repo</a></p>-->
			<p><a href = "IntroPHP/Final/Final.php">Final</a></p>
			<p><a href = "https://github.com/Mooneruma/Intro-to-PHP">Github Files</a></p>
		</div>
		<br><br>
		</div>
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoFive">Java II video Demonstrations</button>
		<div id="demoFive" class="collapse">
			<h3>Java II video Demonstrations</h3>
			<p><a href = "JavaII/Verification/OracleAboutKmoon.png">Eclipse Verificaiton</a></p>
			<p><a href = "JavaII/SQLAssmnt/AssmntVid.html">Java using SQL and Maven</a></p>
			<p><a href = "JavaII/Servlets/Servlets.mp4">Servlets</a></p>
			<p><a href = "JavaII/WeekFive/WeekFive.mp4">Web Servlets</a></p>
			<p><a href = "JavaII/JavaServer/2019-10-07 17-51-48.mp4">Web Server Lists</a></p>
			<p><a href = "JavaII/GroupProj/JavaGroupProj.mp4">Java Group Proj</a></p>
			<p><a href = "JavaII/Verification/Verify.mp4">JavaScript Verification</a></p>
		</div>
		<br><br>
		</div>
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoSix">Photoshop Sample Work</button>
		<div id="demoSix" class="collapse">
			<h3>Photoshop Sample Work</h3>        
			<p><a href = "Photoshop/Assignment1/Assign1.html" > Unit 1 Part 1</a></p>
			<p><a href = "Photoshop/Assignment1Part2/Assign1Part2.html" > Unit 1 Part 2</a></p>
			<p><a href = "Photoshop/Responsive/Image_Gallery.html" > Unit 1 Responsive sizing</a></p>
			<p><a href = "Photoshop/graphics_webpage/graphic_images.html" > Unit 1 part 2</a></p>
			<p><a href = "Photoshop/color_tone_project/color_images_wepage/color_images.html" > Unit 2 Correct Tone & Color Project</a></p>
			<p><a href = "Photoshop/repair_images_wepage/repair_images.html" > Image repair</a></p>
			<p><a href = "Photoshop/special_effects_wepage/speciaL_effects.html" > Special effects</a></p>
			<p><a href = "Photoshop/additional_practice_wepage/speciaL_effects.html" > Additional practice</a></p>
			<p><a href = "Photoshop/vignettes_wepages/vignettes_1.html" > Vignettes Part 1</a></p>
			<p><a href = "Photoshop/vignettes_wepages/vignettes_2.html" > Vignettes Part 2</a></p>
			<p><a href = "Photoshop/vignettes_wepages/vignettes_3.html" > Vignettes Part 3</a></p>
			<p><a href = "Photoshop/adjusted_images_wepages/images.html" > Adjusting images</a></p>
			<p><a href = "Photoshop/replacing_backgrounds_wepage/replaced_backgrounds.html" >Replacing backgrounds</a></p>
			<p><a href = "Photoshop/student_animations&videos/student_webpage_evening.html" >Final Animation and Video</a></p>
		</div>
		<br><br>
		</div>
	</div>
  	<div class="row">
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoSeven">Intro to JavaScript</button>
		<div id="demoSeven" class="collapse">
			<h3>Intro to JavaScript</h3>
			<p><a href = "WDV221/homework/introductionAssignment.html">Intro</a></p>
			<p><a href = "WDV221/homework/Project3Assignment1Checkbook.htm">project 3 Assign.</a></p>
			<p><a href = "WDV221/homework/variablesAssignment.html">variables Assign</a></p>
			<p><a href = "WDV221/homework/stringAssignment.html"> String Assign </a></p>
			<p><a href = "WDV221/homework/Random.html">Random Assign</a></p>
			<p><a href = "WDV221/homework/ClassLabProject.html">Class Project</a></p>
			<p><a href = "WDV221/homework/MyExam.html"> Lab Exam</a></p>
			<p><a href = "WDV221/homework/textfieldsAssignment.html"> Text Feilds Assignment</a></p>
			<p><a href = "WDV221/homework/assignmentCompareNames.html"> Compare Names</a></p>
			<p><a href = "WDV221/homework/assignmentCompareNumbers.html"> Compare Numbers</a></p>
			<p><a href = "WDV221/homework/loopsAssignment.html"> Loops Assignment</a></p>
			<p><a href = "WDV221/homework/arraysAssignment.html"> Array Assignment</a></p>
			<p><a href = "WDV221/homework/loopsProject.html">loops project</a></p>
			<p><a href = "WDV221/homework/formFieldProcessing.html"> form Assignment</a></p>
			<p><a href = "WDV221/homework/CheckEnhance.html"> Checkbook redone</a></p>
			<p><a href = "WDV221/homework/greetingFunction.html"> greeting function Group project</a></p>
			<p><a href = "WDV221/homework/DateFormat.html"> Date Format</a></p>
			<p><a href = "WDV221/homework/adProj/Advertisement.html"> Advertisement project</a></p>
			<p><a href = "WDV221/homework/slider/bannerRotator.html"> Slider</a></p>
			<p><a href = "https://github.com/Mooneruma/IntroToJavaScript">Github Files</a></p>
		</div>
		<br><br>
		</div>
		<div class="col-sm-4">
		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#demoEight">Plug-in and Digital Purchases</button>
		<div id="demoEight" class="collapse">
			<h3>Plug-in and Digital Purchases</h3>
			<a href = "WebsiteApp/Demo2/SocialLinks.html">Social link Demo</a><br>
			<a href = "WebsiteApp/VidDemo/VideoSamples.html">Video Player Demo</a><br>
			<a href = "WebsiteApp/paypal/PaypalFeilds.html">Pay Pal</a><br>
			<a href = "WebsiteApp/PaypalExpress/PayExpress.html">Pay Pal Express</a><br>
			<a href = "WebsiteApp/DigitalSell/Digital.html">Digital Downloads</a><br>
			<a href = "WebsiteApp/Dataviz/DataExmple.html">Data Exaple</a><br>
			<p><a href = "https://github.com/Mooneruma/Website-Applications">Github Files</a></p>
		</div>
		<br><br>
		</div>
		<div class="col-sm-4">
			
		</div>
	</div> 
	
	<div class = "row">
		<div class="col-sm-12">
			<div id = "Media">
				
			</div>
		</div>
	</div>	
	
	<div class = "row">
		<div class="col-sm-12">
			<div id = "Footer">
				<div id = "center">
				<br>
				Designed By Kyle Moon<br>
				Dmacc 2020<br>
				</div>
			</div>
		</div>
	</div>

</div>


</body>
</html>
