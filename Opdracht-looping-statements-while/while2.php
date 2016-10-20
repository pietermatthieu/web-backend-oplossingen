<?php
    $boodschappenLijstje = array('water','snoep','melk');


    $aantal = count($boodschappenLijstje);
    $counter =0;
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <ul>
			
            <?php while( $counter != $aantal  ):  ?>
            <li><?= $boodschappenLijstje[$counter]?></li>
            <?php $counter++ ?>
            <?php endwhile ?>
		</ul>
        
        
        
	</body>
</html>