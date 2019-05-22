<!--<a href="../../../../F:/Cours Dev/ELAN/PHP-SQL/ActeursMVC/model.php"></a>-->


<?php
    $titre = "liste des films";
    $entete = "<th class='table-dark text-center'><h2>FILMS</h2></th>" .
              "<th class='table-dark'><h2>DETAILS</h2></th> <div><br>";

    $liste="";
    foreach($films as $film){
        $liste .= "<tr class='table-warning text-center'>" . "<td>" . "<h2>" . $film['TITRE'] . "</h2>" . "<td>" . "<a href='?page=voir-film&id=" . $film['ID_FILM'] . "'>Voir + </a></td>";
    }   
    ?>

    <div class="container-fluid">
        <?php echo "Accueil > Films";?>
    </div>

    <?php
    echo $liste;

    ?>


