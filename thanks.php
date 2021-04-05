<?php
echo 'Merci '.$_POST['prenom']. ' '. $_POST['nom']; 
echo ' de nous avoir contacté à propos de “'.$_POST['sujet'].'”.<br/>Un de nos conseiller vous contactera soit à l’adresse '. $_POST['email']. ' ou par téléphone au ' .$_POST['tel']. ' dans les plus brefs délais pour traiter votre demande : <br/>"';
echo $_POST['message'] . '"';
