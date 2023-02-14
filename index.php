<?php
    session_start();
?>
<?php
    include_once "./src/header.inc.php";
    
?>
<body>
    <header>
        <h1>
            Fidelio &amp; company
        </h1>
               &#9998;
            </span>
                Inscription rapide 
            </h2>
            <form action="!index.php" method="post">
            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" aria-required="true" autofocus>
            <label for="password">Mot de passe</label>
            <input type="password" name="psw" id="password" placeholder="Password">
            <input type="submit" value="Envoyer">
>            </form>
        </section>
        <?php
            //inclusion
            include_once "./src/inscription_user.inc.php";
        ?>

    </main>

    <?php 
        include_once "./src/footer.inc.php"
        
    ?>
</body>
</html>