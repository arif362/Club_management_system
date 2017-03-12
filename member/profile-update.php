<?php

session_start();

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	
}
include("../config.php");
?>


<?php
if(isset($_POST['update_profile'])) {

	try {	
		
		if(empty($_POST['old'])) {
			throw new Exception("Old Password field can not be empty");
		}
		
		if(empty($_POST['new1'])) {
			throw new Exception("New Password field can not be empty");
		}
		
		if(empty($_POST['new2'])) {
			throw new Exception("Confirm Password field can not be empty");
		}
		include("../config.php");
		
		$statement = $db->prepare("SELECT * FROM member_list WHERE username=?");
		$statement->execute(array($username));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row)
		{
			
			$old_password = md5($_POST['old']);
			if($old_password != $row['password'])
			{
				throw new Exception("Old Password is wrong.");
			}
					
		}
		
		if($_POST['new1'] != $_POST['new2'])
		{
			throw new Exception("New Password and Confirm Password does not match.");
		}
		
		
			$new_final_password = md5($_POST['new1']);
			
	
			$username = $_SESSION['username'];
			
			$uploaded_file = $_FILES["member_pic"]["name"];
			$file_basename = substr($uploaded_file, 0, strripos($uploaded_file, '.')); // strip extention
			$file_ext = substr($uploaded_file, strripos($uploaded_file, '.')); // strip name
			$f1 = $username. $file_ext;
			
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif'))
				throw new Exception("Only jpg, jpeg, png and gif format images are allowed to upload.");
			
			move_uploaded_file($_FILES["member_pic"]["tmp_name"],"../uploads/" . $f1);
			
				
			
			
			$statement = $db->prepare("UPDATE member_list SET member_pic=?, firstname=?,lastname=?,contact_num=?,  address=?, password=?  WHERE username='$username'");
			$statement->execute(array($f1,$_POST['firstname'],$_POST['lastname'],$_POST['contact_num'],$_POST['address'],$new_final_password));
			
			
		
	$success_message ='Data has been Updated successfully.';
	}
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}
?>
<!--Call Hearder-->  	
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
					<h2>&nbsp; &nbsp; &nbsp; &nbsp;Edit Your Profile</h2>
					<br>
					<?php
					if(isset($error_message)) {echo $error_message;}
					if(isset($success_message)) {echo $success_message;}
					?>
				
				</div>
			
				<div class="registration_box fix">
				<form action="" method="post" enctype="multipart/form-data">
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
				}
				?>
				<table>
					<tr>
						<td class="profile_image"><strong>Update Profile Picture :&nbsp;&nbsp;&nbsp;</strong><input type="file" name="member_pic" ></td>
					</tr>				
				<tr class="f_name">
					<td><p>First Name :   <input type="text" name="firstname"  value="<?php echo $firstname;?>"></p></td>
				</tr>
				<tr class="l_name">
					<td>Last Name :   <input type="text"name="lastname"  value="<?php echo $lastname;?>"></td>
				</tr>
	
				<tr class="contact">
					<td>Contact Number :   <input type="text" name="contact_num"  value="<?php echo $contact_num;?>"></td>
				</tr>
		
				<tr class="address">
					<td>Address :   <textarea name="address" ><?php echo $address;?></textarea></td>
				</tr>
			
							<tr class="confirm_pass1">
								<td>Old Password :   <input type="password" name="old"   value="" ></td>
							</tr>
							<tr class="confirm_pass2">
								<td>New Password :   <input type="password" name="new1"   value="" ></td>
							</tr>
							<tr class="confirm_pass">
								<td>Confirm Password :   <input type="password" name="new2"></td>
							</tr>
						<tr class="update_profile"><td><input type="submit" name="update_profile" value="Update"></input></td></tr>
				
				
				</table>
			</form>
				</div>
			</div>
		</div>
	</div><!--close site_content--> 
	
	<!--Call Footer-->  	
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