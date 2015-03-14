<!DOCTYPE html>
<html>
<head>
  <title>Accueil - Powerbrosse</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <?php include("icone.php");?> 
</head>

<body>
  <div id="bloc_page">

    <?php include("header.php");?>

    <?php
       if (isset($_POST['mail']) && isset($_POST['pseudo']) && isset($_POST['message']))
       {
         $_POST['mail'] = htmlspecialchars($_POST['mail']);
         $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
         $_POST['message'] = htmlspecialchars($_POST['message']);

         if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail']))
         {
           $adresseBonne = true;
           $_POST['message'] = preg_replace("#(&amp;)#", "&", $_POST['message']);
         }
         else
         {
           $adresseBonne = false;
         }

         if ($adresseBonne)
         {
           $destinataire = 'powerbrosse@free.fr';
           $objet = 'Via la page contact';
           $corpsMessage = 'Expéditeur : "'.$_POST['pseudo'].'" <'.$_POST['mail'].'>'.
           "\r\n\r\n".$_POST['message'].
           "\r\n\r\n<em>Ce message vous est envoyé par un serveur automatique, merci de ne pas y répondre.<em>";
           $headers = 'From: noreply@powerbrosse.free.fr';
           $headers .= "Content-Type: text/html; charset=\"utf-8\"";
           if (mail($destinataire, $objet, $corpsMessage, $headers))
           {
             echo '<p class="bonneAlerte">Votre mail a été correctement envoyé.</p>';
             $destinataire = 'siuol39100@gmail.com';
             mail($destinataire, $objet, $corpsMessage, $headers);
           }
           else
           {
             echo '<p class="mauvaiseAlerte">Echec lors de l\'envoi du message, mais c\'est pas de votre faute&nbsp;: c\'est celle à internet.</p>';
           }
         }
         else
         {
           echo '<p class="mauvaiseAlerte">Erreur&nbsp;: votre adresse mail n\'est pas valide.</p>';
         }
       }
       ?>

    <h2>Accueil</h2>
    <section>
      <h3>Qu'est-ce que c'est&nbsp;?</h3>
      <p>
	La Powerbrosse est un sport consistant à faire tourner une
	brush (ou Mega-turning-uber-board-of-the-death) autour de son
	doigt. Cela peut paraître anodin, mais vous n'imaginez pas
	toutes les finesses et le savoir-faire que peut requérir ce
	noble art...
      </p>
    </section>

    <section>
      <h3>Démonstration...</h3>
      <div id="trailer">
	<iframe src="//player.vimeo.com/video/80187900" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </section>

    <?php include("footer.php");?>

  </div>
</body>
</html>
