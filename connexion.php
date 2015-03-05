
<?php

session_start();

$BDD = mysql_connect("localhost","root","");  // Connexion à la base de données.
            mysql_select_db("campuskamer");       // Sélection de la base de données utilisée.

// On met les variables utilisés du script PHP à FALSE.
$error = FALSE;

$connexionOK = FALSE;

// On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
if(isset($_POST["connexion"])){
   
   // On regarde si tout les champs sont remplis. Sinon on lui affiche un message d'erreur.   
   if($_POST["pseudo"] == NULL OR $_POST["passe"] == NULL){
      
      $error = TRUE;
      
      $errorMSG = "Vous devez remplir tout les champs !";
      
   }
   
   // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
   else{
      
      $sql = "SELECT pseudo FROM users WHERE pseudo = '".$_POST["pseudo"]."' ";
      
      $req = mysql_query($sql);
      
      // Si oui, on continue le script...      
      if($sql){
         
         // On sélectionne toute les données de l'utilisateur dans la base de données.   
         $sql = "SELECT * FROM users WHERE pseudo = '".$_POST["pseudo"]."' ";
      
         $req = mysql_query($sql);
         
         // Si la requête SQL c'est bien passé...      
         if($sql){
         
            // On récupère toute les données de l'utilisateur dans la base de données.
            $donnees = mysql_fetch_assoc($req);
            
            // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...         
            if($_POST["passe"] == $donnees["passe"]){
            
               $connexionOK = TRUE;
               
               $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";
               
               $_SESSION["pseudo"] = $_POST["pseudo"];
               
               $_SESSION["passe"] = $_POST["passe"];
            
            }
            
            // Sinon on lui affiche un message d'erreur.
            else{
            
               $error = TRUE;
            
               $errorMSG = "Nom de compte ou mot de passe incorrect !";
            
            }
         
         }
         
         // Sinon on lui affiche un message d'erreur.      
         else{
         
            $error = TRUE;
         
            $errorMSG = "Nom de compte ou mot de passe incorrect !";
         
         }
      
      }
      
      // Sinon on lui affiche un message d'erreur.      
      else{
         
         $error = TRUE;
         
         $errorMSG = "Nom de compte ou mot de passe incorrect !";
         
      }
   
   }
   
}

mysql_close($BDD);

?>

<?php if(isset($_SESSION["pseudo"]) AND isset($_SESSION["passe"])){
   
   echo '<p style="color:green">Bienvenue <strong>".$_SESSION["pseudo"]."</strong></p>';
   
} ?>

<?php if($error == TRUE){ echo "<p align="center" style="color:red"><strong>".$errorMSG."</strong></p>"; } ?>

<?php if($connexionOK == TRUE){ echo "<p align="center" style="color:green"><strong>".$connexionMSG."</strong></p>"; } ?>

<html>

   <head>
   
      <title>Création d'un formulaire de connexion en HTML</title>
      
   </head>
   
   <body>
      
      <h2>Connexion au site</h2>
   
      <form action="connexion.php" method="post">
         
         <table>
            
            <tr>
               
               <td><label for="pseudo"><strong>Nom de compte</strong></label></td>
               <td><input type="text" name="pseudo" id="pseudo"/></td>
               
            </tr>
            
            <tr>
               
               <td><label for="passe"><strong>Mot de passe</strong></label></td>
               <td><input type="password" name="passe" id="passe"/></td>
               
            </tr>
            
         </table>
         
         <input type="submit" name="connexion" value="Se connecter"/>
      
      </form>
   
   </body>
   
</html>