<?php
require "template/header.php";
        session_start();

?>

<h2>Liste des bénévoles : </h2>
<!-- <form action="" method="post">
  <label for="select">Trier par : </label>
  <select name="order" id="select">
      <option value="">selectionner</option>
      <option  value="age">age</option>
      <option  value="name">nom</option>
      <option  value="city">ville</option>
      <option  value="disponibility">disponibilité</option>
  </select>
  <input type="serch" name="city" id="ville" placeholder="Ville">

  <input type="submit" value="OK">
</form> -->
<a href="insertUser" class="btn btn-primary mt-5 mb-5 mr-5">Ajouter un bénévole</a>
<a href="listeMsg" class="btn btn-primary m-5">Voir tout les messages</a>
<a <?php setHref("logout");  ?> class="btn btn-danger mt-5 mb-5 ml-5">Se deconnecter</a>

<table class="table text">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">firstname</th>
      <th scope="col">Status</th>
      <th scope="col">age</th>
      <th scope="col">comment</th>
      <th scope="col">disponibility</th>
      <th scope="col">street</th>
      <th scope="col">city</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach ($volonteers as $key => $volonteer) {
    ?>

    <tr>
      <th scope="row"><?php echo $volonteer["ID"]; ?></th>
      <td><?php echo $volonteer["name"]; ?></td>
      <td><?php echo $volonteer["firstname"]; ?></td>
      <td><?php echo $volonteer["status"]; ?></td>
      <td><?php echo $volonteer["age"]; ?></td>
      <td><?php echo $volonteer["comment"]; ?></td>
      <td><?php echo $volonteer["disponibility"]; ?></td>
      <td><?php echo $volonteer["street"]; ?></td>
      <td><?php echo $volonteer["city"]; ?></td>
      <td>
      <a href="updateUser?id=<?php echo $volonteer['ID']; ?>" class="btn btn-success">Modifier</a>
      <a href="deleteUser?id=<?php echo $volonteer['ID']; ?>" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>

<?php
require "template/footer.php";
?>