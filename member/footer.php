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