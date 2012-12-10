<?php
$titre='Organisation';
include('start.php');
include('bddForum.php');
?>
  <body>
        <table class="organisation">
            <tr>
              <th>titre des sujets</th>
              <th>createur</th>
              <th>date de creation</th>
              <th>dernier message</th>
        
            </tr>
            <tr>
              <td><a href="nouveauCommentaire.php">bar</a></td>
              <td>Bolzastreet</td>
              <td>12/12/12</td>
              <td>la vie est un jeu</td>
            </tr>
    </table>
      <?php include('footer.php');?>
  </body>
</html>