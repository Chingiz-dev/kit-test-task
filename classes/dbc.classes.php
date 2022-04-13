<?php

class Dbc {

  protected function connect() {
    try {
      include_once "../config.php";
      $dbconf = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
      $db = new PDO($dbconf, Config::DB_USER, Config::DB_PASSWORD);
      return $db;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
  }

}