<?php
class Connexion {
  private PDO $connexion;

  public function __construct() {
      // Regroupement des paramètres dans un tableau de configuration
    $host = 'localhost';
    $dbname = 'Gestion_etudiant'; // Vérifie si c'est school1 ou Gestion_etudiant chez toi
    $login = 'root';
    $password = '';
    try {
      $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
      $this->connexion = new PDO($dsn, $login, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);
    } catch (Exception $e) {
      die('Erreur Connexion BD : ' . $e->getMessage());
    }
  }
  public function getConnexion(): PDO {
    return $this->connexion;
  }
}