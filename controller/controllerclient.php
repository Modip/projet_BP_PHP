<?php
//require_once('../model/db.php');

require_once('../model/clientdb.php');
if(isset($_POST['submit'])){
    
    extract($_POST);
    if($typeclient == '1')
    {
       
        $a = addClientphysique($nomph, $prenomph, $telph, $salaire, $adresseph, $profession, $loginph, $passwordph, $emailph, $ninph);
        var_dump($a);
    }
    if($typeclient == '2'){
        $insert = addClientmoral($raisonsocial, $nommor, $adressemor, $adressemor, $telmor, $mailmor, $loginmor, $passwordmor); 
        var_dump($insert);
        die();
    }
}
?>


/*
if (isset($_POST['submit'])) {
    extract($_POST);
    
    if ($typeclient == '1') {
        
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $a = Addclientphysique($_POST['nomph'], $_POST['prenomph'], $_POST['telph'], (float) $_POST['salaire'], $_POST['adresseph'], $_POST['profession'], $_POST['loginph'], $password, $_POST['emailph'], $_POST['ninph']);

        var_dump($a);
        die;
    } else {
        $req = $pdo->prepare("INSERT INTO client_moral SET raison_social= ?, nom = ?, adresse = ?, telephone = ?, email = ?, login = ?, password = ?");

        $passwordmor = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $a = $req->execute([$_POST['raisonsocial'], $_POST['nommor'], $_POST['adressemor'], $_POST['telmor'], $_POST['mailmor'], $_POST['loginmor'], $passwordmor]);

        var_dump($a);
        die;
    }
}
*/
