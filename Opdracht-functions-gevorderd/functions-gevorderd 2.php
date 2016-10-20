<?php
    $pigHealth              = 5;
    $maximumThrows          = 8;
    $aantalkeerAangeroepen  = 0;    
    $verloop = array();

    function calculateHit()
    {
        global $pigHealth;
             
        $raakkans = rand(0,100);
        $isGeraakt = true;
        $zin = "";
        
        if($raakkans <= 40)
        { $isGeraakt = true;  }      
        else
        { $isGeraakt = false; }
        
        if($isGeraakt)
        {
            $pigHealth--;
            $zin = 'Raak! Er zijn nog maar ' . $pigHealth . ' varkens over.';     
        }
        else
        {   
            $zin = 'Mis! Nog ' . $pigHealth . ' varkens in het team.';}      
        return $zin;
    }

    function launchAngryBird()
    {
        global $pigHealth;
        global $maximumThrows;
        global $aantalkeerAangeroepen;
        global $verloop;
               
        if ( $maximumThrows > $aantalkeerAangeroepen && $pigHealth !=0 )
        {
            $result = calculateHit();
            $aantalkeerAangeroepen++;           
            $verloop[] = $result;            
            launchAngryBird();
        }
        else
        {           
            if($pigHealth > 0)
            { $verloop[] = 'Verloren!'; }
            else
            { $verloop[] = 'Gewonnen!'; }         
        }
    }
    
        launchAngryBird();


?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>    
        
        <pre> <?php  var_dump($verloop)    ?>  </pre>
       
        
	</body>
</html>