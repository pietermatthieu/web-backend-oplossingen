<?php
   
session_start();
var_dump($_SESSION);

if(isset( $_POST['submit']))
{
    $_SESSION['session1']['email'] = $_POST['email'];
    $_SESSION['session1']['nickname'] = $_POST['nickname'];
}

  $email =(isset($_SESSION['session1']['email'])) ? $_SESSION['session1']['email'] : '';

    $nickname =	(isset($_SESSION['session1']['nickname'])) ? $_SESSION['session1']['nickname'] : '';





?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
              
	</head>
	<body>       
            <h1>Registratiegegevens</h1>
        <form action="sessions1.php" method="POST">
        
        <ul>
            <li>
                <label for="email">e-mail</label>
				<input type="text" id="email"  name="email" value=    "<?=  $email ?>">
            </li>    
            <li><label for="nickname">nickname</label>
				<input type="text" id="nickname"  name="nickname" value =" <?= $email ?>">        
            </li>          
        </ul>       
            <input name="submit" type="submit" value="Volgende">     
        </form>
			
        <a href="sessions1.php?session=destroy">Restart by killing session</a>
        
	</body>
</html>