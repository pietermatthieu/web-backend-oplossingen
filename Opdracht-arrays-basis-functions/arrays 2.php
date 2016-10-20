<?php

    $dieren = array('vis','kat','hond','vogel','muis','leeuw');
    $grootteArray = count($dieren);
    $teZoekenDier = "krekel";
    $feedback = "gevonden";


    if(!in_array($teZoekenDier,$dieren))
    {
        $feedback = "niet gevonden";
    }

    //deel 2
    
    sort($dieren);
    $zoogdieren = array('dolfijn','varken','paard');
    $dierenLijst = array_merge($zoogdieren,$dieren);

?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $grootteArray ?></p>
        <p><?php echo $feedback ?></p>
        <pre><?php var_dump($dierenLijst)  ?></pre>
	</body>
</html>