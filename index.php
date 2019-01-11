<?php
session_start();

if (!isset($_SESSION['keep'])) {
    $_SESSION['keep'] = array(
        'lundi'=>'checkpoint',
        'mardi'=>'assessment',
        'mercredi'=>'sport',
    );
}
?>
<html>
<head>
    <title>Todo Liste</title>
    <link rel="stylesheet" href="google-keep.css">
    <link  href="http://fonts.googleapis.com/css?
family=Reenie+Beanie:regular"
           rel="stylesheet"
           type="text/css"
</head>
<body onload="randomize()">
<section id="container">
<form action="google-keep.php" class="form" method="post">
    <input class="form-control col-md-6 " type="text" name="title"  placeholder="Placer ton titre"/>
    <input class="form-control col-md-6 " type="text" name="note"  placeholder="Placer ton note"/>
    <input  class="btn " type="submit" name="Add"  value="Add"/>

</form>

    <div id="dofirst" ondrop="drop(event)" ondragover="allowDrop(event)" style="background:lightcyan ;border-radius:5px  ;color: #4e413f; font-size: 25px ; width:550px; height:250px;">To do first</div>
</section>
<div class="big" ondrop="drop(event)" ondragover="allowDrop(event)">
    <!--    debut de la boucle-->
        <?php foreach ($_SESSION['keep'] as $title=> $note) { ?>

                <!--    contenu de chaque iteration-->
                <div class="posts" id="post" draggable="true" ondragstart="drag(event)">

                    <h2> #<?= $title?></h2>

                    <p><?= $note?></p>

                    <button class="delete" onclick=deleteitem(event)>Remove</button>

                </div>

        <?php } ?>
    </div>
<script src="google-keep.js"></script>
</body>
</html>
