<?php

    class FilmManager{
        
        private $bdd;
        
        public function __construct(){
            require "dbconnect.php";
            $this->bdd = $bdd;
        }
        
        public function getFilms(){
            
            $films = $this->bdd->query("SELECT ID_FILM, TITRE FROM films"); 
            return $films->fetchAll();
        }
        
        public function getInfosFilm($id){
            $stmt = $this->bdd->prepare("SELECT f.TITRE, DATE_FORMAT(f.ANNEE_SORTIE, '%d/%m/%Y') as SORTIE, f.DUREE, f.Synopsis, CONCAT(r.PRENOM, ' ',r.NOM) as reali
                FROM films f,  casting c, realisateur r
                WHERE f.ID_FILM = c.ID_FILM
                AND f.ID_REALISATEUR = r.ID_REALISATEUR
                AND f.ID_FILM = :id");
            $stmt->execute(array("id" => $id));
            
            return $stmt->fetch();
        }
      
    }

    
   class ActorManager{
        
        private $bdd;
        
        public function __construct(){
            require "dbconnect.php";
            $this->bdd = $bdd;
        }
        
        public function getActors(){
            
            $actors = $this->bdd->query("SELECT ID_ACTEUR, PRENOM, NOM FROM acteur"); 
            return $actors->fetchAll();
        }
        
        public function getInfosActor($id){
            $stmt = $this->bdd->prepare("SELECT CONCAT(a.PRENOM,' ',a.NOM) as acteur, DATE_FORMAT(a.DATE_NAISSANCE, '%d/%m/%Y') as NAISSANCE , a.SEXE, f.TITRE, c.ROLE, f.ID_FILM
                     FROM acteur a, films f, casting c
                     WHERE f.ID_FILM = c.ID_FILM
                     AND a.ID_ACTEUR = c.ID_ACTEUR
                     AND a.ID_ACTEUR = $id");
                $stmt->execute(array("id"=> $id));
                
                return $stmt->fetch();
        }
        
        public function getCasting($id){
            $stmt = $this->bdd->prepare("SELECT a.ID_ACTEUR, CONCAT(a.PRENOM,' ',a.NOM) as acteur, c.ROLE
                    FROM acteur a, casting c
                    WHERE a.ID_ACTEUR = c.ID_ACTEUR
                    AND c.ID_FILM = :id");
                $stmt->execute(array("id"=> $id));
        
                return $stmt->fetchAll();
            }
   
        }
    
    

 class GenreManager{
        
        private $bdd;
        
        public function __construct(){
            require "dbconnect.php";
            $this->bdd = $bdd;
        }
        
        public function getGenres(){
            
            $genres = $this->bdd->query("SELECT ID_GENRE, GENRE FROM genre"); 
            return $genres->fetchAll();
        }
        
        public function getInfosGenre($id){
            $stmt = $this->bdd->prepare("SELECT f.TITRE, g.GENRE FROM films f, genre g,genre_film gf WHERE f.ID_FILM = gf.ID_FILM AND gf.ID_GENRE = g.ID_GENRE AND gf.ID_GENRE = $id");
            $stmt->execute(array("id"=>$id));
            
            return $stmt->fetch(); 
        }
        
    }
    
  