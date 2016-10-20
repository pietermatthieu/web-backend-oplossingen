<?php
    $rijen = 10;
    $kolommen = 10;


?>

<!DOCTYPE html>
<html>
	<head>
        <style>
            .onevenGetallen
            {
                
                background-color: green;
            }
            .nietOneven
            {
                
                background-color: blue;
            }
        
        </style>
        
	</head>
	<body> 
        <table>
            <?php for($rij=0;$rij<$rijen;$rij++): ?>
            <tr>
                <?php for($kolom=0;$kolom<$kolommen;$kolom++): ?>
                <td class="<?= (($rij*$kolom)%2>0)? 'onevenGetallen' : 'nietOneven' ?>"> <?php echo $rij*$kolom ?></td>
                <?php  if(($kolom * $rij) %2 == 1  )  ?>
            <?php endfor ?>
            </tr>
            <?php endfor ?>
        </table>
	</body>
</html>