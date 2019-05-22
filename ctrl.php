<?php
    require "model.php";

    function getAllFilms(){ 
        $model = new FilmManager();
        $films = $model->getFilms();
        require "vueFilm.php";
    }

    
    function getOneFilm($id){
       $fmodel = new FilmManager();
       $amodel = new ActorManager();
       $film = $fmodel->getInfosFilm($id);
       $casting = $amodel->getCasting($id);
       if($film['TITRE'] == null){
           require "error.php";
       }
       else require "vueInfoFilm.php";
    }
    
    
    function getAllActors(){
        
        $model = new ActorManager();
        $actors = $model->getActors();
        require "vueActeur.php";
    }

    
    function getOneActor($id){
       $model = new ActorManager();
       $actor = $model->getInfosActor($id);
       require "vueInfoActeur.php"; 
    }
      
    
    
    function getAllGenres(){
        
        $model = new GenreManager();
        $genres = $model->getGenres();
        require "vueGenre.php";
    }

    
    function getOneGenre($id){
       $model = new GenreManager();
       $genre = $model->getInfosGenre($id);
       require "vueInfoGenre.php";
    }
    