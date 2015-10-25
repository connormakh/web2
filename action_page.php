
<?php

session_start();
require("config.php");
	if($_POST['formSubmit'] == "Submit") 
    {
		$errorMessage = "";
		
		if(empty($_POST['firstname'])) 
        {
			$errorMessage .= "<li>You forgot to enter your first name!</li>";
		}
		if(empty($_POST['lastname'])) 
        {
			$errorMessage .= "<li>You forgot to enter your last name!</li>";
		}
		if(empty($_POST['E-mail'])) 
        {
			$errorMessage .= "<li>You forgot to enter your E-mail!</li>";
		}


        $varfname = $_POST['firstname'];
		$varlName = $_POST['lastname'];
		$varemail = $_POST['E-mail'];
		$varcomment= $_POST['comment'];
    
		$sql2 ="Select email from guests where email=$varemail";
		
    if(mysqli_query($db, $sql2)!= null){
      $errorMessage .="<li> User previously entered!";
	  exit();
    }
    
		if(empty($errorMessage)) 
        {
			
			$sql = "INSERT INTO guests (fname, lname, email, comment) 
			VALUES ($varfname,$varlName,$varemail,$varcomment)";
			mysqli_query($db, $sql);				
			if ($db->query($sql) == TRUE) {
				echo "New record created successfully";
				exit();
				}
				 else {
  					  echo "Error: " . $sql . "<br>" . $db->error;
			exit();
			
		}
		exit();
		}
				

        $db->close();
		
		   exit();
		   header("Location: assg12.html");
	}   
?>