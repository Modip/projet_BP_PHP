<?php
require_once 'db.php';
//Fonction pour ajouter un client physique 
function addClientphysique($nom, $prenom, $telephone, $salaire, $adresse, $profession, $login, $password, $email, $nci)
{
   
   $sql = "INSERT INTO client_physique VALUES(NULL, '$nom', '$prenom', '$telephone', $salaire, '$adresse', '$profession', '$login', '$password', '$email', '$nci',NULL,NULL)";
   
   $conn = getConnection();
   
   return $conn->exec($sql);
   
}
//Fonction pour ajouter un client entreprise
function addClientmoral($raison_social, $nom, $adresse, $numidentf, $telephone, $email, $login,$password)
{
   $sql = "INSERT INTO client_moral VALUES(NULL, '$raison_social', '$nom', '$adresse', '$numidentf', '$telephone', '$email', '$login', '$password')";
   
      $conn = getConnection();
      return $conn->exec($sql);
}
//Fonction pour afficher les clients qui sont dans la base
function afficherClient(){
   
   $val = ('SELECT * FROM client_physique');
   $db = getConnection();
   return $db->query($val)->fetchAll();
   
}
//Fonction pour afficher les agences qui sont dans la base
function afficherAgence(){
  $val1 = ('SELECT * FROM agence');
  $db = getConnection();
  return $db->query($val1)->fetchAll();
}