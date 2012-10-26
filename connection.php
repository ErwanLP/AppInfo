<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="index.css" />
        <link rel="shortcut icon" type="image/x-icon" href="img/icone.png" />
        <title>AppInfo</title>
    </head>
    <body>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div id="titreacticle">
                    <h2><span> Connection</span></h2>
                </div>
                <div id="pageinscription">

                    <form method="post" action="traitementConnection.php">

                            <label for ="nomDeCompte">Nom de compte:</label>
                            <input type="text" name="nomDeCompte" id="nomDeCompte"  size="30" maxlength="10" autofocus required/><br/>

                            <label for="mdp">Votre mot de passe :</label>
                            <input type="password" name="mdp" id="mdp" required/><br/>
    
    
                        <input type="submit" value="Envoyer" />
                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>