<!-- Mandeep Kaur 8608986 -->
<?php
// create validations for the fields in the form
  if(!empty($_POST['firstname'])){ 
	$firstname = $_POST['firstname'];
	
}
	else{
		echo '<p>First Name is Mandatorty</p>';
	}
	
	 if(!empty($_POST['lastname'])){
	 $lastname = $_POST['lastname'];
	 }
	 else{
		 echo '<p>Last Name is Mandatorty</p>';
	 }
	 
	
	 if(!is_numeric($'age'])){
	 $age = $_POST['age'];
	 } 
	 else{
		 echo '<p>Age is Mandatorty</p>';
	 }
	
	 if(isset($_POST['newsletter'])){
		 $newsletter = $_POST['newsletter']; 
	 }
	 else{
		 
		echo  '<p>Choose a Button</p>';
		
	 }

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php 
                                                  
	if (isset($_POST['firstname']))   //  make first name sticky
	echo $_POST['firstname'];
	?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php 
                                                  
 if (isset($_POST['lastname'])) //make the last name sticky on form 
 echo $_POST['lastname'];
?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?php 
     if (isset($_POST['age'])) // make age sticky on the form    
	echo $_POST['age'];
	?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p><input type="submit" name="submit" value="Submit My Information"></p>

</form>




</body>
</html>