<header>
    <nav id="menu_bar">
        <a href="index.php"><i class="fas fa-home"></i></a>
        <a class="cart-link" href="recap.php"><i class="fas fa-shopping-cart"></i><span class="badge"><?= getFullQtt() ?></span></a>
        <a href="admin.php"><i class="fas fa-users-cog"></i></a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </nav>
    <?= getMessage() ?>
    
</header>
