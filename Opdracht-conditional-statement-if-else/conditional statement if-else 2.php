
<?php     
        $seconden       = 221108521;


        $totaalMinuten  = floor($seconden / 60);
        $totaalUren     = floor($totaalMinuten / 60);
        $totaalDagen    = floor($totaalUren/24);
        $totaalWeken    = floor($totaalDagen/7);
        $totaalMaanden  = floor($totaalDagen/31);
        $totaalJaren    = floor($totaalDagen/365);
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>   
        <p>in <?php echo $seconden ?> seconden</p>
        <li>minuten: <?php echo $totaalMinuten ?></li>
        <li>uren: <?php echo $totaalUren ?></li>
        <li>dagen: <?php echo $totaalDagen ?></li>
        <li>Weken: <?php echo $totaalWeken ?></li>
        <li>maanden (31): <?php echo $totaalMaanden ?></li>
        <li>jaren (365): <?php echo $totaalJaren ?></li>
	</body>
</html>

