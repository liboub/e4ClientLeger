<?php
require 'CControleurTuteur.php';
$tuteur = new CControleurTuteur;
$donnees = array(
    "nom"=>$_POST['nom'],
    "prenom"=>$_POST['prenom'],
    "mail"=>$_POST['mail'],
   "tel"=>$_POST['tel'],
   "idEntreprise"=>$_COOKIE['idEntreprise']);
$idTuteur=$tuteur->ajouterTuteur($donnees);

        require_once 'CControleurPeriodeStage.php';
        $cControleurPeriodeStage = new CControleurPeriodeStage();

        require_once 'CControleurEntreprise.php';
        $cControleurEntreprise=new CControleurEntreprise;

        require_once 'CControleurStagiaire.php';
        $cControleurStagiaire=new CControleurStagiaire();

        require_once 'CControleurFormateur.php';
        $cControleurFormateur=new CControleurFormateur();

        require_once 'CControleurTuteur.php';
        $cControleurTuteur=new CControleurTuteur();

$idPeriode=1;//période recupérée en GET

$periode=$cControleurPeriodeStage->unePeriode($idPeriode);

$entreprise=$cControleurEntreprise->uneEntreprise($periode->getIdEntreprise());

$stagiaire=$cControleurStagiaire->unStagiaire($periode->getIdStagiaire());

$formateur=$cControleurFormateur->unFormateur($periode->getIdFormateur());

$tuteur=$cControleurTuteur->unTuteur($periode->getIdTuteur());
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>récapitulatif</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div >
    <h1>bienvenue</h1>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
