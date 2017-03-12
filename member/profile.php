<?php
session_start();

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	
}
include("../config.php");
?>
<!DOCTYPE html> <!-- Means HTML5--> 
<html> <!--Start html-->
	
	<head> <!--Start head-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!--Title-->
			<title>City University Computer Cluc(CUCC)</title>
			
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
							<li><a href="profile.php">Profile</a></li>
							<li><a href="logout.php">logout</a></li>
						
						</ul>
					</div>
				
				</div>
				
                 <div class="menu">		
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about_us.php">About Us</a></li>
							<li><a href="contact_us.php">Contact Us</a></li>
							<li><a href="">Current Affair</a></li>
							<li><a href="">Notice</a></li>
							<li><a href="">Program</a></li>
							<li><a href="">Gallery</a></li>
							<li><a href="members.php">Members</a></li>
						
						
						</ul>
					</div>
					
			
			</div>
			
		
		</header>	<!--Close Header Part-->
		<div id="site_content">	
	<div class="main2">
		<div class="main_registraion">
				<div class="login error success">
					<h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="profile-update.php">Edit Profile</a><h2>
				
				</div>
			
				<div class="registration_box fix">
				<form action="" method="post">
					<?php
						$statement = $db->prepare("SELECT * FROM member_list WHERE username=? ");
						$statement->execute(array($username));
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $row)
					{	
						$member_pic = $row['member_pic'];
						$firstname = $row['firstname'];
						$lastname = $row['lastname'];
						$contact_num = $row['contact_num'];
						$address = $row['address'];
						$email = $row['email'];
					}
					?>
					<table>
		
					<tr>
						<td class="profile_image2"><a href="../uploads/<?php echo $row['member_pic']; ?>"><img class="Pimg" src="../uploads/<?php echo $row['member_pic']; ?>" alt="" width="230" height="280"/></a></td>
					</tr>					
					<tr class="f_name">
						<td><b>First Name :  <?php echo $firstname;?></b></td>
					</tr>
					<tr class="l_name">
						<td><b>Last Name :  <?php echo $lastname;?></b></td>
					</tr>
		
					<tr class="contact">
						<td><b>Contact Number :  <?php echo $contact_num;?></b></td>
					</tr>
				
					<tr class="address">
						<td><b>Address : <?php echo $address;?></b></td>
					</tr>
					<tr class="email">
						<td><b>E-mail : <?php echo $email;?></b></td>
					</tr>
					</table>
				</form>
				</div>
		</div>
	</div>	
</div>
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
					<div class="footer_text2"><a href="https://www.facebook.com/pages/Md-Ariful-Islam-Arif/"><p>Designed & Developed by Md Ariful islam</p></a></div>
				</div>
															<?php
						}
			?>
			</div><!--End Main Body-->
		</footer><!--Close Footer Part-->
		</body><!--Close body-->

</html> <!--Close html-->