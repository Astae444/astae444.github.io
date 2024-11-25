<?php
include_once "../fonctions.php";

CheckToken();

$name=filter_input(INPUT_POST, "name");
$email=filter_input(INPUT_POST, "email");
$message=filter_input(INPUT_POST, "message");


include_once "../config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD
    , Config::UTILISATEUR, Config::MOTDEPASSE);
$requete=$pdo->prepare("insert into messages (name,email,message) values (:name,:email,:message)");
$requete->bindParam(":name", $name);
$requete->bindParam(":email", $email);
$requete->bindParam(":message", $message);

$requete->execute();

header("location: ../index.php");
?>