<?php
   
    $ingelezenText = file_get_contents("text-file.txt");

    $textChars = str_split( $ingelezenText);
    rsort($textChars);
    $omgekeerdeTextChars = array_reverse($textChars);

    $teller = array();

    foreach($omgekeerdeTextChars as $value)
    {
        if(  isset($teller[$value])  )
        {
            ++$teller[$value];
            //gaat 1 verder    
        }
        else
		{
			$teller[$value] = 1;
            //telt er bij op
		}
        
    }

?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>       
        <pre><?php /*var_dump($omgekeerdeTextChars)*/ ?></pre   >
       <pre><?php var_dump($teller) ?></pre   >
	</body>
</html>