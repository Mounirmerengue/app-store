<?php
    session_start();
    include "functions.php";
    include "db-functions.php";
    $product = findOneByID($_GET["id"]);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">

        <title>Micromania</title>
    </head>
    <body>
    <?php include "menu.php"; ?>
        
        <article id="present">
            <div class="menu-retour">
                <a id="return" href="index.php"><i class="fas fa-undo-alt"></i>Retour</a>
            </div>
            <h2><?= $product['name'] ?></h2>
            <p>
   
                <?= $product['description'] ?>
            </p>
            <p>
                <img src="<?= $product['image']?>" alt="">
            </p>
            <p class="prix">
                <?= $product['price']."€" ?>
            </p>
            <a class="addCart" href="traitement.php?action=addProd&id=<?= $product['id'] ?>">Ajouter au panier</a>
            
       
        </article>
        
    

       
        
    </body>
</html>