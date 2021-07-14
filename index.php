<?php
include "./class/Calculatrice.php";

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

$calculatrice = new Calculatrice();
$total = "";


if(isset($_POST['count'])){
    $total = $calculatrice->calcul($_POST['count']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo $total; ?></h1>
<div class="modules">
    <form action="/" method="POST" class="form-2 wrapper modules">
        <div class="grille">
            <div class="col-1-2">
                <input type="text" name="count" placeHolder="Entrez un calcul">
            </div>
            <input type="submit" class="bouton" value="Soumettre">
        </div>
    </form>
</div>

</body>
</html>

