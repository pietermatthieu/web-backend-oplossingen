<?php

	$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
    $arg1 = '2';
    $arg2 = '8';
    $arg3 = 'a';

    function counter1($a)
    {
        $zin     = $GLOBALS['md5HashKey'];
        $aantal  = substr_count($zin,$a);
        $length  = strlen($zin);
        $procent = (100 * ($aantal / $length));
        return $procent;
    }

    function counter2($a,$zin)
    {       
        $aantal  = substr_count($zin,$a);
        $length  = strlen($zin);
        $procent = (100 * ($aantal / $length));
        return $procent;
        
        
    }

    function counter3($a)
    {
        global $md5HashKey;
        $aantal  = substr_count($md5HashKey,$a);
        $length  = strlen($md5HashKey);
        $procent = (100 * ($aantal / $length));
        return $procent;
        
        
    }
    
    $p1 = counter1($arg1);
    $p2 = counter2($arg2,$md5HashKey);
    $p3 = counter3($arg3);


?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>    
        
        <p>Functie 1: '<?php echo $arg1 ?>' komt <?php echo $p1 ?>% voor in de hash key '<?php echo $md5HashKey ?>'</p>
        <p>Functie 2: '<?php echo $arg2 ?>' komt <?php echo $p2 ?>% voor in de hash key '<?php echo $md5HashKey ?>'</p>
        <p>Functie 3: '<?php echo $arg3 ?>' komt <?php echo $p3 ?>% voor in de hash key '<?php echo $md5HashKey ?>'</p>
        
        
        
	</body>
</html>