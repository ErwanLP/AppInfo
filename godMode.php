<?php
session_start();
if (isset($_SESSION['ID'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $idgm = $_SESSION['ID'];
    $sql = 'SELECT godMode FROM compte WHERE ID="' . $idgm.'"';
    //echo $sql;
    $result = $bdd->query($sql);
    $test = false;
    while ($data = $result->fetch()) {
        if ($data['godMode'] == 1) {
            $test = true;
        }
    }$result->closeCursor();

    if ($test) {



        include('start.php');
        ?>

        <h1 class="titregm"> Vous &ecirc;tes dans le mode administrateur: </h1>

        <!-- censuré topiuc message, bannir qqh, rajouter new, lancé avertissement , chnager le type de session, chnager les theme et sous theme, supprimer photo de profil? , 
        rajouter pub, supprimer un event, chnager thme event -->

        <div class="gmpageg">
            <h3>BANNIR:</h3>
            <p>Inscriver le pseudo de profil de la personne &agrave; bannir</p>
            <form method="post" action="traitementGodMode.php?action=ban">
                <input type="text" name="pseudo" />
                <input type="submit" value="Bannir" />
            </form>

            <h3>SUPPRIMER TOPIC</h3>
            <p>Inscriver le nom de topic &agrave; supprimer</p>
            <form method="post" action="traitementGodMode.php?action=topic">
                <input type="text" name="topic" />
                <input type="submit" value="Supprimer" />
            </form>

            <h3>SUPPRIMER MESSAGE</h3>
            <p>Inscriver le nom de profil de l'auteur et la date de post du message &agrave; supprimer</p>
            <form method="post" action="traitementGodMode.php?action=mes">
                <input type="text" name="author" />
                <input type="text" name="date" placeholder="2013-01-10 &agrave; 16:23:41" />
                <input type="submit" value="Supprimer" />
            </form>

            <?php // ne marche qu si idc=ido=idp  ?>


            <h3>SUPPRIMER EVENEMENT</h3>
            <p>Inscriver le nom de l'&eacute;v&eacute;nement &agrave; supprimer</p>
            <form method="post" action="traitementGodMode.php?action=event">
                <input type="text" name="nom" />
                <input type="submit" value="Supprimer" />
            </form>

            <h3>THEME ET SOUS THEME</h3>
            <p>Cr&eacute;er un th&egrave;me(sp&eacute;cifier le th&egrave;me en CamelCase et le th&egrave;me en anglais)</p>
            <form method="post" action="traitementGodMode.php?action=addth">
                <input type="text" name="theme" />
                <input type="text" name="themeCamel" />
                <input type="text" name="themeEn" />
                <input type="submit" value="Ajouter" />
            </form>
            <p>Créer un sous th&egrave;me (sp&eacute;cifier le sousth&egrave;me en CamelCase, le sousth&egrave;me en anglaisle et le th&egrave;me associ&eacute;)</p>
            <form method="post" action="traitementGodMode.php?action=addsth">
                <input type="text" name="stheme" />
                <input type="text" name="sthemeCamel" />
                <input type="text" name="sthemeEn" />
                <input type="text" name="theme" />
                <input type="submit" value="Ajouter" />
            </form>
            <p>Supprimer un th&egrave;me</p>
            <form method="post" action="traitementGodMode.php?action=supth">
                <input type="text" name="theme" />
                <input type="submit" value="Ajouter" />
            </form>
            <p>Supprimer un sous th&egrave;me</p>
            <form method="post" action="traitementGodMode.php?action=supsth">
                <input type="text" name="stheme" />
                <input type="submit" value="Ajouter" />
            </form>
        </div>

        <div class="gmpaged">
            
            <?php
            
            $sql = 'SELECT * FROM signalement';
            $result = $bdd->query($sql);
            while($data = $result->fetch()){
                $idMessage = $data['id_message'];
                $$idSignaleur = $data['id_signaleur'];
                $date = $data['data'];
                $idMotif = $data['id_motif'];
                
                
                
                
                
                
                
                
                
                
            }
            ?>
            

        </div>






    <?php
    } else {
        echo "SORTER D ICI !!!";
         header('Location:index.php');
    }
} else {
    "SORTER D ICI !!!";
    header('Location:index.php');
}
?>