<?php
//Voici la démarche utilisée pour essayer de mettre en place la modification, malheureusement je n'ai pas réussi...
// ouverture de la connexion
$dsn = 'mysql:host=localhost;dbname=partiel_php';
$username = 'root';
$password = 'root';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
$db = new PDO($dsn, $username, $password, $options);
// modification des données
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // création de la requête
  $sql = "UPDATE partiel_php SET nom = :andre, prenom = prenom age = :age WHERE id = :'1'";
  $statement = $db->prepare($sql);
  // envoi des requêtes
  if(isset($_POST['id']))
  if(is_array($_POST['id'])
  foreach ($_POST['id'] as $id) {
    $nom = $_POST['nom'][$id] ?? 'nom';
    $prenom = $_POST['prenom'][$id] ?? 'prenom';
    $age = $_POST['age'][$id] ?? 'age';
    $statement->execute(compact('id', 'nom', 'prenom', 'age'));
  }
}
// création de la requête
$sql = "SELECT * FROM partiel_php";
// envoi de la requête
$statement = $db->prepare($sql);
$statement->execute();
$listeAuteurs = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<form action='' method='post'>
  <ul>
    <?php foreach ($_POST as $id) { ?>
      <li>
        <input type="hidden" value="<?= $id->id; ?>" name="id[]" />
        <input type="text" value="<?= $id->nom; ?>" name="nom[<?= $auteur->id; ?>]" />
        <input type="text" value="<?= $id->prenom; ?>" name="prenom[<?= $auteur->id; ?>]" />
        <input type="text" value="<?= $id->age; ?>" name="age[<?= $auteur->id; ?>]" />
      </li>
    <?php } ?>
  </ul>
  <div><input type='submit' value='modifier' /></div>
</form>