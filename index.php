<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
 <h1> Challenge 6.Les fonctions avec PHP ac index.php</h1>
  <br>
  
  <p> 
    <ul>
      <li>La fonction prend en entrée deux paramètres,</li>
      <li>Les bons types sont appliqués aux paramètres et au retour,</li>
      <li>Le mot clé <code>return</code> est utilisé dans la fonction pour renvoyer le résultat,</li>
      <li>L'affichage du résultat se fait bien à l’extérieur de la fonction et non directement dedans,</li>
      <li>Le fichier <code>index.php</code> est disponible depuis un lien Gist ou Github.</li>
    </ul>
 </p>
 
 <br><br>

    <?php
    echo "<p>";
    
    // La fonction prend en entrée deux paramètres en string
    echo writeSecretSentence("lion","lune");
    echo writeSecretSentence("mon chien","coup de feu");
    //L'affichage du résultat se fait bien à l’extérieur de la fonction et non directement dedans,

    //Les bons types sont appliqués aux paramètres et au retour,
    function writeSecretSentence($animals,$elements){ 
      return  "<p>". $animals ." s'incline face à ". $elements. "</p><br>";
    }
    
    echo "</p>";
    ?>



</body>
</html>
