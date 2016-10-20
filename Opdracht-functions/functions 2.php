<?php
	
    $dieren = array('vis','kat','hond','vlieg');
    $length = count($dieren);

    function drukArrayAf($array)
    {
        $zinnenArray = array();
        
        global $length;
        global $dieren;
        for($i=0;$i< $length;$i++)
        {
            
            
            $zinnenArray[] = $dieren[$i];
        }
        
        
        
        return $zinnenArray;
    }
    


?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>    
        
        <pre><?php var_dump (drukArrayAf($dieren))  ?></pre>
        
	</body>
</html>