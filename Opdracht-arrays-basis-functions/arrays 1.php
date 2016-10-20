<?php

    $dierenLijst = array('vis','kat','hond','vogel','muis','leeuw');
    $grootteArray = count($dierenLijst);
    $teZoekenDier = "krekel";
    $feedback = "gevonden";


    if(!in_array($teZoekenDier,$dierenLijst))
    {
        $feedback = "niet gevonden";
    }


?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $grootteArray ?></p>
        <p><?php echo $feedback ?></p>
	</body>
</html>