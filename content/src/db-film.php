<?php

  require_once './config.php';

  class Database extends Config {
    // Insert Film Into Database
    public function insert($annee, $titre, $resume, $affiche, $url_ba_film, $genre) {
      $sql = 'INSERT INTO film(annee_film, titre_film, resume_film, affiche_film, url_ba_film, genre_film) VALUES (:annee_film, :titre_film, :resume_film, :affiche_film, :url_ba_film, :genre_film)';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        'annee_film' => $annee,
        'titre_film' => $titre,
        'resume_film' => $resume,
        'affiche_film' => $affiche,
        'url_ba_film' => $url_ba_film,
        'genre_film' => $genre,
        
    ]);
      return true;
    }

    // Fetch All Films From Database
    public function read() {
      $sql = 'SELECT * FROM film ORDER BY titre_film DESC';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

    // Fetch Single Film From Database
    public function readOne($id_film) {
      $sql = 'SELECT * FROM film WHERE id_film = :id_film';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id_film' => $id_film]);
      $result = $stmt->fetch();
      return $result;
    }

    // Update Single User
    public function update($annee, $titre, $resume, $affiche, $url_ba_film, $genre, $id_film) {
      $sql = 'UPDATE film SET annee_film = :annee_film, titre_film = :titre_film, resume_film = :resume_film, affiche_film = :affiche_film, url_ba_film = :url_ba_film, genre_film = :genre_film WHERE id_film = :id_film';
      $stmt = $this->conn->prepare($sql);
      
      $stmt->execute([
        'annee_film' => $annee,
        'titre_film' => $titre,
        'resume_film' => $resume,
        'affiche_film' => $affiche,
        'url_ba_film' => $url_ba_film,
        'genre_film' => $genre,
        ':id_film' => $id_film,
      ]);

      return true;
    }

    // Delete User From Database
    public function delete($id_film) {
      $sql = 'DELETE FROM film WHERE id_film = :id_film';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id_film' => $id_film]);
      return true;
    }
  }

?>