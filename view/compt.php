<?php

$pdo = new PDO('mysql:host=localhost;dbname=bp2', 'root', '');
//Recuperer des donnes dans la base
$val1 = $pdo->query('SELECT * FROM client_physique')->fetchAll();
$val2 = $pdo->query('SELECT * FROM client_moral')->fetchAll();
$valagence = $pdo->query('SELECT * FROM agence')->fetchAll();
$valcompte = $pdo->query('SELECT * FROM type_compte')->fetchAll();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="mystyle.css" />
    <title>Creation compte</title>
</head>

<body>

    <header class="topbar">
        <h3>BANQUE DU <span style="color: white;">PEUPLE</span></h3>
    </header>
    <nav class="sidebar">
        <a class="dash" href="index.php">Dashboard </a>
        <a class="compt" href="compt.php" style="color: black;">Compte</a>
        <a class="dash" href="client.php">Client</a>
    </nav>
    <form id="inscription" method="POST" action="../controller/controllercompte.php">
        <div class="container">
            <h2>Ouverture de Compte</h2>
            <select id="typeclient" name="typeclient" onchange="chwclient ()">
                <option value="0">Choix Type Client</option>
                <option value="1" id="cp" class="clp">Client Physique</option>
                <option value="2" id="cm" class="clm">Client Moral</option>
            </select>
            <main id="clientphysique">
                <fieldset class="clientphysique" id="cliphysique">
                    <legend>Client Physique </legend>
                    <select name="idClient" id="idClient">
                        <option value="">Clients</option>
                        <!-- Afficher les données recuperer et stocker dans la variable val1 -->
                        <?php foreach ($val1 as $client) { ?>
                            <option value="<?php echo $client['id'] ?>"><?php echo $client['prenom'] . ' ' . $client['nom'] ?></option>
                        <?php } ?>
                    </select> <br>

                    <select name="agence" id="idagence">
                        <option value="">Agence</option>
                        <?php foreach ($valagence as $agence) { ?>
                            <option value="<?php echo $agence['id'] ?>"><?php echo $agence['nom'] ?></option>
                        <?php } ?>

                    </select> <br>

                    <select name="typecompte" id="chx" onchange="return chwcompt()">
                        <option value="0">Type de Compte</option>
                        <?php foreach ($valcompte as $compte) { ?>
                            <option value="<?php echo $compte['id'] ?>"><?php echo $compte['libelle'] ?></option>
                        <?php } ?>
                    </select> <br>

                    <label for="cle"> Clé RIB</label>
                    <input type="" name="clerib" class="cp" id="clerib">
                    <label for="contrclerib" id="contrclerib" class="contr"> veillez saisir la clé RIB</label>

                    <label for="solde"> Solde</label>
                    <input type="" name="solde" class="cp" id="solde">
                    <label for="" id="contrsolde" class="contr">Veillez saisir le solde </label>
                    <label for="agios"> Agios</label>
                    <input type="" name="agios" id="agios">
                    <label for="" id="contragios" class="contr"> Veillez saisir les agios</label>
                    <label for="fraisou">Frais</label>
                    <input type="text" name="fraisph" id="fraisou">
                    <label for="" id="contrfraisou" class="contr"> Veillez saisir les frais </label>

                    <label for="date">Date d'ouverture</label>
                    <input type="date" name="dateou" id="dateou">
                    <label for="" id="contrdateou" class="contr"> Veillez choisir la date </label>

                    <div id="datebloc" style="display: none;">
                        <label for="date">Date de blocage</label>
                        <input type="date" name="dateoub" class="cp" id="dateoub"> <br>
                        <label for="date">Date de déblocage</label>
                        <input type="date" name="datedeb" id="datedeb">
                    </div>

                </fieldset>
            </main>
            <aside id="clientmoral">
                <fieldset class="clientmoral" id="climoral">
                    <select name="clientmor">
                        <option value="0">Clients</option>
                        <?php foreach ($val2 as $client) { ?>
                            <option value="<?php echo $client['id'] ?>"><?php echo $client['nom'] ?></option>
                        <?php } ?>
                    </select> <br>
                    <legend> client moral </legend>
                    <label for="cle">Clé RIB</label>
                    <input type="text" name="cleribmor" id="cleribmor">
                    <label for="contrclerib" id="contrcleribmor" class="contr"> veillez saisir la clé RIB</label>
                    <label for="solde">Solde initial</label>
                    <input type="text" name="soldemor" id="soldemor">
                    <label for="" id="contrsoldemor" class="contr">Veillez saisir le solde initial</label><br>
                    <label for="fraismor">Frais</label>
                    <input type="text" name="fraismor" id="fraismor">
                    <label for="" id="contrfraismor" class="contr">Veillez saisir les frais</label><br>
                    <label for="dateoum">Date d'ouverture</label>
                    <input type="date" name="dateoum" class="cp" id="dateoum">
                </fieldset>
            </aside>

            <div class="boutton" id="boutton">
                <input class="ajout" type="submit" name="ajouter" value="Ajouter" onclick="return validation()">
            </div>
        </div>
    </form>
    <script src="compt.js"></script>

</body>

</html>