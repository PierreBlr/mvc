<?php
    require_once "ctrl.php";
?>

<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css" /> 

        <title>
            <?php
                echo "FILMS DE PIERRE - ";
                echo (isset($_GET['page'])) ? $_GET['page'] : "Accueil";
            ?>
        </title>    
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
                <a class="navbar-brand" href="http://elan-formation.eu/" ><img src="logo_elan-min.png" class="img-circle" width="50" height="50" alt="" ></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around" id="navbarNavAltMarkup">
                    <div class="navbar-nav "> 
                        <a class="nav-item nav-link active" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="index.php">Films<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="?page=liste-acteur">Acteurs</a>
                        <a class="nav-item nav-link active" href="?page=liste-genre">Genres</a>
                    </div>
                </div>
            </nav>
        </header>
        
        <div class="container-fluid">
            
            <?php
            if(isset($_GET['page'])){
                switch($_GET['page']){
                        
                    case "voir-film":
                        getOneFilm($_GET['id']);
                        break;
                    
                    case"liste-acteur":
                        getAllActors();
                        break;
                    
                    case "voir-acteur":
                        getOneActor($_GET['id']);
                        break;
                    
                    case "liste-genre":
                        getAllGenres();
                        break;
                    
                    case "voir-genre":
                        getOneGenre($_GET['id']);
                        break;
                    
                    default:
                        getAllFilms();
                        break;
                }
            }
            else getAllFilms();
            
             
                
            
          /*<div>
                <div>
                    <table class="table-hover">
                        <thead class="active">
                            <tr>
                        <a href="../../../../F:/Cours Dev/ELAN/PHP-SQL/Cinema-MVC/index.php"></a>
                        <?= $entete ?>
                        </tr>
                        </thead>

                        <tbody>
                            <?= $liste ?> 
                            
                        </tbody>
                    </table>
                </div>
            </div>*/?>
        </div>
        <footer class="container-fluid text-center bg-warning fixed-bottom">
            <p>@Elan-Formation 2018</p>
        </footer>
    </body>
</html> 




