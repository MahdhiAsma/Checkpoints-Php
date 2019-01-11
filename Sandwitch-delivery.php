
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sandwitch Delivery</title>
    <link rel="stylesheet" href="sandwitch-delivery.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >
<div class="title"> Sandwich Command :</div>

<form class="form " action="deliverytreatement.php" method="post" enctype="multipart/form-data">
    <label> Nom:</label>
    <input class="form-control col-md-6"  type="text" name="name"  placeholder="Nom"/>
    <br/>
    <label> Prenom:</label>
    <input class="form-control col-md-6 "  type="text" name="prenom"  placeholder="Prenom"/>
    <br/>
    <label> Nombre de Sandwichs:</label>
    <input class="form-control col-md-6" type="text" name="nombre-sandwitchs"  placeholder="nombre de sandwichs"/>
    <br/>
    <label> Adresse:</label>
    <textarea name="address" class="form-control col-md-6 " >
    </textarea>
    <br/>
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
    <input type="file" name="monfichier" />

    <br>
    <label> Selectionner le type de sandwich:</label>
    <select class="form-control col-md-6"  name="Type-sandwitchs">
        <option> Viande</option>
        <option>Poulet</option>
        <option> Escalope</option>
    </select>
    <br/>
    <input type="checkbox" id="harissa" name="harissa" value="harissa">
    <label for="harissa">Harissa</label>
    <br/>
    <input type="checkbox" id="salade" name="salade" value="salade">
    <label for="salade">Salade</label>
    <br/>
    <input type="checkbox" id="mayo" name="mayo" value="mayo">
    <label for="Mayo">mayo</label>
    <br/>
    <input  class="btn btn-success" type="submit" name="submit"  value="submit"/>

</form>

</body>
</html>
</html>