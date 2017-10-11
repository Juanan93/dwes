<?php
    $nom = $_POST['nom'];
    $edat = $_POST['edat'];
    $email = $_POST['email'];
    $seleccion = $_POST['gender'];
    $aficiones = $_POST['aficions'];
?>
<html>
  <body>
    <table>
      <tr>
        <td>Nombre:<?php echo $nom; ?></td>
        <td>Edat:<?php echo $edat; ?></td>
        <td>Email:<?php echo $email; ?></td>
        <td>Sexe:<?php echo $seleccion; ?></td>
        <td>Aficion:<?php echo $aficones; ?></td>
      </tr>
    </table>
  </body>
</html>
