<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Physical Education Depatment | NIT Calicut</title>
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Arial.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,#menu,#copy,.blog-date');
	</script>
	<script type="text/javascript" src="js/fancyzoom.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('div.photo a').fancyZoom({directory: 'images/zoom', scaleImg: true, closeOnClick: true});
		});
	</script>
	<style>
	.backspace
	{margin-left:-10px;}
	#main b
	{
		/*margin-top:-40px;*/
		margin-left:40px;
	}
	.heading
	{
		margin-left:15px;
	}
	</style>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>
<body>
		
	<div id="banner">
		<img src="images/banner.jpg"></img>
	</div>
	<div id="bg">
		<div class="wrap">
			
			<!-- logo -->
			<h1><a href="index.php">Events images</a></h1>
			<!-- /logo -->
			
			
			
			<!-- pitch -->
			<div id="pitch">
				<div id="slideshow">
					
					<!-- 1st frame -->
					<div class="active">
						<img src="images/pitch/11.jpg" alt="" />
						<div class="overlay transparent">
							<h2>Description 1</h2>
							<p>Desc1</p>
						</div>
					</div>
					<!-- /1st frame -->
					
					<!-- 2nd frame -->
					<div>
						<img src="images/pitch/22.jpg" alt="" />
						<div class="overlay transparent">
							<h2>Description 2</h2>
							<p>DESC2</p>
						</div>
					</div>
					<!-- /2nd frame -->
					
					<!-- 3rd frame -->
					<div>
						<img src="images/pitch/33.jpg" alt="" />
						<div class="overlay transparent">
							<h2>Description 3</h2>
							<p>Desc3</p>
						</div>
						<!--<p class="arrow"><a href="#"></a></p>-->
					</div>
					<!-- 3rd frame -->
					
				</div>
			</div>
			
			<div id="menutab">
  			     <div id="Menu">	
				 <ul><li><a current href="index.php" target="_self">Home</a></li></ul>
			    	 <ul><li><a href="#" target="_self">PEOPLE</a>
			    	 	<ul>
			    	 		<li><a href="people.php">Faculty</a></li>
			    	 		<li><a href="staff.php">Staff</a></li>
			    	 	</ul>
			    	 	</li>
			    	 </ul>
			    	 <ul>
			    	 	<li><a href="#" >TEAMS</a>
			    	        <ul >
			    	        	<li><a href="">Atheletics</a></li>
			    	        	<li><a href="#">Football</a></li>
			    	        	<li><a href="#">Vollyball</a></li>
			    	        	<li><a href="#">Cricket</a></li>
			    	        	<li><a href="#">Badminton</a></li>
			    	        	<li><a href="#">Handball</a></li>
			    	        	<li><a href="#">Hockey</a></li>
			    	        </ul>
			    	        </li>
			    	 </ul>
			    	 <ul>
			    	 	<li><a href="#" >RANKING</a>
			    	        <ul >
			    	        	<li><a href="">Atheletics</a></li>
			    	        	<li><a href="#">Football</a></li>
			    	        	<li><a href="#">Vollyball</a></li>
			    	        	<li><a href="#">Cricket</a></li>
			    	        	<li><a href="#">Badminton</a></li>
			    	        	<li><a href="#">Handball</a></li>
			    	        	<li><a href="#">Hockey</a></li>
			    	        </ul>
			    	        </li>
			    	 </ul>
			    	 <ul><li><a href="news.php" >NEWS</a></li>
			    	        <li><a href="./history.php" target="_self">HISTORY</a></li></ul>
			    	 <ul><li><a href="course.php" target="_self">COURSE</a></li></ul>
			    	 <ul><li><a href="facilities.php" target="_self">FACILITIES</a></li></ul>
			    	 <ul><li><a href="activities.php" target="_self">ACTIVITIES</a></li></ul>    	
    				 <br class="clearFloat" />
			</div>
			<div id="main">
				<h2 class=heading><u> Course Results </u></h2>
				<b class="results">
					<?php
					session_start();
					require "dbconnect.php";
					echo "<h2><style color:red;font-family:Arial><u>Notifications for result</u></style></h2>";
					echo "<table align='center'>";
					$result=mysql_query("select * from notification where type='result'") or die(mysql_error());
					while($row=mysql_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>".$row['description']."</td>";
						echo "<td><a href=./testupload/".$row['filename'].".pdf"."> download</td>";
						echo "</tr>";				
					}
					echo "</table>";
					?>
				</b>
			</div>
			<!-- /main -->
			
		
		</div>
			
		<!-- footer -->
		<div id="footer">
			<div id="footerbg">
				<p class="wrap">
				
					<!-- footer links -->
					<p id="footer_menu" float="right">
						Copyright &copy;NITC 2014. All Rights Reserved<br />			
						<span class="backspace"><a href="http://www.nitc.ac.in"><u>NITC main website</u></a></span>
						<a href="credits.php"><u>Credits</u></a>
					</p>
					<!-- /footer links -->
					
					<p id="copy"> Website of <span>Physical Education Department</span></p>
					
					<div class="clear"></div>
				</p>
			</div>
		</div>
		<!-- /footer -->
		
	</div>
</body>
</html>
