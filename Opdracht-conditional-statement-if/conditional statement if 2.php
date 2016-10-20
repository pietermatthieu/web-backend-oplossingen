<?php
	    $getal      = 6;
        $dag        = "";

    if($getal == 1){  $dag = 'Maandag';  }
    if($getal == 2){  $dag = 'dinsdag';  }
    if($getal == 3){  $dag = 'Woensdag';  }
    if($getal == 4){  $dag = 'Donderdag';  }
    if($getal == 5){  $dag = 'Vrijdag';  }
    if($getal == 6){  $dag = 'Zaterdag';  }
    if($getal == 7){  $dag = 'Zondag';  }
    
    $dag = strtoupper($dag);
    $dag = str_replace('A','a',$dag);
    $positieLaatsteA = strrpos($dag,'A');
    
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $dag ?></p>
	</body>
</html>