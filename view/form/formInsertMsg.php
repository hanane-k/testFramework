<a <?php setHref("listeMsg");  ?> class="mx-5">Retour à la liste des messages</a>
<a <?php setHref("logout");  ?> class="btn btn-danger mt-5 mb-5 ml-5">Se deconnecter</a>


<form action="" method="post" class="mt-5">
  <div class="form-group col-11 col-md-9 col-lg-8">
    <label for="destinataire">Destinataire</label>
    <input type="text" class="form-control" id="destinataire" name="recipient" placeholder="Enter destinataire">
  </div>
  <div class="form-group col-11 col-md-9 col-lg-8">
    <label for="objet">Objet</label>
    <input type="text" class="form-control" name="object" id="objet" placeholder="Objet">
  </div>
  <div class="form-group col-11 col-md-9 col-lg-8">
    <label for="msg">Message</label>
    <textarea class="form-control" name="msg" id="msg" placeholder="Votre message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>