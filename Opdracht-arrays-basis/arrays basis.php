<?php

    $dierenLijst1 = array('vis','kat','hond','vogel','muis','leeuw','tijger','pinguin','aap','geit');

    $dierenLijst2[0] = 'vis';
    $dierenLijst2[1] = 'kat';
    $dierenLijst2[2] = 'hond';
    $dierenLijst2[3] = 'vogel';
    $dierenLijst2[4] = 'muis';
    $dierenLijst2[5] = 'leeuw';
    $dierenLijst2[6] = 'tijger';
    $dierenLijst2[7] = 'pinguin';
    $dierenLijst2[8] = 'aap';
    $dierenLijst2[9] = 'geit';

    $voertuigen = array('landvoertuigen' => array('Vespa','fiets') , 'watervoertuigen' => array('surfplank','vlot','schoener','driemaster'), 'luchtvoertuigen' => array('luchtballon','helicopter','B52'));



?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php var_dump ($dierenLijst1) ?></p>
        <p><?php var_dump ($dierenLijst2) ?></p>
        <p><?php var_dump ($voertuigen) ?></p>
	</body>
</html>