<?php
ob_start();
session_start();
if($_SESSION['name']!='admin')
{
	header('location: ../index.php');
}

?>

<?php

if(isset($_REQUEST['member_id'])) {

	$member_id = $_REQUEST['member_id'];
}
?>
	
<?php
include('config.php');

if(isset($_POST['update_member'])) {
	
	$birthday = $_POST['birth_day']."-".$_POST['birth_month']."-".$_POST['birth_year'];
	
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
		
		$statement = $db->prepare("SELECT * FROM member_list WHERE member_id=?");
		$statement->execute(array($member_id));
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
		
		$statement = $db->prepare("UPDATE member_list SET  firstname=?, lastname=?, dept_name=?, sex=?, birthday=?, contact_num=?,address=?, password=?  WHERE member_id=?");
		$statement->execute(array($_POST['firstname'],$_POST['lastname'],$_POST['dept_name'],$_POST['sex'],$birthday,$_POST['contact_num'],$_POST['address'],$new_final_password,$member_id));
		
		$success_message = "Member Profile has been changed successfully.";
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
}

?>
<!--Call Hearder-->  	
<?php include('header.php');?>

	<h2>Edit Member</h2>
		<p>&nbsp;</p>
		<?php
		if(isset($error_message)) {echo "<div class='error'>".$error_message."</div>";}
		if(isset($success_message)) {echo "<div class='success'>".$success_message."</div>";}
		?>
		<?php
				
					$statement = $db->prepare("SELECT * FROM member_list WHERE member_id=? ORDER By member_id");
					$statement->execute(array($member_id));
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					
				foreach($result as $row)
				{
					
					$firstname = $row['firstname'];
					$lastname = $row['lastname'];
					$dept_name = $row['dept_name'];
					$sex = $row['sex'];
					$contact_number = $row['contact_num'];
					$address = $row['address'];
					$email = $row['email'];
				}
				?>
	<form action="" method="post">

			
		<table class="tbl1">
		<tr>
			<td><input class="short" type="text" name="firstname" value="<?php echo $firstname;?>" placeholder="First Name"></td>
		</tr>
		<tr>
			<td><input class="short" type="text" name="lastname" value="<?php echo $lastname;?>" placeholder="Last Name"></td>
		</tr>
		<tr>
			<td><input class="short" type="text" name="dept_name" value="<?php echo $dept_name;?>" placeholder="Department"></td>
		</tr>
		
		<tr>
			<td><input type="radio" name="sex" value="male<?php echo $sex;?>" checked=""> Male &nbsp; &nbsp; <input type="radio" name="sex" value="<?php echo $sex;?>" > Female</td>
		</tr>
		</tr>
		<tr >
				<td>
						<select name="birth_month" id="birth_month">
						<option value=""> &nbsp; Month &nbsp;</option>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
						</select> 
						<select name="birth_day" id="birth_day">
						<option value="">&nbsp; Day &nbsp; </option>
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option value="05">5</option>
						<option value="06">6</option>
						<option value="07">7</option>
						<option value="08">8</option>
						<option value="09">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select> 
						<select name="birth_year" id="birth_year">
						<option value=""> &nbsp; Year &nbsp; </option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>
						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>
						<option value="1969">1969</option>
						<option value="1968">1968</option>
						<option value="1967">1967</option>
						<option value="1966">1966</option>
						<option value="1965">1965</option>
						<option value="1964">1964</option>
						<option value="1963">1963</option>
						<option value="1962">1962</option>
						<option value="1961">1961</option>
						<option value="1960">1960</option>
						<option value="1959">1959</option>
						<option value="1958">1958</option>
						<option value="1957">1957</option>
						<option value="1956">1956</option>
						<option value="1955">1955</option>
						<option value="1954">1954</option>
						<option value="1953">1953</option>
						<option value="1952">1952</option>
						<option value="1951">1951</option>
						<option value="1950">1950</option>
						<option value="1949">1949</option>
						<option value="1948">1948</option>
						<option value="1947">1947</option>
						<option value="1946">1946</option>
						<option value="1945">1945</option>
						<option value="1944">1944</option>
						<option value="1943">1943</option>
						<option value="1942">1942</option>
						<option value="1941">1941</option>
						<option value="1940">1940</option>
						<option value="1939">1939</option>
						<option value="1938">1938</option>
						<option value="1937">1937</option>
						<option value="1936">1936</option>
						<option value="1935">1935</option>
						<option value="1934">1934</option>
						<option value="1933">1933</option>
						<option value="1932">1932</option>
						<option value="1931">1931</option>
						<option value="1930">1930</option>
						<option value="1929">1929</option>
						<option value="1928">1928</option>
						<option value="1927">1927</option>
						<option value="1926">1926</option>
						<option value="1925">1925</option>
						<option value="1924">1924</option>
						<option value="1923">1923</option>
						<option value="1922">1922</option>
						<option value="1921">1921</option>
						<option value="1920">1920</option>
						<option value="1919">1919</option>
						<option value="1918">1918</option>
						<option value="1917">1917</option>
						<option value="1916">1916</option>
						<option value="1915">1915</option>
						<option value="1914">1914</option>
						<option value="1913">1913</option>
						<option value="1912">1912</option>
						<option value="1911">1911</option>
						<option value="1910">1910</option>
						<option value="1909">1909</option>
						<option value="1908">1908</option>
						<option value="1907">1907</option>
						<option value="1906">1906</option>
						<option value="1905">1905</option>
						<option value="1904">1904</option>
						<option value="1903">1903</option>
						<option value="1902">1902</option>
						<option value="1901">1901</option>
						<option value="1900">1900</option>
						</select> 
				</td>
		</tr>
		<tr>
			<td><input  class="short" type="text" name="contact_num" value="<?php echo $contact_number;?>" placeholder="Contact Number"></td>
		</tr>
					
		<tr class="address">
			<td><textarea class="short" name="address" value="" placeholder="Address"><?php echo $address;?></textarea></td>
		</tr>
		<tr>
			<td><input  class="short" type="text" name="email1" value="<?php echo $email;?>"  placeholder="Email"></td>
		</tr>
		<tr>
			<td><input class="short" type="password" name="old"  placeholder="Old Password"></td>
		</tr>
		<tr>
			<td><input class="short" type="password" name="new1" placeholder="New Password"></td>
		</tr>
		<tr>
			<td><input class="short" type="password" name="new2" placeholder="Confirm Password"></td>
		</tr>
	
		<tr>
			<td><input type="submit" value="SAVE" name="update_member"></td>
		</tr>
		</table>
			
	</form>


<?php include("footer.php"); ?>			