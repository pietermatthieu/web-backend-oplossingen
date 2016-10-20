<?php
    $rijen = 10;
    $kolommen = 10;


?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body> 
        <table>
            <?php for($rij=0;$rij<$rijen;$rij++): ?>
            <tr>
                <?php for($kolom=0;$kolom<$kolommen;$kolom++): ?>
                <td>kolom</td>
            <?php endfor ?>
            </tr>
            <?php endfor ?>
        </table>
	</body>
</html>