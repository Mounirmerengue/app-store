<?php
    session_start();
    include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">

        <title>Ajout produit</title>
    </head>
    <body>
        <?php include "menu.php"; ?>
        <div class="blockform">
            <h1>Ajouter un produit</h1>
            <form action="traitement.php?action=addDB" method="post">
                <p>
                    <label>
                        Nom du produit :
                        <input type="text" name="name" cols="30">
                    </label>
                </p>
                <p>
                    <label>
                        Description :
                        <textarea name="description" id="descr" cols="22" rows="5"></textarea>
                    </label>
                </p>
                <p>
                    <label>
                        Prix du produit :
                        <input type="number" step="any" name="price" cols="30">
                    </label>
                </p>
                <p>
                <label>
                        Image du produit :
                        <input type="text" name="image" cols="30">
                    </label>
                </p>
                
                <p>
                    <input class="addCart" type="submit" name="submit" value="Ajouter le produit">
                </p>
            </form>
        </div>
    </body>
</html>