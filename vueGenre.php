<?php

    $titre = "liste des acteurs";
    $entete = "<th class='table-dark text-center'><h2>ACTEURS</h2></th>" .
              "<th class='table-dark'><h2>DETAILS</h2></th> <div><br>";

    $genrelist="";
    
     foreach($genres as $genre){
        $genrelist .= "<h2>".$genre['GENRE']."</h2><a href='?page=voir-genre&id=".$genre['ID_GENRE']."'>Voir + </a>";
                    }
        ?>

    <div class="container-fluid">
           <?php echo "Accueil > Genres";?>
       </div>
    <?php
        echo $genrelist;
    ?>



