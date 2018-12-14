<a href="listeUser.php" class="mx-5">Retour à la liste des volontaires</a>

<form method="post" action="" class="mt-5">
<div class="form-group col-10 col-md-8 col-lg-6">
    <label for="name">Nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter le nom">
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="firstname">Prenom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter le prenom">
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter le mot de passe">
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="status">Status</label>
    <input type="text" class="form-control" name="status" id="status" placeholder="Enter le status">
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Enter l'age">
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="comment">Commentaire</label>
    <input type="text" class="form-control" name="comment" id="comment" placeholder="Commentaire">
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="disponibility">Disponibilité</label>
    <select class="form-control" name="disponibility" id="disponibility">
        <option value="1" selected>Disponibile</option>
        <option value="0">Indisponibile</option>
    </select>
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="street">Rue</label>
    <input type="text" class="form-control" name="street" id="street" placeholder="Enter le Rue">
  </div>
  <div class="form-group col-10 col-md-8 col-lg-6">
    <label for="city">Ville</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Enter le Ville">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>