<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try {
  $dbh = new PDO($dsn, $user, $pass);
  
  $query_result = $dbh->query('SELECT * FROM test_comments');
  $sth = $dbh->prepare('INSERT INTO test_comments (name, text) VALUES (?, ?)');
  $sth_select = $dbh->prepare('SELECT * FROM test_comments WHERE name = ?');

  $dbh = null;
} catch (PDOException $e) {
  print "DB ERROR:" . $e->getMessage() . "<br/>";
  die();
}
?>

<?php
  $name = "John";
  $sth_select->execute(array($name));
  $prepare_result = $sth_select->fetchAll();
  foreach($prepare_result as $row) {
    print $row["name"] . ": " . $row["text"] . "<br/>";
  }
  $sth_select->execute(array($name));
?>