<?php
$titre = "liste des films du genre";
$entete = "<th class='table-dark text-center'><h2>FILMS</h2></th>" .
          "<th class='table-dark'><h2>DETAILS</h2></th> <div><br>";

$liste= "";

?>

<div class="container-fluid">
    <?php echo "Accueil > Genres > ".$genre['GENRE'];?>
</div>


<?php echo " <h3>Films du genre ".$genre['GENRE']."</h3>" ?>
             

     
    

<a href='?page=liste-genre'>Retour</a>


