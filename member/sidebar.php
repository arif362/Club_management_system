			
					<div class="right_content">
							
			
					<div class="notice">
						<div class="photo">
							<img src="../images/notice.png" alt="logo">
						
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
							<img src="../uploads/<?php echo $row['post_image']; ?>" alt="logo">
						
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
							<img src="../uploads/<?php echo $row['post_image']; ?>" alt="logo">
						
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
							<img src="../uploads/<?php echo $row['post_image']; ?>" alt="logo">
						
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