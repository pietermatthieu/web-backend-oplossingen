<?php
$inhoudTXT = file_get_contents("text.txt");
$inhoud2 = explode(",",$inhoudTXT);  
$naam = $inhoud2[0];
$pass = $inhoud2[1];
$feedback = "";
$ingevoerdUser = "";
$ingevoerdPass = "";
$isCorrect = false;
$testText = "";

if( isset($_POST["gebruikersnaam"]) && isset($_POST["paswoord"]))
{
    $ingevoerdUser = $_POST["gebruikersnaam"];
    $ingevoerdPass = $_POST["paswoord"];  
}

if( $ingevoerdUser == $naam && $ingevoerdPass == $pass )
{
 $isCorrect = true;
 $feedback = "";
    
    if(isset($_POST["onthoud"]))
    {    
    setcookie('login',True,time()+2592000);    
    $testText = "Checkbox is aangevinkt";
        echo $testText;
    }
    else
    {
        setcookie('login',True);
        $testText = "Checkbox is niet aangevinkt";
    }
    
    header('Location: cookies2.php');
}
else
{
    $feedback = "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.";
}
if( isset($_GET["cookie"]))
    {
    if( $_GET["cookie"] == "destroy")
    {       
        setcookie('login','', 1);
		setcookie('login',false);
		unset($_COOKIE['login']);
        header('Location: cookies2.php');
    }
}

?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">             
	</head>
	<body>     
        <?php if(isset($_COOKIE['login'])): ?>
        <h3>DASHBOARD</h3>
        <p>U bent ingelogd.</p>
        <a href="cookies.php?cookie=destroy">Uitloggen</a>
        
        <?php else: ?>
        
        <h3>INLOGGEN</h3>   
        <?php if(isset($_POST["gebruikersnaam"]) && isset($_POST["paswoord"])): ?>
        <p><?php echo $feedback ?></p>  
        <?php endif ?>
        <form action="cookies2.php" method="POST">      
        <ul>
            <li>
                <label for="gebruikersnaam">gebruikersnaam</label>
				<input type="text" id="gebruikersnaam"  name="gebruikersnaam">
            </li>    
            <li><label for="paswoord">paswoord</label>
				<input type="text" id="paswoord"  name="paswoord" >    
            </li> 
            <li>
				<label for="onthoud"> Mij onthouden: </label>
				<input type="checkbox" name="onthoud" id="onthoud">
            </li>
				
        </ul>    
            
            <input name="submit" type="submit" value="Verzenden">     
        </form>  
        <?php endif ?>
        <?php echo $testText ?>
	</body>
</html>