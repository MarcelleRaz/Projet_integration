<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>B_system</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="shortcut icon" href="icones/Favicon.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    
    </head>
    <body>
        
        <header class="acceuil">
            <nav class="acceuil_navig">
                <label for="hamburger">&#9776;</label>
                <input type="checkbox" id="hamburger"/>
                <ul id="hamitem">
                    <li class="active"><a href="acceuil.php">Our studio</a></li>
                    <li><a href="index.php">Catégories de produit</a></li>
                    <li><a href="product.html">Designing for humans</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="acceuil_logo">
                <img src="icones/logo-noir.svg" alt="B_system">
            </div>
            <div class="acceuil_user-count">
                <div class="count">
                    <button id="compte-user">
                    <input type="checkbox" />
                    <ul id="user">
                        <li><a href="compte.php">Ouvrir mon compte</a></li>
                        <li><a href="inscription.php">S'inscrire</a></li>
                    </ul>
                        <span>Accès</span>
                        <img src="icones/avatar.svg" alt="B-System">
                    </button>
                </div>
                <div class="panier">
                    <button>
                    
                        <span>Panier</span>
                        <img src="icones/panier.svg" alt="B-System">
                    </button>
                </div>
            </div>
        </header>
        <div class= "acceuil_img">
            <img  src="<?php echo "images/Man_working.png" ?>">
        </div>
        <div class="social_media">
            <a href="https://www.behance.net/"><img src="icones/Behance.svg" alt="Behance"></a>
            <a href="https://www.youtube.com/?hl=FR"><img src="icones/Youtube.svg" alt="Youtube"></a>
            <a href="https://www.pinterest.com/"><img src="icones/Pinterest.svg" alt="Pinterest"></a>
            <a href="https://www.linkedin.com/"><img src="icones/Linkedin.svg" alt="Linkedin"></a>
            <a href="https://twitter.com/?lang=fr"><img class="twitter" src="icones/Twitter.svg" alt="Twitter"></a>
        </div>
        <div class="foot">
            <div class="signature">
                <img class="logo_noir" src="icones/logo-noir.svg" alt="B_system" width= "100" height="19">
            <p>Organic Design System. &#169; 2019 B_System. All rights reserved example. <br> Customer Service: 010 210 465 </p>
            </div>
        </div>
        
        <script src="main.js"></script>
    </body>
</html>