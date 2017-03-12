<!DOCTYPE html> <!-- Means HTML5--> 
<html> <!--Start html-->
	
	<head> <!--Start head-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!--Title-->
			<title>City University Computer Cluc(CUCC)</title>
			<link  rel="shortcut icon" type="image/icon" href="images/citylogo.png" />
		<!-- Meta Tag-->
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		
		<!--Style Sheet-->
		<link  rel="stylesheet" type="text/css" href="css/style.css" />
		<!--Style Sheet Slider-->
		<link href="slider/ninja-slider.css" rel="stylesheet" type="text/css" />
		<script src="slider/ninja-slider.js" type="text/javascript"></script>

	</head> <!--Close head-->
	
	<body> <!-- Start body-->
	
		
		<header> <!--Start Header Part-->
			<div class="header_part">
				<div class="logo">
					<img src="images/citylogo.png" alt="logo">
				
				</div>
				<div class="welcome">
					<h2>CUCC Online Registration System</h2>
				
				</div>
			
				<div class="top_menubar">
					<div class="menubar">	
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about_us.php">About</a></li>
							<li><a href="login.php">login</a></li>
						
						</ul>
					</div>
				
				</div>
				
                 <div class="menu">		
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about_us.php">About Us</a></li>
							<li><a href="contact_us.php">Contact Us</a></li>
							<li><a href="registration.php">Registration</a></li>
							<li><a href="">Notice</a></li>
							<li><a href="">Program</a></li>
							<li><a href="">Gallery</a></li>
							<li><a href="members.php">Members</a></li>
						
						
						</ul>
					</div>
					
			
			</div>
			
		
		</header>	<!--Close Header Part-->
		
		
		
		<content><!--Start Content Part-->
		
			<div class="slider_part"><!--Start Slider Part-->
				<!--start-->
				<div id="ninja-slider">
					<ul>
						<li><a data-image="slider/img/1-s.jpg"><h3>City University Computer Club (CUCC)</h3></a></li>
						<li><div data-image="slider/img/2-s.jpg"><h3>Department of CSE</h3></div></li>
						<li><div data-image="slider/img/3-s.jpg"><h3>All The Students Of CSE</h3></div></li>
						<li><div data-image="slider/img/4-s.jpg"><h3>Programming Practice & Contest</h3></div></li>
						<li><div data-image="slider/img/5-s.jpg"><h3>PHP-MYSQL,HTML,CSS,JAVA,C & C++</h3></div></li>
						<li><div data-image="slider/img/6-s.jpg"><h3>www.Cityuniversitycomputerclub.com</h3></div></li>
					</ul>
				</div>
				<!--end-->
			</div><!--End Slider Part-->
			<div class="main_body"> <!--Start Main Body-->
				<div class="content_part">
					<div class="left_content">
					<?php
			include('config.php');
			$statement = $db->prepare("SELECT * FROM tbl_post WHERE cat_name='Home' ORDER BY post_id DESC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach($result as $row)
						{
						
							?>

						<h2><?php echo $row['post_title'];?></h2>
						<p><?php echo $row['post_description'];?></p>
						<a href=""><p>Read More</p></a>
						<br> </br>
					
							<?php
						}
			?>
					
					</div>
					<div class="right_content">
							
			
					<div class="notice">
						<div class="photo">
							<img src="images/notice.png" alt="logo">
						
						</div>
						<div class="text_1">
						<?php
						include('config.php');
			$statement = $db->prepare("SELECT * FROM tbl_post WHERE cat_name='Notice' ORDER BY post_id DESC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach($result as $row)
						{
						
							?>
								<h2><?php echo $row['post_title'];?></h2>
								<p><?php echo $row['post_description'];?></p>
								<a href=""><p>Read More</p></a>
												<?php
						}
			?>
					</div>
					
					</div>
					<div class="president">
							<?php
						include('config.php');
			$statement = $db->prepare("SELECT * FROM tbl_post WHERE cat_name='President' ORDER BY post_id DESC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach($result as $row)
						{
						
							?>
						<div class="photo_1">
							<img src="uploads/<?php echo $row['post_image']; ?>" alt="logo">
						
						</div>
						<div class="text_1">
								<h2><?php echo $row['post_title'];?></h2>
								<p><?php echo $row['post_description'];?></p>
								<a href=""><p>Read More</p></a>
					</div>
														<?php
						}
			?>
					
					</div>
					<div class="vice_president">
							<?php
						include('config.php');
			$statement = $db->prepare("SELECT * FROM tbl_post WHERE cat_name='Vice-President' ORDER BY post_id DESC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach($result as $row)
						{
						
							?>
						<div class="photo_1">
							<img src="uploads/<?php echo $row['post_image']; ?>" alt="logo">
						
						</div>
						<div class="text_1">
								<h2><?php echo $row['post_title'];?></h2>
								<p><?php echo $row['post_description'];?></p>
								<a href=""><p>Read More</p></a>
					</div>
														<?php
						}
			?>
					
					</div>
					<div class="campus">
							<?php
						include('config.php');
			$statement = $db->prepare("SELECT * FROM tbl_post WHERE cat_name='Campus' ORDER BY post_id DESC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach($result as $row)
						{
						
							?>
						<div class="photo_2">
							<img src="uploads/<?php echo $row['post_image']; ?>" alt="logo">
						
						</div>
						<div class="text_1">
								<h2><?php echo $row['post_title'];?></h2>
								<p><?php echo $row['post_description'];?></p>
								<a href=""><p>Read More</p></a>
					</div>
														<?php
						}
			?>
					
					</div>
				
					
				</div>
			</div>
				
			
	     </div><!--End Main Body-->
		
	    </content><!--Close Content Part-->
		
		<footer><!--Start Footer Part-->
			<div class="footer_part"><!--Start Main Body-->
						<?php
						include('config.php');
			$statement = $db->prepare("SELECT * FROM tbl_footer");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach($result as $row)
						{
						
							?>
				<div class="footer_text">
					<div class="footer_text1"><h2><?php echo $row['description'];?></h2></div>
					<div class="footer_text2"><a href="https://www.facebook.com/Md-Ariful-Islam-Arif-824663867603040/timeline/?ref=hl"><p>Designed & Developed by Md Ariful islam</p></a></div>
				</div>
															<?php
						}
			?>
			</div><!--End Main Body-->
		</footer><!--Close Footer Part-->
	
	
	</body><!--Close body-->

</html> <!--Close html-->