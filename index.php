<?php
if(isset($_POST['montant'])){
    $montant = $_POST['montant'];
    file_put_contents("database/db.txt", $montant . "\n" , FILE_APPEND);
}
$ventes = file("database/db.txt", FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de caisse</title>
</head>
<body>
    <h2>Ajouter une vente</h2>
    <form action="" method="post">
        <input type="number" name="montant" required="">
        <button type="submit">Ajouter</button>
    </form>
    <h2>Liste des ventes</h2>
    <ul>
        <?php
        $total = 0;
        foreach ($ventes as $vente){
            echo"<li>$vente MRU</li>";
            $total += $vente; 
        }
        ?>
    </ul>
    <h3>Total : <?php echo $total; ?> MRU</h3>
</body>
</html>