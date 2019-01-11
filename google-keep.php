<?php
session_start();
$title=$_POST["title"];
$note=$_POST["note"];
if (key_exists('reset', $_POST)) {

    unset( $_SESSION['keep']);
    header("Location: index.php");
    die;

}
if (!isset($_SESSION['keep'])){
     echo "Session innexistante !!!";
}
else {
//sinon si existe
    $_SESSION['keep'][$title] = $note;
// sinon ajout et message d'ajout et redirection vers index.php
}
header("location:index.php");



