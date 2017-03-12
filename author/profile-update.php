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
		
		$statement = $db->prepare("SELECT * FROM user_list WHERE username=?");
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
			
			$uploaded_file = $_FILES["user_pic"]["name"];
			$file_basename = substr($uploaded_file, 0, strripos($uploaded_file, '.')); // strip extention
			$file_ext = substr($uploaded_file, strripos($uploaded_file, '.')); // strip name
			$f1 = $username. $file_ext;
			
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif'))
				throw new Exception("Only jpg, jpeg, png and gif format images are allowed to upload.");
			
			move_uploaded_file($_FILES["user_pic"]["tmp_name"],"../uploads/" . $f1);
			
				
			
			
			$statement = $db->prepare("UPDATE user_list SET user_pic=?, firstname=?,lastname=?,contact_num=?,  address=?, password=?  WHERE username='$username'");
			$statement->execute(array($f1,$_POST['firstname'],$_POST['lastname'],$_POST['contact_num'],$_POST['address'],$new_final_password));
			
			
		
	$success_message ='Data has been Update successfully.';
	}
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}
?>
<!--Call Hearder-->  	
<?php include('header.php');?>

	<div id="site_content">	
		<div class="main2">
			<div class="main_registraion">
				<div class="login error success">
					<h2>Update Your Profile</h2>
					<br>
					<?php
					if(isset($error_message)) {echo $error_message;}
					if(isset($success_message)) {echo $success_message;}
					?>
				
				</div>
			
				<div class="registration_box fix">
				<form action="" method="post" enctype="multipart/form-data">
				<?php
					$statement = $db->prepare("SELECT * FROM user_list WHERE username=? ");
					$statement->execute(array($username));
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $row)
				{	
					$user_pic = $row['user_pic'];
					$firstname = $row['firstname'];
					$lastname = $row['lastname'];
					$contact_num = $row['contact_num'];
					$address = $row['address'];
				}
				?>
				<table>
					<tr>
						<td class="profile_image"><strong>Update Profile Picture :&nbsp;&nbsp;&nbsp;</strong><input type="file" name="user_pic" ></td>
					</tr>				
				<tr class="f_name">
					<td><p>First Name : *  <input type="text" name="firstname"  value="<?php echo $firstname;?>"></p></td>
				</tr>
				<tr class="l_name">
					<td>Last Name : *  <input type="text"name="lastname"  value="<?php echo $lastname;?>"></td>
				</tr>
	
				<tr class="contact">
					<td>Contact Number : *  <input type="text" name="contact_num"  value="<?php echo $contact_num;?>"></td>
				</tr>
		
				<tr class="address">
					<td>Address : *  <textarea name="address" ><?php echo $address;?></textarea></td>
				</tr>
			
							<tr class="confirm_pass1">
								<td>Old Password : *  <input type="password" name="old"   value="" ></td>
							</tr>
							<tr class="confirm_pass2">
								<td>New Password : *  <input type="password" name="new1"   value="" ></td>
							</tr>
							<tr class="confirm_pass">
								<td>Confirm Password : *  <input type="password" name="new2"></td>
							</tr>
						<tr class="update_profile"><td><input type="submit" name="update_profile" value="Update"></input></td></tr>
				
				
				</table>
			</form>
				</div>
			</div>
		</div>
	</div><!--close site_content--> 
	
	<!--Call Footer-->  	
	<?php include('footer.php');?>	