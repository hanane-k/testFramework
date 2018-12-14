<?php
require "template/header.php";
session_start();
$userId = $_SESSION["user"]["ID"];
$message = getMessages($userId);

?>
<a href="listeUser" class="btn btn-primary mt-5 mb-5 mr-5">Les volontaire</a>
<a href="insertMsg" class="btn btn-primary mt-5 mb-5 ml-5 mr-5">Nouveau message</a>
<a <?php setHref("logout");  ?> class="btn btn-danger mt-5 mb-5 ml-5">Se deconnecter</a>


<table class="table text">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">object</th>
      <th scope="col">msg</th>
      <th scope="col">date</th>
      <th scope="col">recipient</th>
      <th scope="col">sender</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    // var_dump($volonteer);
        foreach ($message as $key => $value) {
    ?>

    <tr>
      <th scope="row"><?php echo $value["ID"]; ?></th>
      <td><?php echo $value["object"]; ?></td>
      <td><?php echo $value["msg"]; ?></td>
      <td><?php echo $value["date"]; ?></td>
      <?php
        // foreach ($volonteers as $key => $volonteer) {
      ?>
          <td><?php echo $_SESSION["user"]["name"]; ?></td>
          <td><?php echo $value["name"]; ?></td>
      <?php
        // }
      ?>
      <td>
      <a href="?id=<?php echo $value['ID']; ?>" class="btn btn-success">Répondre</a>
      <a href="deleteMsg?id=<?php echo $value['ID']; ?>" class="btn btn-danger">Supprimer</a>
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