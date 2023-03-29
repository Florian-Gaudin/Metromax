<?php

  require_once './config.php';

  class Database extends Config {
    // Insert User Into Database
    public function insert($password, $nom, $prenom, $pseudo, $email, $role) {
      $sql = 'INSERT INTO users(mdp_user, nom_user, prenom_user, pseudo_user, mail_user, id_role) VALUES (:mdp_user, :nom_user, :prenom_user, :pseudo_user, :mail_user, :id_role)';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        'mdp_user' => $password,
        'nom_user' => $nom,
        'prenom_user' => $prenom,
        'pseudo_user' => $pseudo,
        'mail_user' => $email,
        'id_role' => $role,
        
    ]);
      return true;
    }

    // Fetch All Users AND avatars From Database
    public function read() {
      $sql = 'SELECT * FROM avatar a INNER JOIN users u ON a.avatar_id = u.avatar_id;';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

    // Fetch Single User From Database
    public function readOne($id) {
      $sql = 'SELECT * FROM users WHERE id_user = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetch();
      return $result;
    }

    // Update Single User
    public function update($password, $nom, $prenom, $pseudo, $email, $role, $id) {
      $sql = 'UPDATE users SET mdp_user = :mdp, nom_user = :nom, prenom_user = :prenom, pseudo_user = :pseudo, mail_user = :mail, id_role = :id_role WHERE id_user = :id';
      $stmt = $this->conn->prepare($sql);
      
      $stmt->execute([
        ':mdp' => $password,
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':pseudo' => $pseudo,
        ':mail' => $email,
        ':id_role' => $role,
        ':id' => $id,
      ]);

      return true;
    }

    // Delete User From Database
    public function delete($id) {
      $sql = 'DELETE FROM users WHERE id_user = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      return true;
    }

  }

?>