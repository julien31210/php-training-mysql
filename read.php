<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Randonnées</title>
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <h1>Liste des randonnées</h1>
  <table class="table table-bordered">
    <tr>
      <th>Nom</th>
      <th>Difficulté</th>
      <th>Distance</th>
      <th>Durée</th>
      <th>Dénivelé</th>
    </tr>

    <?php  
    require_once dirname(__FILE__).'/vendor/autoload.php';
    ORM::configure('mysql:host=localhost;dbname=reunion_island;charset=utf8');
    ORM::configure('username', 'root');
    ORM::configure('password', 'root');

    $randos = ORM::for_table('hiking')->find_many();
    foreach ($randos as $key => $value) {
      echo "<tr>";
      echo "<td>".$value->name."</td>";
      echo "<td>".$value->difficulty."</td>";
      echo "<td>".$value->distance."</td>";
      echo "<td>".$value->duration."</td>";
      echo "<td>".$value->height_difference."</td>";
      echo "</tr>";
    }
    ?>
  </table>
  <a href="create.php">Créer une rando</a>
</body>
</html>
