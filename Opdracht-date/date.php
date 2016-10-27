<?php
   
$tijd = mktime(22,35,25,1,21,1904);

$datum = date('d F Y g:i:s pm',$tijd)


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