<?php
require_once 'db.php';
//Fonction pour ouvrir un compte à un client 
function Addcompte ($numeroCte, $clerib, $agence_id, $solde, $etat, $cltphy_id, $cltmor_id, $typeCompte, $datecrea){
     $sql= "INSERT INTO compte_client VALUES (NULL,'$numeroCte', '$clerib', '$agence_id', '$solde', '$etat', '$cltphy_id', '$cltmor_id', '$typeCompte', '$datecrea')";
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
//Fonction pour afficher les types comptes
 function afficherTypecompte(){
     $cpt = ('SELECT * FROM type_compte ');
     $db = getConnection();
     return $db->query($cpt)->fetchAll();
 }
?>