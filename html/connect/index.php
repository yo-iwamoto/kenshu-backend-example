<?php

try {
  $pdo = new PDO(
    'mysql:host=db;dbname=test_db;charset=utf8;',
    'test_user',
    'test_password',
  );

  $statement = $pdo -> prepare('SELECT * FROM posts;');

  $result = $statement -> execute();
  echo $result;
} catch (PDOException $e) {
  echo $e;
  echo $e -> getMessage();
}
