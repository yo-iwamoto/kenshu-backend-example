<?php

try {
  $pdo = new PDO(
    'mysql:host=localhost;dbname=test_db;charset=utf8;',
    'test_user',
    'test_password',
  );

  $statement = $pdo -> prepare('CREATE TABLE posts (id int, title varchar(100))');

  $statement -> execute();
} catch (PDOException $e) {
  echo $e;
  echo $e -> getMessage();
}
