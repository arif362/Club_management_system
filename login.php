<?php

if(isset($_POST['form_login'])) {

	try {
		if(empty ($_POST['username'])) {
			throw new Exception('User Name can not be empty');
		}
		
		if(empty ($_POST['password'])) {
			throw new Exception('Password can not be empty');
		
		}
		if(empty ($_POST['user_type'])) {
			throw new Exception('User Type can not be empty');
		
		}
		
		$password = $_POST['password'];  //user login password convert md5 mode
		$password = md5($password);
		
		include('config.php');
		if($_POST['user_type']=='Member')
		{
		$num=0;
		$statement = $db->prepare("SELECT * FROM member_list WHERE username=? and password=? and user_type='Member' ORDER BY member_id");
		$statement->execute(array($_POST['username'],$password));		
		$num = $statement->rowCount();
		
		if($num>0)
		{	
			session_start();
			
			$_SESSION['member_id'] = "member_id";
			$_SESSION['username'] = $_POST['username'];
			
			header('location: member/index.php');
			
		}
		else
		{
			throw new Exception ('User Name , Password or User Type are Invalid');
		
		}
		}
		else if($_POST['user_type']=='Admin'){
			$num=0;
		$statement = $db->prepare("select * from tbl_login where username=? and password=?");
		$statement->execute(array($_POST['username'],$password));		
		$num = $statement->rowCount();
		
		if($num>0)
		{	
			session_start();
			
			$_SESSION['name'] = "admin";
			//header("location: index.php");
			
			header('location: admin/index.php');
			
		}
		else
		{
			throw new Exception ('User Name , Password or User Type are Invalid');
		
		}
			
		}
	
		
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

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






		<div class="header2">
			<div class="logo2 error">
				</br>
				<?php
					if(isset($error_message)) {echo $error_message;}
				?>
			</div>
		
			<div class="login_box2">
				<form action="" method="post">
				
				<div class="username2">
					<b>User Name  : <input type="text"name="username"></b>
				</div>
				<div class="password2">
					<b>Password  : <input type="password" name="password"></b>
				</div>
				<div class="user_type2">
					<b>&nbsp;&nbsp;User Type :	
						<select name="user_type">
							<option value="">Select a User Type</option>
							<option value="Member">Member</option>
							<option value="Admin">Admin</option>
						</select>
					</b>
				</div>
				</br>
				<div class="login_button2">
					<p><input type="submit" value="Login" name="form_login"></p>
				</div>
				</br>
				</form>
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