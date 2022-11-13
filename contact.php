<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Les Chambres d'Isa</title>
        
        <meta name="description" content="Site vitrine des Chambres d'Isa" />
        
        <meta name="keywords" content="Isa, Chambres" />

        <meta name="author" content="Vincent Guéneuc" />

        <link rel="icon" type="image/png" sizes="16x16" href="images/logoRond.png">

        <!-- Liens vers le fichier CSS de Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
	</head>

    <body>
    <header id="haut">
            <div class="container-fluid">
                <nav class="d-flex justify-content-around align-center">
                    <img class="col-1" src="images/icon.png" alt="logo">
                    <button type="button" class="btn btn-lg btn-warning" onclick="window.location.href='index.html'">Accueil</button>
                    <button type="button" class="btn btn-warning btn-lg" onclick="window.location.href='chambres.html'">Les Chambres</button>
                    <button type="button" class="btn btn-warning btn-lg" onclick="window.location.href='visit.html'">Visiter autour</button>
                    <button type="button" class="btn btn-warning btn-lg" onclick="window.location.href='contact.php'">Les Hôtes</button>
                </nav>
            </div>
        </header>

        <main>
            <h1>~ Qui sommes-nous ? ~</h1>
            <div class="container-fluid">
                <div class="row">
                    <img class="col-4" src="images/couple.jpg" alt="">
                    <article class="col">
                        <?php
                            $annees = date('Y') - 1988;
                            echo "<p>Nous sommes Isabelle et Louis-Marie Charrier, un couple d'exploitant agricole depuis $annees années. Isabelle est disponible pour la contacter pour réservation ou toute autre information. Elle saura vous recevoir comme il se doit avec des produits maisons.</p>";
                                
                        ?>
                    </article>
                </div>
                <hr>
                <article class="row">
                    <div class="col-6">
                        <h2>La ferme</h2>
                        <p>Ferme familiale d'élevage fondée au 18e siècle, on y trouve chèvres vaches, canards, lapins, etc. </p>
                    </div>
                    <div class="col-6">
                        <img src="images/ferme.jpg" alt="Ferme">
                    </div>
                </article>
                <hr>
                <article>
                    <h2 id="contact">Contact</h2>
                    <ul>
                        <li>Tel : 06 23 87 56 17</li>
                        <li>Mail : les.chambres.isa@gmail.com</a></li>
                    </ul>
                </article>
            </div>
        </main>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <p>© 2022 - Les Chambres d'Isa</p>
                    </div>
                    <div class="col">
                        <p>Site réalisé par Vincent Guéneuc (<a href="https://vinzzz35.github.io/" target="_blank">site perso</a>)</p>
                    </div>
                    <div class="col">
                        <p><a href="#haut">Haut de page</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    
    <!-- JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</html>