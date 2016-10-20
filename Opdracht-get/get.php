<?php
   $artikels = array( array('titel' => 'Politie Rotterdam vat killerclown bij de kraag','datum' => '13 october 2016', 'inhoud' => 'De politie in Rotterdam heeft woensdagavond een zogenoemde killerclown aangehouden. Op sociale media toont de politie een clownsmasker, een met bloed besmeurd plastic slagersmes en groene handschoenen.', 'afbeelding' => 'image1.jpg','afbeeldingBeschrijving' => 'man in handboeien' ) , array('titel' => 'Man roept Oooh sexy naar stewardess en wordt uit vliegtuig gezet','datum' => '15 october 2016','inhoud' => 'Hij dacht de lachers in het vliegtuig op zijn hand te krijgen, maar in plaats daarvan kon een passagier van Alaska Airlines zijn koffers pakken. De vrijpostige opmerkingen aan het adres van de stewardess werden hem bepaald niet in dank afgenomen.', 'afbeelding' => 'image2.jpg','afbeeldingBeschrijving' => 'vliegtuig dat opstijgt' ),array('titel' => 'Politie schiet met taser man neer in midden van snelweg','datum' => '14 october 2016','inhoud' => 'In de Amerikaanse staat Texas is een politie-achtervolging gisteren uitgedraaid op een levensgevaarlijke oversteek van de snelweg. De verdachte werd daarbij met een taser neergehaald in het midden van de snelweg.', 'afbeelding' => 'image3.jpg','afbeeldingBeschrijving' => 'man op midden van snelweg' )  );
    

$isBestaand   = false;
$enkelArtikel = false;


if(isset( $_GET['id'] ))
{
    $id = $_GET['id'];
    
    if( array_key_exists($id,$artikels) )
    {
        $artikels = array( $artikels[$id] );
        $enkelArtikel = true;              
    }
    else
    {
        $enkelArtikel = false;       
    }  
}


?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
              
	</head>
	<body>  
        <style>
            .samen
            {
                box-sizing:border-box;
                background-color:#E9E9E9;
                float:left;
                width:300px;
                padding-top:10px;
                          
            }
        
        
        
        
        </style>
       
        <section class="articles">
            
			<?php foreach($artikels as $k => $a):  ?>  
            <article class='samen'>
            <h1><?= $a['titel']   ?></h1>
            <p><?= $a['datum']   ?></p>
            <img src='img/<?= $a['afbeelding'] ?>.jpg' alt='<?= $a['afbeeldingBeschrijving'] ?>'>
            <p><?php echo(  substr($a['inhoud'],0,50  )) ?>... </p>
            <?php endforeach ?>
            </article>
		</section>
        
	</body>
</html>