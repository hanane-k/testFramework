<a href="listeUser.php" class="mx-5">Retour à la liste des volontaires</a>

<form action="" methode="post">
  <div class="form-group">
    <label for="destinataire">Destinataire</label>
    <!-- (ndir l'ID ta3 li nrepondilo) -->
    <input type="text" class="form-control" id="destinataire" name="recipient" value="">
  </div>
  <div class="form-group">
    <label for="objet">Objet</label>
    <input type="text" class="form-control" name="object" id="objet" placeholder="Objet">
  </div>
  <div class="form-group">
    <label for="msg">Message</label>
    <input type="text" class="form-control" name="msg" id="msg" placeholder="Votre message">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>