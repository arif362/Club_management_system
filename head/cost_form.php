<?php
ob_start();
session_start();
if($_SESSION['name']!='head')
{
	header('location: ../login.php');
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>CUPC picnic form</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div id="wrapper">
	 <h1>Fill Up The Form</h1>
	  <div id="wrapper_header">
		  <table class="tbl1">
		       <form action="" method="post">
			      <tr> 
				      <td>Location Name:</td>
				      <td><input type="text" name=""placeholder="Name"/></td>
				      <td>Distance from Campus:</td>
				      <td><input type="text" name="" placeholder="00.0 km"/></td>
				  </tr>
			   </form>
		  </table>
	  </div>
	  <div id="wrapper_form">
	   <table class="tbl1">
			  <tr>
			    <tr><th>Bus Cost</th></tr>
			     <form action="">
			      <td>No.of Buses</td>
			      <td><input type="text" name=""placeholder="00"/></td>
			      <td>Rate per Bus</td>
			      <td><input type="text" name=""placeholder="00.0 tk"/></td>
				  <td>Total</td>
			      <td><input type="text" name=""placeholder="00.0 tk"/></td>
			     </form>
			   </tr>
			 <tr>
			 <tr><th>Meal Cost</th></tr>
		      <form action="">
			      <td>Lunch</td>
			      <td><input type="text" name=""placeholder="00.0 tk"/></td>
				  <td>Snacks</td>
			      <td><input type="text" name=""placeholder="00.0 tk"/></td>
				  <td>Total</td>
			      <td><input type="text" name=""placeholder="00.0 tk"/></td>
			  </form>
			  </tr>
			 <tr>
			       <tr><th>T-Shirt Cost</th></tr>
		      <form action="">
			      <td>No. of T-Shirt</td>
			      <td><input type="text" name=""placeholder="00"/></td>
			      <td>T-Shirt Rate</td>
			      <td><input type="text" name=""placeholder="00.0 tk"/></td>
				  <td>Total</td>
			      <td><input type="text" name=""placeholder="00.0 tk"/></td>
			  </form>
			  </tr>
			  <tr>
			  <tr></tr>
		      <form action="">
			      <td></td>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td>Total Picnic Cost:</td>
			      <td><input type="text" name=""/></td>
			  </form>
			  </tr>
	   </table>
	 
	  
	   </div>
	    <tr>
	  <td> Signature of Moderator</td>
	  
	   </tr>
	</div>
	
</body>
</html>