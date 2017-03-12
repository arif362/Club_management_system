<?php
ob_start();
session_start();
if($_SESSION['name']!='admin')
{
	header('location: ../index.php');
}
include("../config.php");
?>

<?php

if(isset($_REQUEST['author_id'])) {

	$author_id = $_REQUEST['author_id'];


$statement = $db->prepare("DELETE FROM author_list WHERE author_id=?");
$statement->execute(array($author_id));

$success_message2 = "Author Profile has been deleted successfully.";

}
?>


<?php include("header.php"); ?>

<h2>View  All Author</h2>
<p>&nbsp;</p>
<?php
if(isset($success_message2)) {echo "<div class='success'>".$success_message2."</div>";}
?>
<table class="tbl2" width="100%">
	<tr>
		<th width="5%">Serial</th>
		<th width="25%">Photo</th>
		<th width="20%">Username</th>
		<th width="20%">Designation</th>
		<th width="20%">Action</th>
	</tr>
	
	<?php
		/* ===================== Pagination Code Starts ================== */
		$adjacents = 7;
								
		$i=0;
		$statement = $db->prepare("SELECT * FROM author_list ORDER BY author_id DESC");
		$statement->execute();
		$total_pages = $statement->rowCount();
	
			$targetpage = $_SERVER['PHP_SELF'];   //your file name  (the name of this file)
			$limit = 5;                                 //how many items to show per page
			$page = @$_GET['page'];
			if($page) 
				$start = ($page - 1) * $limit;          //first item to display on this page
			else
				$start = 0;
			
			$statement = $db->prepare("SELECT * FROM author_list ORDER BY author_id DESC LIMIT $start, $limit");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);		
			
			if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
			$prev = $page - 1;                          //previous page is page - 1
			$next = $page + 1;                          //next page is page + 1
			$lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
			$lpm1 = $lastpage - 1;   
			$pagination = "";
			if($lastpage > 1)
			{   
				$pagination .= "<div class=\"pagination\">";
				if ($page > 1) 
					$pagination.= "<a href=\"$targetpage?page=$prev\">&#171; previous</a>";
				else
					$pagination.= "<span class=\"disabled\">&#171; previous</span>";    
				if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
				{   
					for ($counter = 1; $counter <= $lastpage; $counter++)
					{
						if ($counter == $page)
							$pagination.= "<span class=\"current\">$counter</span>";
						else
							$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
					}
				}
				elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
				{
					if($page < 1 + ($adjacents * 2))        
					{
						for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
						{
							if ($counter == $page)
								$pagination.= "<span class=\"current\">$counter</span>";
							else
								$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
						}
						$pagination.= "...";
						$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
						$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
					}
					elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
					{
						$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
						$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
						$pagination.= "...";
						for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
						{
							if ($counter == $page)
								$pagination.= "<span class=\"current\">$counter</span>";
							else
								$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
						}
						$pagination.= "...";
						$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
						$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
					}
					else
					{
						$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
						$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
						$pagination.= "...";
						for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
						{
							if ($counter == $page)
								$pagination.= "<span class=\"current\">$counter</span>";
							else
								$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
						}
					}
				}
				if ($page < $counter - 1) 
					$pagination.= "<a href=\"$targetpage?page=$next\">next &#187;</a>";
				else
					$pagination.= "<span class=\"disabled\">next &#187;</span>";
				$pagination.= "</div>\n";       
			}
			/* ===================== Pagination Code Ends ================== */	
	
	foreach($result as $row)
	
	{		
		
					$statement = $db->prepare("SELECT * FROM author_list ORDER BY author_id DESC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			
					$Author_pic = $row['author_pic'];
					$firstname = $row['firstname'];
					$lastname = $row['lastname'];
					$designation = $row['designation'];
					$sex = $row['sex'];
					$birthday = $row['birthday'];
					$contact_number = $row['contact_number'];
					$account_number = $row['account_number'];
					$address = $row['address'];
					$email = $row['email'];
		$i++;
		?>
			
		<tr>
		<td><?php echo $i; ?></td>
		<td><a href="../uploads/<?php echo $row['Author_pic']; ?>"><img class="Pimg" src="../uploads/<?php echo $row['Author_pic']; ?>" alt="" width="150" height="150"/></a></td>
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['designation']; ?></td>
		<td>
			<a class="fancybox" href="#inline<?php echo $i; ?>">View</a>
			<div id="inline<?php echo $i; ?>" style="width:700px;display: none;">
				<h3 style="border-bottom:2px solid #808080;margin-bottom:10px;">View All Data</h3>
				<p>
					<form action="" method="post">
			
				
				
		<table class="tbl1">
		<tr>
			<td>Author Photo</td>
		</tr>
		<tr>
		<td><a href="../uploads/<?php echo $row['Author_pic']; ?>"><img  src="../uploads/<?php echo $row['Author_pic']; ?>" alt="Photo" width="230" height="280"/></a></td>
		</tr>
		<tr>
			<td>Firstname</td>
		</tr>
		<tr>
			<td><input class="short" type="text" name="firstname" value="<?php echo $firstname;?>" placeholder="First Name"></td>
		</tr>
		<tr>
			<td>Last Name</td>
		</tr>
		<tr>
			<td><input class="short" type="text" name="lastname" value="<?php echo $lastname;?>" placeholder="Last Name"></td>
		</tr>
		<tr>
			<td>Designation</td>
		</tr>
		<tr>
		<td>
			<select class="short" name="designation">
			<option value="">Select a  Designation &nbsp;</option>
			<option value="President">President</option>
			<option value="Vice-President">Vice-President</option>
			<option value="Manager">Manager</option>
			<option value="Advisor">Advisor</option>
			<option value="Junior Advisor">Junior Advisor</option>
			<option value="Cashier">Cashier</option>
			<option value="Publisher">Publisher</option>
			</select>
		</td>
		</tr>
		<tr>
			<td>Gender</td>
		</tr>
		<tr>
			<td><input type="radio" name="sex" value="male<?php echo $sex;?>" checked=""> Male &nbsp; &nbsp; <input type="radio" name="sex" value="<?php echo $sex;?>" > Female</td>
		</tr>
		</tr>
		<tr>
			<td>Birthday</td>
		</tr>
		<tr>
				<td>
					<input  class="short" type="text" name="contact_num" value="<?php echo $birthday;?>" placeholder="Contact Number">	
				</td>
		</tr>
		<tr>
			<td>Contact Number</td>
		</tr>
		<tr>
			<td><input  class="short" type="text" name="contact_num" value="<?php echo $contact_number;?>" placeholder="Contact Number"></td>
		</tr>
		<tr>
			<td>Account Number</td>
		</tr>
		<tr >
			<td><input class="short" type="text" name="account_num" value="<?php echo $account_number;?>" placeholder="Account Number"></td>
		</tr>
		<tr>
			<td>Address</td>
		</tr>			
		<tr class="address">
			<td><textarea class="short" name="address" value="" placeholder="Address"><?php echo $address;?></textarea></td>
		</tr>
		<tr>
			<td>Email</td>
		</tr>
		<tr>
			<td><input  class="short" type="text" name="email1" value="<?php echo $email;?>"  placeholder="Email"></td>
		</tr>
				</p>
				</table></form>
	</div>
			&nbsp;|&nbsp;
			<a href="edit-Author.php?author_id=<?php echo $row['author_id']; ?>">Edit</a>
			&nbsp;|&nbsp;
			<a onclick='return confirmDelete();' href="view-Author.php?author_id=<?php echo $row['author_id']; ?>"><img src="../images/delete.gif"></a></td>
		
		</tr>
		
		<?php
	}
	?>
	
</table>

<div class="pagination">
<?php 
echo $pagination; 
?>
</div>

</br></br>

<?php include("footer.php"); ?>			