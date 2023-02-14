<?php
    session_start();
    include_once("./src/data.inc.php");
?>
<?php 
    include_once "./src/header.inc.php"
?>

<body>
    <header>
        <h1>
            FIDELIO & COMPANY   </h1>
    </header>
    <main>
        <figure>
            <figcaption>
                <h2>
                    <span class="material-symbols-outlined" aria-hidden="true">
                        Edit  
                    </span>
Connexion                
                </h2>
            </figcaption>
        </figure>
      
        
            
                                        
                <fieldset>
                    <legend>Connexion</legend>
                    <form action="log.inc.php" méthode="post">
                        <label for="email">adresse mail </label>
                        <input type="email" name="mail" id="mail" placeholder="email@gmail.com" required aria-required="true">
                        <label for="mdp">mot de passe</label>
                        <input type="password" name="" id="psw" placeholder="Choisir votre mot de passe" required aria-required="true">
                        <input type="submit" value="ENVOYER">                    </form>
                </fieldset>
    </main>
    </body>
    <footer>
        <p>Merci votre contenu est ajouté : <a href="">Connectez vous</a> </p>
        <p>PHP-Rahma-2023</p>
    </footer>
</html>
