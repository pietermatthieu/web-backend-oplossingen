<?php
	    $fruit         = 'ananas';
       
        $laatsteA    = strrpos($fruit,'a');
        $fruitToUpper= strtoupper($fruit);
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $laatsteA ?></p>
        <p><?php echo $fruitToUpper ?></p>
	</body>
</html>