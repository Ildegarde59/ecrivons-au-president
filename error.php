<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>La lettre<?php /* Titre du site */include "includes/title.php"; ?></title>
	<!-- CSS -->
	<?php include "includes/style.php"; ?>

	<!-- --- -->
</head>
<body>
		<?php /* Header */

		include "includes/header.php";
    echo "<h1 class='error-doc'>Erreur " . $_GET["error_type"] . "</h1>";
    ?>
		<article>
      <section class="error-doc">
        <p>Il y a un petit problème. La page que vous cherchez à joindre n’existe pas ou bien vous n’avez pas le droit d’y accéder ou bien c’est encore un problème plus grave.</p>
        <p><a href="/" title="Aller vers la page d’accueil">Aller vers la page d’accueil&nbsp;&rsaquo;</a></p>
      </section>
	  </article>
  	<?php /* Footer */ include "includes/footer.php" ; ?>
</body>
</html>
