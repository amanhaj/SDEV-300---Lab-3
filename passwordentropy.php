<!-- Password Entropy Calculation
 Date: November 6th, 2018
 Author: Amanda Hajati
 Title: passwordentropy.php
 description: "Create your own simple, yet unique function in PHP 
 that will display the results of the call to the function in an 
 HTML table."
 -->
 <!DOCTYPE html>
<html>
<head>
  <title>Password Entropy </title>
</head>
<body>
<body style="background-color:gainsboro;">
<h1 style = text-align: 200px;>Calculate Password Entropy </h1>

<form method="POST" id="my_form"></form>
<table style = border-collapse= "collapse"; width= "250px"; margin-left= "100px"; 
border= "2px solid";  >


    <tr>
        <td>
			<label for="avaliableCharacters">Number of Unique Characters:</label>
            <input type="text" name="avaliableCharacters" form="my_form" 
				 />
			<br></br>
			<label for="numberCharacters">Number of Characters in Password:</label>
			<input type="text" name="numberCharacters" form="my_form"
				 />
			<br></br>
			<button type="submit" form="my_form">calculate</button>
			<br></br>
			<label for="calculation">Password Entropy:</label>
			<input type="text" name="calculation" form="my_form"
				 value = "<?php echo calculate(); ?>" />
        </td>
    </tr>
	</table>

<?php
    
	
	function calculate() { 
		
		$R = $_POST['avaliableCharacters'];
		$L = $_POST['numberCharacters'];
		
	if (( preg_match ("/^[1-9][0-9]*$/",$R))and  
	  ( preg_match ("/^[1-9][0-9]*$/",$L))) { 
	
		$RL = pow($R, $L);
		$E = log($RL, 2);
		
		return $E;
	
	} else {
		
		
		$E = "Enter numbers only.";  
		
		return $E;
		
	} } 
	
       ?> 
</body>
</html>