<?php
session_start();

if(isset($_POST['submit'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "metromax";
    
    try {
        $conn = new PDO(
            "mysql:host=$server; dbname=$dbname",
            "$username", "$password"
        );
        
        $conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }
    catch(PDOException $e) {
        die('Unable to connect with the database');
    }

   
    // Prepared statement
    $query = "INSERT INTO avatar (avatar_url) VALUES(?)";
  
    $statement = $conn->prepare($query);
  
        // File name
        $filename = $_FILES['avatar']['name'];
      
        // Location
        $target_file = '../../assets/upload/'.$filename;
      
        // file extension
        $file_extension = pathinfo(
            $target_file, PATHINFO_EXTENSION);
             
        $file_extension = strtolower($file_extension);
      
        // Valid image extension
        $valid_extension = array("png","jpeg","jpg");
      
        if(in_array($file_extension, $valid_extension)) {
  
            // Upload file
            if(move_uploaded_file(
                $_FILES['avatar']['tmp_name'],
                $target_file)
            ) {
 
                // Execute query
                $statement->execute(
                    array($filename));
            }
        }

        // Upload terminé => Modification de l'avatar user dans la BDD
        $id_utilisateur = $_SESSION['id_user'];

        // Accéder aux données serveur
        $newAvatar = $conn->prepare('SELECT avatar_id FROM avatar WHERE avatar_id=(SELECT max(avatar_id) FROM avatar)');
        $newAvatar->execute();
        $avatar_id = $newAvatar->fetch();    
    
        // Ecriture de la requête
        $request = 'UPDATE users SET avatar_id = ? WHERE id_user = ?';
        $stmt = $conn->prepare($request);
        $stmt->execute([
            $avatar_id[0],
            $id_utilisateur,]);
    
        // Message si succès
        $_SESSION['message_update'] = 'Vous avez choisi et validé une nouvelle image de profil !<br>Vous devrez vous reconnecter pour voir vos modifications';
        header("Location: /metromax/content/pages/espace-user.php");
        unset($update);
        $conn = null;
        exit();
        }
?>