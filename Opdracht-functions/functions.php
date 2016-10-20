<?php
	

    function berekenSom($getal1,$getal2)
    {    
        $som = $getal1 + $getal2;
        return $som;      
    }
    
    function vermenigvuldig($getal1,$getal2)
    {
        $product = $getal1*$getal2;
        return $product;       
    }
    
    function isEven($getal)
    {
        $getalIsEven = true;
        if( $getal % 2 != 0 )
        {
            $getalIsEven = false;          
        }
        return $getalIsEven;
    }
    function lengthUppercase($s)
    {
        $luArray[] = strtoupper($s);
        $luArray[]    = strlen($s);
        return $luArray;
    }
        $str = 'fruitsap';
        $wegTeSchrijvenArray = lengthUppercase($str);



?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>    
        
        <p><?php echo berekenSom(4,8) ?></p>
        <p><?php echo vermenigvuldig(4,8) ?></p>
        <p><?php echo isEven(4) ?></p>
        <pre><?php var_dump ($wegTeSchrijvenArray) ?></pre>
        
	</body>
</html>