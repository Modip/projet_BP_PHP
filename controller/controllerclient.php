<?php
$pdo = new PDO('mysql:host=localhost;dbname=bp2', 'root', '');


if (isset($_POST['submit'])) {
    extract($_POST);
   
    if ($typeclient == '1') {
        $req = $pdo->prepare("INSERT INTO client_physique SET nom = ?, prenom = ?, telephone = ?, salaire = ?,  profession = ?, login = ?, password = ?, email = ?, nci = ?");

        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $a = $req->execute([$_POST['nomph'], $_POST['prenomph'], $_POST['telph'], (float) $_POST['salaire'], $_POST['profession'], $_POST['loginph'], $password, $_POST['emailph'], $_POST['ninph']]);

        var_dump($a);
        die;
    } else {
        $req = $pdo->prepare("INSERT INTO client_moral SET raison_social= ?, nom = ?, adresse = ?, telephone = ?, email = ?, login = ?, password = ?");

       $passwordmor = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $a = $req->execute([$_POST['raisonsocial'], $_POST['nommor'], $_POST['adressemor'], $_POST['telmor'], $_POST['mailmor'], $_POST['loginmor'], $passwordmor]);

        var_dump($a);
        die;

      /* 
       $a = $pdo->exec("INSERT INTO `client_moral`(`id`, `raison_social`, `nom`, `adresse`, `numidentf`,`telephone`, `email`, `login`, `password`) VALUES (NULL,'" . $raisonsocial . "','" . $nommor . "','" . $adressemor . "', NULL ,'" . $telmor . "','" . $mailmor . "','" . $loginmor . "','" . $password . "')");
        var_dump($a);*/
    }
}

