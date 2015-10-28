<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8"/>
    <title>Donnees formulaire</title>
  </head>

  <body>
    <?php
      echo "Prenom : ".$_POST['prenom']."<br>";
      echo "Nom : ".$_POST['nom']."<br>";
      echo "Telephone : ".$_POST['tel']."<br>";
      echo "Mail : ".$_POST['mail']."<br>";
      echo "Objet : ".$_POST['objet']."<br>";
      echo "Message : ".$_POST['message']."<br>";

      $message = $_POST['prenom'].';'.$_POST['nom'].';'.$_POST['tel'].';'.$_POST['mail'].';'.$_POST['objet'].';'.$_POST['message'].'\n';

      #Ouverture de fichier Methode 1
      ##################################
      #$fichier=fopen('contacts', 'a+');
      #fputs($fichier, $message);
      #fclose($fichier);


      #Ouverture de fichier methode 2
      ##################################
      #$fichier='contacts';
      #$current = file_get_contents($fichier);
      #$current .= $message;
      #file_put_contents($fichier, $current);

      #Ouverture de fichier methode 3
      ##################################
      $fichier = 'contacts';
      file_put_contents($fichier, $message, FILE_APPEND);
    ?>

  </body>
</html>
