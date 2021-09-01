<?php

class Dbh {

  private $host = "remotemysql.com";
  private $db = "0k8cApdqad";
  private $username = "0k8cApdqad";
  private $pass = "rem5DEshYP";  

  protected function connect() {
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;
    $pdo = new PDO($dsn, $this->username, $this->pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }

}
