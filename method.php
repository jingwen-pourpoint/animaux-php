<?php

$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=animaux','visiteur','root');

if(isset($_REQUEST['nom']) && isset($_REQUEST['race'])) {
    ajout($_REQUEST['nom'],$_REQUEST['race']);
}


function select(){
    global $pdo;
    $select = $pdo->query('SELECT nom,type FROM animaux.chien INNER JOIN animaux.race ON race.id = chien.race_id');
    $select = $select -> fetchAll(PDO::FETCH_OBJ);

    return $select;
}

function ajout($nom,$race){
    global $pdo;
    $addRace = $pdo->prepare("INSERT INTO animaux.race (`type`) VALUE (?)");
    $addRace->bindParam(1, $race);
    $addRace->execute();

    $raceId = $pdo->lastInsertId();
    $addChien = $pdo->prepare("INSERT INTO animaux.chien (`nom`, `race_id`) VALUE (?,?)");
    $addChien->bindParam(1, $nom);
    $addChien->bindParam(2, $raceId);

    $addChien->execute();
}


$chien = select();

?>