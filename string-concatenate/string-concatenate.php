<?php
	$voornaam       = 'Pieter';
    $achternaam     = 'Matthieu';

    $volledigeNaam      = $voornaam . ' ' . $achternaam;
    $aantalCharacters   = strlen($volledigeNaam);
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $volledigeNaam ?></p>
        <p><?php echo $aantalCharacters ?></p>
	</body>
</html>