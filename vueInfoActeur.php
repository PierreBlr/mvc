<?php
$titre = "liste des acteurs";
$entete = "<th class='table-dark text-center'><h2>FILMS</h2></th>" .
          "<th class='table-dark'><h2>DETAILS</h2></th> <div><br>";

$liste="";

?>

<div class="container-fluid">
    <?php echo "Accueil > Acteurs > ".$actor['acteur'];?>
</div>


<?php echo " <h3>A propos</h3>
             <dt>Nom :</dt>
             <dd>". $actor['acteur']."</dd>
             <dt>Sexe :</dt>
             <dd>".$actor['SEXE']."</dd>
             <dt>Né(e) le  :</dt>
             <dd>".$actor['NAISSANCE']."</dd>
             <dt>Filmographie / Rôle </dt>
             <dd><a href='?page=voir-film&id=".$actor['ID_FILM']."'>".$actor['TITRE']."</a> / ".$actor['ROLE']."</dd>
            <a href='?page=liste-acteur'>Retour</a>";
?>