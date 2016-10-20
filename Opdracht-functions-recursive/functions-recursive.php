<?php
    $Geld       = 100000;
    $rentevoet  = 8;
    $jaar       = 10;
    $verloop    = array();

    function berekening($kapitaal,$jarenover)
    {
        global $rentevoet;
        global $verloop;
        
        if($jarenover > 0)
        {
            $geldDitJaar = floor($kapitaal + ($kapitaal*$rentevoet/100));
            $jaar = (11 - $jarenover);
            $verloop[] = 'Jaar ' . $jaar . ': ' . $geldDitJaar . 'euro.' ;             $jarenover--;
            berekening($geldDitJaar,$jarenover);    
        }
        else
        {
            return 1;
        }       
    }
    
    berekening($Geld,$jaar);
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>  
        
        
			<?php foreach($verloop as $value): ?>
				<p><?php echo $value ?></p>
			<?php endforeach ?>
		
        
	</body>
</html>