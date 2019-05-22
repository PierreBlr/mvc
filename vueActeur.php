<?php
    $titre = "liste des acteurs";
    $entete = "<th class='table-dark text-center'><h2>ACTEURS</h2></th>" .
              "<th class='table-dark'><h2>DETAILS</h2></th> <div><br>";

    $listactors="";

    foreach($actors as $actor){
    $listactors .= "<tr>"."<td>"."<h2>".$actor['PRENOM']." ".$actor['NOM']."</h2>"."<td>"."<a href='?page=voir-acteur&id=".$actor['ID_ACTEUR']."'>Voir + </a></td></tr>";
    }
                ?>

    <div class="container-fluid">
        <?php echo "Accueil > Acteurs";?>
    </div>
    <?php
        echo $listactors;

?>




