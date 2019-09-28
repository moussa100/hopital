<?php
if (isset($_POST['enregistrer']))
{
  $Jour=$_POST['jour'];  
  $Matricule=$_POST['mat'];
  $Prenom =$_POST['prenom'];
  $Nom = $_POST['nom'];
  $Identifiant = $_POST['idM'];
  $Prenom_med=$_POST['prenomM'];
  $Nom_med=$_POST['nomM'];
  $Numero_RV=$_POST['numero'];
  $Date_RV=$_POST['date'];
  $Heur_RV=$_POST['heure'];
  $Duree=$_POST['duree'];
}
?>
<!doctype html>
<html lang="fr">  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width,initial-scale-1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>GESTION DE RENDEZ-VOUS</title>
  <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin= "anonymous" > 
</head>
<body>
<div class="p-3 mb-5 bg-primary text-white"><h1>HOPITAL REGIONAL</h1><p>GESTION DES RENDEZ-VOUS</p></div>
<form>
    <div class="container">
        <div class="row">
            <div class="col">
            <h5>Rendez-vous</h5>
                <label for="id_rv">Numero</label><br>
                <input type="text" name="numero" placeholder="EM-0001"><br>
                <label for="date">Date de Rendez-vous</label><br>
                <input type="text" name="date" placeholder="jj/mm/aa"><br>
                <label for="heure">Heure de Rendez-vous</label><br>
                <input type="text" name="heure"placeholder="--:--"><br>
                <label for="duree">Durée de Rendez-vous</label><br>
                <input type="text" name="duree" placeholder="15mn"><br>  
            </div>
            <div class="col">
            <h5>Patient</h5>
                    <label for="matricule">Matricule</label><br>
                    <input type="text" name="mat" placeholder="OM-0001"><br>
                    <label for="prenom">Prenom</label><br>
                    <input type="text" name="prenom"><br>
                    <label for="nom">Nom</label><br>  
                    <input type="text" name="nom"><br>
            </div>
            <div class="col">
            <h5>Medecin</h5>
                <label for="id_medecin">Identifiant</label><br>   
                <input type="text" name="idM" placeholder="AM-0001"><br>
                <label for="prenom">Prenom_medecin</label><br>
                <input type="text" name="prenomM"><br>
                <label for="nom">Nom_medecin</label><br>
                <input type="text" name="nomM"><br>
                <label for="domaine">Domaine</label><br>
                <input type="text" name="domaine"><br> 
            </div>
            <div class="col-sm-1">    
                <input type="submit" name="enregistrer" value="Ajouter"><br>
                <input type="submit" name="enregistrer" value="Fermer"><br>
            </div>
            <div class="col-sm-1"> 
                <input type="submit" name="enregistrer" value="Rechercher">
                <input type="submit" name="enregistrer" value="  Supprimer  ">
            </div> 
        </div>
    </div>
</form>
<script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script> 
<script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script> 
<script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script> 
</body>
</html>
