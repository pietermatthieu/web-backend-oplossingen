<?php
	    $lettertje    = 'e';      
        $cijfertje    = '3';
        $langsteWoord = 'zandzeepsodemineralenwatersteenstralen';
        $nieuwWoord = str_replace($lettertje,$cijfertje,$langsteWoord);
        
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $nieuwWoord ?></p>
	</body>
</html>