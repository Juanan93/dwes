<?php
    $nom = $_POST['nom'];
    $edat = $_POST['edat'];
    $email = $_POST['email'];
?>
<html>
  <body>
    <table>
      <tr>
        <th>Nombre:<?php echo $nom; ?></th>
        <th>Edat:<?php echo $edat; ?></th>
        <th>Email:<?php echo $email; ?></th>
      </tr>
    </table>
  </body>
</html>
