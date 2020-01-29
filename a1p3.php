<!-- Mandeep Kaur 8608986 -->

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<?php

 //PART 3(A)
 
$sentence = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
	
	echo $sentence;
$str_array = explode(' ', $sentence); // create  string array

sort($str_array);// sort the array

$strlength = count($str_array);
echo "<p>Here is sorted list :</p>";
for($i=0; $i < $strlength; $i++) 
{
	echo $str_array[$i];
	echo " ";
}
 // Part 3 (B)
function uniqueChar($str){ // create function unique character
	
	for($i = 0; $i < strlen($str); $i++) // create two for loop to count the length of the string
	{ 
		for($j = $i + 1; $j < strlen($str); $j++) 
		{ 
			if($str[$i] == $str[$j]) // check the condition here
			{ 
				return true; 
			} 
		} 
	} 
	
	return false; 
} 


 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['firstname'])){
            
            $checking = uniqueChar($_POST['firstname']); // check for the unique characters 
            
            if($checking == true){
                echo '<p>duplicate characters</p>'; 
            }else{
                echo '<p>no duplicate characters</p>'; 
            }
           
        }else{
            echo '<p>enter input string</p>'; 
        }
    }
?>
<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p ><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>