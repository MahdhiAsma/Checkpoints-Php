<?php
 if(key_exists( 'client' , $_COOKIE) ){
     $CSS_file = 'special';
 }
 else {
     setcookie('client', 'oui', time() + 60);
     // time()+60*60*24*365 Pour le cas d'une année.
     $CSS_file = 'default';

 }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies PHP</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo "$CSS_file.css"; ?>" />
</head>
<body>
<h1>Poo-cookies</h1>
<p>

    Pram pram
</p>
</body>
</html>

