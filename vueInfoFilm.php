 


<?php
$titre = "liste des films";
$entete = "<th class='table-dark text-center'><h2>FILMS</h2></th>" .
          "<th class='table-dark'><h2>DETAILS</h2></th> <div><br>";

$liste="";


?>
<div class="container-fluid">
    <?php echo "Accueil > Films > ".$film['TITRE'];?>
</div>
<?php
//var_dump($film);
echo "<h3><em>".$film['TITRE']."</em></h3>
                <dt>Réalisé par:</dt>
                <dd><em><a href='#'>".$film['reali']."</a></em></dd>
                <dt>Année de sortie :</dt>
                <dd>".$film['SORTIE']."</dd>
                <dt>Durée :</dt>
                <dd>".$film['DUREE']."</dd>
                <dt>Distribution :</dt>
                <dd>";
    foreach($casting as $acteur){
        echo "<a href='?page=voir-acteur&id=".$acteur['ID_ACTEUR']."'>".$acteur['acteur']."</a>/".$acteur['ROLE']."<br>";
    }
      echo      "</dd><dt>Synopsis :</dt>
                <dd>".$film['Synopsis']."</dd>
                <a href='../Cinema-MVC/index.php'>Retour</a>
                </dl>
                </div>";
                 
   ?>          