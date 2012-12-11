<?php
$titre='Event';
include('start.php');
include('bddForum.php');
?>
<body>
<table class="event">
    <tr>
        <th>titre des sujets</th>
        <th>createur</th>
        <th>date de creation</th>
        <th>dernier message</th>
        
    </tr>
    <tr>
        <td><a href="nouveauCommentaire.php">bar</a></td>
        <td>erwan</td>
        <td>12/12/12</td>
        <td>j'aime le rugby</td>
    </tr>
</table>
    <?php include('../footer.php');?>
</body>
</html>