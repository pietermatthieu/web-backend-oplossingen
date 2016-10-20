<?php
            $jaar   = 2016;
            $isSchrikkeljaar = "Dit is geen schrikkeljaar";

    if(    (($jaar % 4   == 0) 
         && ($jaar % 100 != 0)) 
         || ($jaar % 400 == 0) 
      )
    {
        $isSchrikkeljaar = "Dit is een schrikkeljaar";       
    }

?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $isSchrikkeljaar ?></p>
	</body>
</html>