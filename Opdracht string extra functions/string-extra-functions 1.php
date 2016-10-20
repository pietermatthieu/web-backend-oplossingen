<?php
	    $fruit         = 'kokosnoot';
        $lengteFruit   = strlen($fruit);
        $posEersteO    = strpos($fruit,'o');
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $lengteFruit ?></p>
        <p><?php echo $posEersteO ?></p>
	</body>
</html>