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
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>




<div class="login2">
				
		</div>
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
							<option value="member">member</option>
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