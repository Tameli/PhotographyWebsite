<?php
//var_dump($_POST);

mail(
    "luna.serena@bluewin.ch", 
     "Anfrage Website Lia", 
     "Email: {$_POST['email']}, Name: {$_POST['name']}, Nachricht: {$_POST['message']}");

     header("Location: index.php?contacted=1"); //Umleitung zurück zur Hauptseite sobald contacted=1

     //echo "Hallo ", $_GET["name"], " ihr Formular wurde erfolgreich übermittelt. Wir werden uns bemühen ihrer Anfrage sobald als möglich nachzukommen";

?>