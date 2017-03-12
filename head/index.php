<?php
ob_start();
session_start();
if($_SESSION['name']!='head')
{
	header('location: ../login.php');
}
?>
<?php include("header.php"); ?>
<h2> Welcome to Admin Panel Of CUPC .</h2>
<div style="font-weight:bold;color:#3d9ccd;font-size:28px;text-align:center;padding-top:50px; line-height:35px;">
	Welcome to the dashboard of <br>
	City University Programming Club (CUPC).<br><p style="font-size:18px;">Developed by Md. Ariful Islam<p>
</div>
<?php include("footer.php"); ?>			