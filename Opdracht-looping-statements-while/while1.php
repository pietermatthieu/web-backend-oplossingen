<?php
    $i = 0;

    while($i <100)
    {
        $getallen[] = $i;
        
        $i++;
    }
    $aftedrukken = implode(', ', $getallen);
    
    $length = count($getallen);
    $j = 0;
    while($j < $length)
    {
        
        if($getallen[$j] % 3 == 0 && $getallen[$j] > 40 && $getallen[$j] < 80 )
        {
            $specialeGetallen[] = $getallen[$j];
        }
        $j++;
    }
    $aftedrukkenSpeciale = implode(', ', $specialeGetallen);
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $aftedrukken ?></p>
        <p><?php echo $aftedrukkenSpeciale ?></p>
	</body>
</html>