<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylepc.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
</head>
<body>
   
    <div>
        <header>
            <h1>Nom entreprise</h1>
        </header>
       

        <div id="container">
        <header>
            <h2>Bienvenue dans votre espace client ...</h2>
        </header>
        <h3>  Veuillez saisir vos identifiant et mot de passe.</h3>
        
        <div id="input">
            <form action="" method="post">
                <input type="text" name="Ndossier" placeholder="Adresse mail ou identifiant"><br>
                <input type="password" name="mdp" placeholder="Mot de passe"><br><br>
                <?php if(isset($erreur1)) echo "<div class='erreur'>$erreur1</div>";?>
                <?php if(isset($erreur2)) echo "<div class='erreur'>$erreur2</div>";?>
                <input class="bout" type="submit" value="Se connecter" name="bout"><br><br><br>
                <a href="http://">Mot de passe oublié ?</a><br><br>
                Pas encore client ? <a href="http://">Créer un compte</a>
            </form>
        </div>
    </div>
    <br><br><br><br><br>
    <footer>
         <a href="http://">CGUV</a> &nbsp;&nbsp;&nbsp;
         <a href="http://">Actualités réglementaires</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://">Service clientèle</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://">Politique de confidentialité</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://">Politique de cookies</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://">Mentions légales</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://">Plan du site</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://">FAQ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         3, rue Gutenberg, Choisy le roi, 94600
    </footer>
</body>
</html>