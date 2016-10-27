<?php
   
setlocale( 'LC_ALL', 'nld_nld');

$tijd = mktime(22,35,25,1,21,1904);

$datum = strftime('%d %B %Y %H:%M:%S %p',$tijd);


?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">              
	</head>
	<body>            
			<p><?php echo $datum ?></p>
        
	</body>
</html>