<?php

    require_once(__DIR__ .'/../vendor/autoload.php');
      

    \Reportico\Engine\Builder::build()
          ->properties([ "bootstrap_preloaded" => true])
          ->datasource()->database("mysql:host=localhost; dbname=inventory")->user("root")->password("")
          ->title     ("Employee List")
          ->description     ("Produces a list of our employees")
          ->sql       ("
                SELECT ID id, article article
                FROM icti
                ORDER BY id, article
                ")
          ->execute();
?>s