<?php
$inhoudTXT = file_get_contents("text.txt");
$inhoud2 = explode(",",$inhoudTXT);  
$naam = $inhoud2[0];
$pass = $inhoud2[1];
$feedback = "";

//var_dump($inhoud2);

//na submitten
//EERST checken of de cookie er al niet is, anders onnodig


if (isset($_POST['submit']))
{
    if($_POST["gebruikersnaam"] == $naam && 
       $_POST["paswoord"] == $pass   )
    {
        setcookie('tester',time() + 360);
        var_dump($inhoud2);
    $feedback = "U bent correct ingelogd.";
    }
    else
    {
       $feedback = "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw." ;
    }  
}


?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">             
	</head>
	<body>       
        <p><?php echo $feedback ?></p>
        <form action="cookies.php" method="POST">      
        <ul>
            <li>
                <label for="gebruikersnaam">gebruikersnaam</label>
				<input type="text" id="gebruikersnaam"  name="gebruikersnaam">
            </li>    
            <li><label for="paswoord">paswoord</label>
				<input type="text" id="paswoord"  name="paswoord" >    
            </li>          
        </ul>       
            <input name="submit" type="submit" value="Verzenden">     
        </form>            
	</body>
</html>