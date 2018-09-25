<?php
include 'config.php';
echo "string";
 if(isset($_POST['pseudo']) AND isset($_POST['message'])){

   $pseudo = htmlspecialchars($_POST['pseudo']);
   $message = htmlspecialchars($_POST['message']);


   if(!empty($pseudo) AND !empty($message)){
     $request = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(:pseudo, :message)');
     $request->execute(array(
       'pseudo' => $pseudo,
       'message' => $message
     ));
   }
   header('Location: index.php');
 }
 ?>
