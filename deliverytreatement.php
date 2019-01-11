<?php
if(isset($_FILES['file_cin']))
{
$dossier = 'upload/';
$info=pathinfo($_FILES['monfichier']['name']);

$fichier = uniqid().".".$info['extension'];
// ['tmp_name'] Nom temporaire donné par serveur ou fichier charger

if(move_uploaded_file($_FILES['monfichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
{
    echo 'Upload effectué avec succès !'.$fichier;
}
else //Sinon (la fonction renvoie FALSE).
{
    echo 'Echec de l\'upload !';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sandwitch Delivery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<a href="#" class="list-group-item list-group-item-action list-group-item-primary" style="text-align: center; "><?php

    echo "Mme/Mr ". $_POST['name'].$_POST['prenom']." votre commande de :" ;
    echo $_POST['nombre-sandwitchs']." Sandwitchs est bien saisie.<br>";?></a>
   <a href="#" class="list-group-item list-group-item-action list-group-item-warning" style="text-align: center;"> <?php echo " Type: ".$_POST['Type-sandwitchs']; ?></a>
<a href="#" class="list-group-item list-group-item-action list-group-item-success" style="text-align: center;"><?php
    if (isset($_POST['harissa'])){
        echo " Supplement: ".$_POST['harissa'];}
    elseif (isset($_POST['salade'])){
        echo " Supplement: ".$_POST['salade'];
    }
    elseif (isset($_POST['mayo'])){
        echo " Supplement: ".$_POST['mayo'];
    }
    else {
        echo " without supplements. ";
    } ?></a>

<a href="#" class="list-group-item list-group-item-action list-group-item-danger" style="text-align: center;"><?php
    if ($_POST['nombre-sandwitchs']<10){
        $x=$_POST['nombre-sandwitchs']*4;
        echo " Prix Total:".$x;}
    else
    {$x=$_POST['nombre-sandwitchs']*4-$_POST['nombre-sandwitchs']*4/10;
        echo " Prix Total:".$x;}?></a>
 </body>

</html>