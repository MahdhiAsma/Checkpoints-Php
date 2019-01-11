<?php
session_start();

/* On vérifie si l'internaute a demandé le retour à zéro. */
if (key_exists('raz', $_POST)) {
    /* On détruit la session et on redirige vers la page en GET */
    session_destroy();
    header("Location: session.php", true, 303);
    die;
    /* Attention, session_destroy() ne supprime pas les variables de session
     * pour l'exécution courante du script !
     * Pour éliminer toutes les variables de session, on peut aussi faire
     *         $_SESSION = array();
     */
}

if (key_exists('visites', $_SESSION) &&
    key_exists('heure', $_SESSION)) {
    /* on a déjà vu cette personne */
    $_SESSION['visites']++;
    $message = 'You visited this page '.$_SESSION['visites'].' times after'.$_SESSION['heure'].'.';
} else {
    /* premier accès */
    $_SESSION['visites'] = 0;
    $_SESSION['heure'] = date("H:i:s");
    $message = 'This is your first visit! Welcome.';
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Counting Visits</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 style="color: aquamarine">Compteur de visites</h1>
<p><?php echo $message; ?></p>
<p><form method="POST"><button  class="btn
" name="raz">R A Z</button></form></p>
</body>
</html>