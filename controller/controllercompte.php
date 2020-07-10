<?php
$pdo = new PDO('mysql:host=localhost;dbname=bp2','root','');
//generer un numero de compte
function getnumcompte($idagence, $idclerib){
   return  $idagence.$idclerib;
 }
 $numcompte = getnumcompte(1,1);

//Insertion dans la base
if(isset($_POST['ajouter'])){
   
   extract($_POST);

   if($typeclient=='1'){

      $a = $pdo->exec("INSERT INTO `compte_client`(`id`, `numeroCte`, `clerib`, `agence_id`, `solde`, `etat`, `cltphy_id`, `cltmoral_id`, `typeCompte_id`, `datecrea`, `dateferme`, `datefertempo`, `datereouv`) VALUES (null,$numcompte,$clerib,null,$solde,null,$typeclient,null,$typecompte,$dateou,null,null,null)");
      
      var_dump($a);
   }
   if($typeclient=='2'){
      $a = $pdo->exec("INSERT INTO `compte_client`(`id`, `numeroCte`, `clerib`, `agence_id`, `solde`, `etat`, `cltphy_id`, `cltmoral_id`, `typeCompte_id`, `datecrea`, `dateferme`, `datefertempo`, `datereouv`) VALUES (null,null,$cleribmor,null,$soldemor,null,null,$clientmor,null,$dateoum,null,null,null)");
      
      var_dump($a);
   }

   
   
}
