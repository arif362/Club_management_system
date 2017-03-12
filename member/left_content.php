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