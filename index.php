<?php
    session_start();
    include "functions.php";
    include "db-functions.php";
    $products = findAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Micromania</title>
    </head>
    <body>
    <?php include "menu.php"; ?>

        <article id="catalogue">   
        <?php
            foreach($products as $product){
                ?>
                <article id="console">
                <h2><a href="product.php?id=<?= $product['id'] ?>"><?= $product['name'] ?></a></h2>
                <p>
        <?php 
            $result = substr($product['description'], 0, 50);
        ?>
                    <?= $result." ..." ?>
                </p>
                <a href="product.php?id=<?= $product['id'] ?>">
                    <img src="<?= $product['image']?>" alt="">
                </a>
                <p class="prix">
                    <?= $product['price']." €" ?>
                </p>
                <a href="traitement.php?action=addProd&id=<?= $product['id'] ?>">Ajouter au panier</a>
                </article>
                <?php
            }
            
            
        ?>
        </article> 
        
    </body>
</html>