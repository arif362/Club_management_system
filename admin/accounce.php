<?php include('config.php');?>
<?php

if(isset($_POST['form1'])) {
$amount=$_POST['amount_tk'];
	try {
		if(empty ($_POST['amount_tk'])) {
			throw new Exception('Amount can not be empty');
		}
	
		
		$statement = $db->prepare("SELECT total_earn, present_fund FROM accounce");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		
			$earn = 0;
			$tearn = $earn+ $amount;
			$fund = $row['present_fund'];
			$pfund = $fund + $tearn;
		
	
		$statement = $db->prepare("INSERT INTO accounce (total_earn,present_fund) VALUES (?,?)");
		$statement->execute(array($tearn,$pfund));
		
		
		$success_message = "Amount is added successfully.";

	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
	
		
}
?>
                   <!--Cost and form2-->
				   <?php


if(isset($_POST['form2'])) {
$camount=$_POST['cost_amount'];
	try {
		if(empty ($_POST['cost_amount'])) {
			throw new Exception('Amount can not be empty');
		}
		
		$statement = $db->prepare("SELECT total_earn, present_fund,total_cost FROM accounce");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		
			$cost = 0;
			$tcost = $cost+ $camount;
			$pfund = $row['present_fund'] - $tcost;
			
	$statement = $db->prepare("INSERT INTO accounce (total_cost,present_fund) VALUES (?,?)");
		$statement->execute(array($tcost,$pfund));
		
		
		$success_message2 = "Cost is added successfully.";
	
	}
	
	catch(Exception $e) {
		$error_message2 = $e->getMessage();
	}
	
		
}
?>

<?php include("header.php"); ?>
<h2>ACCOUNCE</h2>
<p>&nbsp;</p>
<form action="" method="post">
<table class="tbl1">
<tr><?php 
	if(isset($error_message)) {echo "<div class='error'>".$error_message."</div>";}
	if(isset($success_message)) {echo "<div class='success'>".$success_message."</div>";}
	?>
</tr>
<tr>
	<td>Add Amount(Tk)</td>
</tr>
<tr>
	<td><input class="short" type="text" name="amount_tk" placeholder="0.00 BDT"></td>
</tr>
<tr>
		<td>
			<select class="short" name="designation">
			<option value="">From&nbsp;</option>
			<option value="President">President</option>
			<option value="Vice-President">Vice-President</option>
			<option value="Manager">Manager</option>
			<option value="Advisor">Advisor</option>
			<option value="Junior Advisor">Junior Advisor</option>
			<option value="Cashier">Donor</option>
			<option value="Publisher">Publisher</option>
			<option value="Publisher">Member</option>
			</select>
		</td>
		</tr>
		<tr>
		<td>
			<select class="short" name="designation">
			<option value="">Purpose&nbsp;</option>
			<option value="President"> Monthly Donation</option>
			<option value="President">Picnic</option>
			<option value="Vice-President">Programming contest</option>
			<option value="Manager">Buying instruments</option>
			<option value="Advisor">Course fee</option>
			
			</select>
		</td>
		</tr>

		
<tr>
	<td><input type="submit" value="SAVE" name="form1"></td>
</tr>
<tr><td><a href="receipt.php">RECEIPT</a></td></tr>
</table>	
</form>


<h2>Account Balance (BDT)</h2>

<table class="tbl2" width="100%">
	<tr>
		<th width="25%">Total Earn</th>
		<th width="25%">Total Cost</th>
		<th width="25%">Present Fund</th>
		<th width="15%">Action</th>
	</tr>
	
	<?php
		$statement = $db->prepare("SELECT SUM(total_earn),SUM(total_cost) FROM accounce");
		$statement->execute(array());
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row)
		{	
				
		?>
		<tr>
		
		<td><?php echo $row['SUM(total_earn)']; ?></td>
	
		<td><?php echo $row['SUM(total_cost)']; ?></td>
		<td><?php echo $row['SUM(total_earn)']-$row['SUM(total_cost)'];?></td>
		<td>
			<a class="fancybox" href="#inline<?php echo $i; ?>">Edit</a>
			<div id="inline<?php echo $i; ?>" style="width:400px;display: none;">
				<h3>Edit Data</h3>
				<p>
					<form action="" method="post">
					<input type="hidden" name="hdn" value="<?php echo $row['dept_id']; ?>">
					<table>
						<tr>
							<td>Amount(BDT)</td>
						</tr>
						<tr>
							<td><input type="text" name="dept_name" value="<?php echo $row['dept_name']; ?>"></td>
						</tr>
						<tr>
							<td><input type="submit" value="UPDATE" name="form2"></td>
						</tr>
					</table>
					</form>
				</p>
			</div>
			</td>
			<?php
		}
			?>
		</tr>
		
	
	
	
	
	
</table>

<p>&nbsp;</p>
<form action="" method="post">
<table class="tbl1">
<tr>
<?php 
if(isset($error_message2)) {echo "<div class='error'>".$error_message2."</div>";}
if(isset($success_message2)) {echo "<div class='success'>".$success_message2."</div>";}
?>
</tr>
<tr>
	<td>Cost Amount(Tk)</td>
</tr>
<tr>
	<td><input class="short" type="text" name="cost_amount" placeholder="0.00 BDT"></td>
</tr>
<tr>
		<td>
			<select class="short" name="designation">
			<option value="">Purpose&nbsp;</option>
			<option value="President">Picnic</option>
			<option value="Vice-President">Programming contest</option>
			<option value="Manager">Buying instruments</option>
			<option value="Advisor">Course fee</option>
			
			</select>
		</td>
		</tr>
		
		<td><a href="cost_form.php">FILL UP THE FORM WITH APPROPRIATE DESCRIPTION</a></td>
		
<tr>
	<td><input type="submit" value="SAVE" name="form2"></td>
</tr>
</table>	
</form>


<?php include("footer.php"); ?>			