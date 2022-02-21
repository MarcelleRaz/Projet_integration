<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>B_system</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="shortcut icon" href="icones/Favicon.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>@import url(product-image.css);</style>
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
        <main>
            <div class="titre"> 
                <h1>Catégorie de produits</h1>
                <div class="breadcrumb"><a href="acceuil.php" class="first">Acceuil</a><span class="sep"> &gt; </span><strong class="on">Catégorie de produits</strong></div>
                <div class="breadcrumb2"><a href="acceuil.php" class="first">Acceuil</a><span class="sep"> &gt; </span><a href="http://localhost/projet-integration/" class="first">Catégorie de produits</a><span class="sep"> &gt; </span><strong class="on">Produit</strong></div>
            </div>
            <section id="produit">
                <div class="full-img">
                    <img class="displayed-img" src="images/husky.jpg" alt="">
                </div>
                <div class="thumb-bar">
                    <img src="images/husky.jpg" alt="Husky">
                    <img src="images/machine-ecrire.jpg" alt="Machine à écrire">
                    <img src="images/montagne.jpg" alt="Montagne">
                    <img src="images/panne.jpg" alt="Panne">
                    <img src="images/pont.jpg" alt="Pont">
                    <img src="images/rive.jpg" alt="Rive">
                </div>
                <div class="description">
                    <h2 class="numProduit">Produit #1</h2> 
                    <p class="prix">$ 60.99</p>
                    <p class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare ullamcorper pellentesque. Praesent a augue mauris. Nullam dictum, est non dapibus malesuada, lacus leo cursus nulla, in pellentesque diam nisi nec leo. Proin eu enim non quam lobortis sollicitudin sed a tellus.</p>
                    <button class="add">Ajouter au panier</button>
                </div>
            </section>
            <section class="conteneurImage">
                <div class="images">
                    <div class="image">
                        <img src="images/husky.jpg" alt="Husky">
                        <h2 class="numProduit">Produit #1</h2> 
                        <p class="prix">$ 60.99</p>
                        <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare ullamcorper pellentesque. Praesent a augue mauris. Nullam dictum, est non dapibus malesuada, lacus leo cursus nulla, in pellentesque diam nisi nec leo. Proin eu enim non quam lobortis sollicitudin sed a tellus.</p>
                    </div>
                    <div class="image">
                        <img src="images/machine-ecrire.jpg" alt="Machine à écrire">
                        <h2 class="numProduit">Produit #2</h2> 
                        <p class="prix">$ 256.99</p>
                        <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare ullamcorper pellentesque. Praesent a augue mauris. Nullam dictum, est non dapibus malesuada, lacus leo cursus nulla, in pellentesque diam nisi nec leo. Proin eu enim non quam lobortis sollicitudin sed a tellus.</p>
                    </div>
                    <div class="image">
                        <img src="images/montagne.jpg" alt="Montagne">
                        <h2 class="numProduit">Produit #3</h2> 
                        <p class="prix">$ 256.99</p>
                        <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare ullamcorper pellentesque. Praesent a augue mauris. Nullam dictum, est non dapibus malesuada, lacus leo cursus nulla, in pellentesque diam nisi nec leo. Proin eu enim non quam lobortis sollicitudin sed a tellus.</p>
                    </div>
                </div>
                <div class="images">
                    <div class="image">
                        <img src="images/panne.jpg" alt="Panne">
                        <h2 class="numProduit">Produit #4</h2> 
                        <p class="prix">$ 70.99</p>
                        <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare ullamcorper pellentesque. Praesent a augue mauris. Nullam dictum, est non dapibus malesuada, lacus leo cursus nulla, in pellentesque diam nisi nec leo. Proin eu enim non quam lobortis sollicitudin sed a tellus.</p>
                    </div>
                    <div class="image">
                        <img src="images/pont.jpg" alt="Pont">
                        <h2 class="numProduit">Produit #5</h2> 
                        <p class="prix">$ 78.99</p>
                        <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare ullamcorper pellentesque. Praesent a augue mauris. Nullam dictum, est non dapibus malesuada, lacus leo cursus nulla, in pellentesque diam nisi nec leo. Proin eu enim non quam lobortis sollicitudin sed a tellus.</p>
                    </div>
                    <div class="image">
                        <img src="images/rive.jpg" alt="Rive">
                        <h2 class="numProduit">Produit #6</h2> 
                        <p class="prix">$ 106.99</p>
                        <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare ullamcorper pellentesque. Praesent a augue mauris. Nullam dictum, est non dapibus malesuada, lacus leo cursus nulla, in pellentesque diam nisi nec leo. Proin eu enim non quam lobortis sollicitudin sed a tellus.</p>
                    </div>
                </div>
            </section>
            <div class="autresProduits">
                <button>Voir plus de produits</button>
            </div>
        </main>
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