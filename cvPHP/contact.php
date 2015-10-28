<!doctype html>
  <html lang="fr">

    <head>
      <meta charset="utf-8">
      <title>Contact</title>
      <link rel="stylesheet" href="style.css"/>

    </head>

    <body>

      <header>
        <h3>Pour me contacter :</h3>
      </header>

      <div id=contact>
        <section id="coord">
          <p>Renaud Vivancos<br>1 Rue de Tarassac<br>11100 Narbonne</p>
          <p>Tel : 04 68 41 90 13<br>Port : 06 50 73 53 46</p>
          <p>Email : <a href=mailto:renaud.vivancos@free.fr>renaud.vivancos@free.fr</a></p>
          <div id="map">
            <iframe width="400" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://cartosm.eu/map?lon=2.9787397830421&lat=43.188350782653&zoom=17&width=400&height=350&mark=true&nav=true&pan=true&zb=inout&style=default&icon=down"></iframe>
          </div>
        </section>

        <section id="formulaire">
          <form name="form" method="post" action="afficherFormulaire.php">
            <p><label for="prenom">Prénom :<br></label> <input type="text" placeholder="Prénom" name="prenom" id="prenom" class="formCoord"/></p>
            <p><label for="nom">Nom :<br></label> <input type="text" placeholder="Nom" name="nom" id="nom" class="formCoord"/></p>
            <p><label for="tel">Téléphone :<br></label> <input type="tel" placeholder="01234567" name="tel" id="tel" class="formCoord"/></p>
            <p><label for="mail">Email :<br></label> <input type="email" placeholder="addresse@fai.com" name="mail" id="mail" class="formCoord"/></p>
            <p>Objet de votre message :<br>
            <input type="radio" name="objet" value="recrutement" id="recrutement" checked/><label for="recrutement">Recrutement</label><br>
            <input type="radio" name="objet" value="pro" id="pro"/><label for="pro">Contact professionnel</label><br>
            <input type="radio" name="objet" value="perso" id="perso"/><label for="perso">Contact personnel</label></p>
            <p><label for="message">Votre message :<br></label><textarea placeholder="Votre message" name="message" id="message"></textarea></p>
            <input type="submit" value="Envoyer"/>
          </form>
        </section>
      </div>

      <footer>
        <a href="index.html">Retourner à l'accueil</a>
      </footer>

    </body>
  </html>
