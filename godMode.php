<h1> Vous etes dans le mode administrateur: </h1>

<!-- censuré topiuc message, bannir qqh, rajouter new, lancé avertissement , chnager le type de session, chnager les theme et sous theme, supprimer photo de profil? , 
rajouter pub, supprimer un event, chnager thme event -->


<h3>BANNIR:</h3>
<p>inscriver le pseudo de profil de la personne à bannir</p>
<form method="post" action="traitementGodMode.php?action=ban">
    <input type="text" name="pseudo" />
    <input type="submit" value="Bannir" /><br/>
    <input type="radio" name="choix" value="profil" checked>Supprimer uniquement le profil<br/>
    <input type="radio" name="choix" value="compte">Supprimer le compte
</form>

<h3>SUPPRIMER TOPIC</h3>
<p>inscriver le nom de topic à supprimer</p>
<form method="post" action="traitementGodMode.php?action=topic">
    <input type="text" name="topic" />
    <input type="submit" value="Supprimer" />
</form>

<h3>SUPPRIMER MESSAGE</h3>
<p>inscriver le nom de profil du l'auteur et la date de post du message du message à supprimer</p>
<form method="post" action="traitementGodMode.php?action=mes">
    <input type="text" name="author" />
    <input type="text" name="date" placeholder="2013-01-10 &agrave; 16:23:41" />
    <input type="submit" value="Supprimer" />
</form>

<?php // ne marche qu si idc=ido=idp ?>


<h3>SUPPRIMER EVENEMENT</h3>
<p>inscriver le nom de l'evenement à supprimer</p>
<form method="post" action="traitementGodMode.php?action=event">
    <input type="text" name="nom" />
    <input type="submit" value="Supprimer" />
</form>

<h3>THEME ET SOUS THEME</h3>
<p>créer un theme</p>
<form method="post" action="traitementGodMode.php?action=addth">
    <input type="text" name="theme" />
    <input type="submit" value="Ajouter" />
</form>
<p>créer un sous theme (specifier le theme)</p>
<form method="post" action="traitementGodMode.php?action=addsth">
    <input type="text" name="stheme" />
    <input type="text" name="theme" />
    <input type="submit" value="Ajouter" />
</form>
<p>supprimer un theme</p>
<form method="post" action="traitementGodMode.php?action=supth">
    <input type="text" name="theme" />
    <input type="submit" value="Ajouter" />
</form>
<p>supprimer un sous theme</p>
<form method="post" action="traitementGodMode.php?action=supsth">
    <input type="text" name="stheme" />
    <input type="submit" value="Ajouter" />
</form>

