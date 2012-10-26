<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="index.css" />
        <link rel="shortcut icon" type="image/x-icon" href="img/icone.png" />
        <title>AppInfo</title>
    </head>
    <body>

        <?php include("BDD.php"); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div id="titreacticle">
                    <h2><span> News</span></h2>
                </div>
                <div id="pageBDD">


                    <?php
                    $result = $bdd->query('SELECT * FROM participant WHERE 1');
                    while ($data = $result->fetch()) {
                        echo $data['nom'];
                    }
                    $result->closeCursor();
                    ?>
                </div>
            </article>
<?php include("aside.php"); ?>
        </section>

<?php include("footer.php"); ?>


    </body>
</html>