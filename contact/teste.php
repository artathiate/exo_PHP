
<?php
     $civilite=$_POST['civilite'];
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $age=$_POST['age'];
     $message = $_POST['message']."<br>".$_POST['nom']."<br>".$_POST['prenom']."<br>".$_POST['age'];
     $to = 'adama.a@codeur.online';
     $object="message";
    if(mail($to, $object,$message ))
    {
        echo "<h1>salut $civilite $nom $prev nom votre message a bien eete envoyer</h1>";
    }
    else
    {
        echo('l\'envoie de votre message a echoué');
    }
 ?>
