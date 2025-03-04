<!-- PHP code block to intialize DB connection -->
<?php
  
	  define( "PATH", "/Volumes/Students/students/141/kdb8176/Sites/240/projects/final/pages/" );  
	  define( "URL", "http://nova.it.rit.edu/~kdb8176/240/projects/final/pages/comments.php" );
	  
	  //Database connections
	  include "/Volumes/Students/students/141/kdb8176/db_conn.php";
	  
	  //Initialize the DB connection
	  $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name );
		
	  //Verify that it's a valid connection
	  if (!$link)
	  {
		  echo "Connection Error : " . mysqli_connect_error();
		  die(); 	  
	  }
	  
	  	//Function to sanitize data 
	 function cleanData($data) 
	{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = strip_tags($data);
		  $data = htmlspecialchars($data);
		  $data = htmlentities($data);
		  return $data;
	}	  
	  //PHP validation
	  if( isset($_POST["submit"]))
	{
		$name = cleanData($_POST["name"]);
		$comments = cleanData($_POST["comments"]);
		$email = cleanData($_POST["email"]);
		//Check to see name field is empty
		if(empty ($name) || (strlen($name)==0))
		{
			$errors[] = "Please enter your name.";
		}	
		//Check to see if comments field is empty
		if(empty ($comments) || (strlen($comments)==0))
		{
			$errors[] = "Please enter your comments.";
		}		
		//Email
		if(empty ($email) || (strlen($email)==0))
		{
			$errors[] = "Please enter your email.";
		} 				
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			  $errors[] = "Invalid email format"; 
		}	
		//Check to see if errors array is empty, and if so, inject into sql
		if(empty ($errors) )
		{
				$query = "INSERT INTO finalproject SET name = '" . $name . "',
				comments = '" . $comments . "', email = '" . $email . "'";		
				$result = mysqli_query($link,$query); 
				$num_rows = mysqli_affected_rows($link);  
				if($result && $num_rows > 0 )
				{
					$msg = $_POST['name'] . ", your comment was successfully added! Thanks!";					
				}	
			}			
	}	    

?>

<?php include('doc_ssi.php');?>
	<title>Colorado:Site Comments</title>
<?php include('comment_header.php');?>

	<?php include('nav_ssi.php');?>
	
	<?php include('content_ssi.php');?>
	
		<!-- Intro paragraph-->
		<h1>
			Comments Form:  <span>Leave A Comment Below!</span>
		</h1>
	
		<!-- Div for changing pics -->		
		<div id="comment_pic"></div>	
		
		<!-- PHP error box -->
		<div id='status' >
		<?= ( $msg ) ? "$msg" : "" ?>  	
		</div>
		
		<form method='post' onsubmit="return validate();">	
		<!-- name -->
       	<span class="label">Name : </span>
       	<input name="name" id="name" maxlength="20"
		value="<?php echo $_POST['name']; ?>"
		/><br>		
       	<!-- Email -->
		<span class="label">Email : </span>
		<input type="email" name="email" id="email"
				size="50" maxlength="50" placeholder="example@email.com" 	
				value="<?php echo $_POST['email']; ?>"
				/><br>	
       	<!--comment field -->
        <span class="label">Comments : </span>
        <textarea id="comments_field" name="comments" rows="3" cols="40" maxlength="150" 
		> </textarea>
        <br><br>		
        <!--submit-->
        <input id="submit" type='submit' name='submit' value='Submit' />
      
	</form>  
		
	<!-- PHP error box -->
	<div id='php_error'>
	<?php
		
	if(count ($errors)> 0 )
	{			
			//Creates an error div for displaying PHP validation errors			
			foreach($errors as $errorMess)
			{
				echo "$errorMess<br>";				
			}			
			
	}
	else if( isset($_POST["submit"]) && count ($errors) == 0)
	{
		echo "<div id='php_error'>	
				  </div>"; 	
	}
?>
</div>  <br><br><br>
<?php	
		  // Obtain data from database
		  $query = "SELECT * FROM finalproject";
		  
		  //Send the query to the database
		  $result = mysqli_query($link,$query);
		  
		  //Figure out how many rows we got
		  $num_rows = mysqli_affected_rows($link);
		  
		  //Display database to user
		  if($result && $num_rows > 0 )
		  {
			  //create a table
			  echo "<div ><table style='width:100%'><tr><td class='tabh'>Name</td><td class='tabh'>Comment</td></tr>";		
			  
			  //Go thru whole db and add data to table
			  while($row = mysqli_fetch_assoc($result) ) 
			  {
					echo "<tr><td>" . $row["name"] . "</td><td>" . $row["comments"] . "</td></tr>";												
			  }
			  echo "</table></div><br><br>"; //end table			  
		  } 		  
		?>	
		
		
<?php include('end_ssi.php');?>