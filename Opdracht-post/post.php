<?php
   
$password = "qwerty";
$username = "Pieter";
$message = "";

//post geeft een array
if( isset( $_POST['submit'] ) ) // checken op submit
{
    if( $username == $_POST['username'] && $password == $_POST['password'])
    {
    $message = "Welkom " . $username;      
    }
    else
    {
    $message = "Er ging iets mis bij het inloggen. probeer opnieuw";
    }
    
}




?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
              
	</head>
	<body>       
            <h1>Inloggen</h1>
        <form action="post.php" method="POST">
        
        <ul>
            <li>
                <label for="username">gebruikersnaam</label>
				<input type="text" id="username"  name="username">
            </li>    
            <li><label for="password">paswoord</label>
				<input type="text" id="password"  name="password">        
            </li>          
        </ul>
        
            <input name="submit" type="submit">
     
        </form>
			<p><?php echo $message ?></p>
        
	</body>
</html>