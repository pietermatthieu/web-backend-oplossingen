<?php
        $getal = 77;
        $ondersteGetal = 0;
        $bovensteGetal = 0;
        $text = "";
        $omgekeerdeText = "";

        if($getal >= 0 && $getal < 10)
        {
            $ondersteGetal = 0;
            $bovensteGetal = 10;
        }
        elseif ($getal >= 10 && $getal < 20)
	    {
            $ondersteGetal = 10;
            $bovensteGetal = 20;
        }
        elseif ($getal >= 20 && $getal < 30)
	    {
            $ondersteGetal = 20;
            $bovensteGetal = 30;
        }
        elseif ($getal >= 30 && $getal < 40)
	    {
            $ondersteGetal = 30;
            $bovensteGetal = 40;
        }
        elseif ($getal >= 40 && $getal < 50)
	    {
            $ondersteGetal = 40;
            $bovensteGetal = 50;
        }
        elseif ($getal >= 50 && $getal < 60)
	    {
            $ondersteGetal = 50;
            $bovensteGetal = 60;
        }
        elseif ($getal >= 60 && $getal < 70)
	    {
            $ondersteGetal = 60;
            $bovensteGetal = 70;
        }
        elseif ($getal >= 70 && $getal < 80)
	    {
            $ondersteGetal = 70;
            $bovensteGetal = 80;
        }
        elseif ($getal >= 80 && $getal < 90)
	    {
            $ondersteGetal = 80;
            $bovensteGetal = 90;
        }
        elseif ($getal >= 90 && $getal < 100)
	    {
            $ondersteGetal = 90;
            $bovensteGetal = 100;
        }

        $text = "Het getal ligt tussen $ondersteGetal en $bovensteGetal";
        $omgekeerdeText = strrev($text);





?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <p><?php echo $text ?></p>
        <p><?php echo $omgekeerdeText ?></p>
	</body>
</html>