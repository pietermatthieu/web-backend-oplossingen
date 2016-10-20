<?php
        $getallen = array(8,7,8,7,3,2,1,2,4);
        $zonderDuplicaten = array_unique($getallen);
        rsort($zonderDuplicaten);
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>    
        
        <p><?php var_dump($zonderDuplicaten) ?></p>
	</body>
</html>