<?php
    $rijen = 10;
    $kolommen = 10;

    $tafels = array();

    for($i=0;$i<$rijen;$i++)
    {
        $producten = array();
        
        for($j=0;$j<$kolommen;$j++)
        {
            $producten[] = $i * $j;
        }
        $tafels[$i] = $producten;
        
    }

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
            
            <thead>
				<th>Tafel</th>

				<?php for($i=0;$i<=$rijen; $i++): ?>
					
					<th><?= $i ?></th>
					
				<?php endfor ?>
			</thead>
            
            
            
            <?php for($rij=0;$rij<$rijen;$rij++): ?>
            <tr>
                <?php for($kolom=0;$kolom<$kolommen;$kolom++): ?>
                <td class="<?= (($rij*$kolom)%2>0)? 'onevenGetallen' : 'nietOneven' ?>"> <?php echo $rij*$kolom ?></td>
                <?php  if(($kolom * $rij) %2 == 1  )  ?>
            <?php endfor ?>
            </tr>
            <?php endfor ?>
            <pre> <?php var_dump($tafels)  ?></pre>
            
        </table>
	</body>
</html>