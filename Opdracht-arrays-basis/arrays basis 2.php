<?php

    $getallen = array('1','2','3','4','5');
    $product = array_product($getallen);    
    $grootte = count($getallen);
    $omgekeerdeGetallen = array_reverse($getallen);

    for($i =0;$i<$grootte;$i++)
    {
        if($getallen[$i] % 2 != 0)
        $onevengetallen[] =  $getallen[$i];      
    }
    for($i =0;$i<$grootte;$i++)
    {
        $somArray[] = ($getallen[$i] + $omgekeerdeGetallen[$i]);  
    }
        
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $product ?></p>
        <pre><?php var_dump ($onevengetallen) ?></pre>
        <pre><?php var_dump ($somArray) ?></pre>
	</body>
</html>