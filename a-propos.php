<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>À propos de nous<?php /* Titre du site */include "includes/title.php"; ?></title>
	<!-- CSS -->
	<?php include "includes/style.php"; ?>

	<!-- --- -->
</head>
<body>
		<?php /* Header */
        $apropos_active ="active";
		include "includes/header.php";
		?>
    <h1>À propos de nous</h1>
		<article>
      <section>
        <h2>Qui sommes-nous&nbsp;?</h2>
        <p>Nous sommes un groupe de jeunes apolitisé et sans statut légal qui ont décidé d’écrire une lettre au président pour peser sur les décisions prises par celui-ci.</p>
        <h3>Initiateurs du projet&nbsp;:</h3>
          <ul>
            <li><a href="https://twitter.com/bastientrehoux" target="_blank" title="Compte Twitter de Bastien Tréhoux"><i class="fa fa-twitter" aria-hidden="true"></i> Bastien Tréhoux <i class="fa fa-external-link" aria-hidden="true"></i></a>, lycéen, Hauts-de-France</li>
          </ul>
      </section>
      <section>
        <h2>Nous contacter</h2>
        <p>Vous pouvez nous contacter à l’adresse e-mail suivante&nbsp;: <a href="mailto:?to=contact@ecrivonsaupresident.yn.fr" title="Envoyer un mail">contact@ecrivonsaupresident.yn.fr</a></p>
      </section>
      <section>
        <h2>Réutilisation du contenu</h2>
        <p>Le contenu de ce site est librement réutilisable selon les termes de la <a title="Consulter la licence" target="_blank" rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/deed.fr">licence Creative Commons Attribution - Pas d’utilisation commerciale 4.0 International</a>. Le code source du site est quant à lui disponible sous licence MIT sur notre dép <a href="https://github.com/Ildegarde59/ecrivons-au-president" title="Accéder au dépôt Git" target="_blank">Git.</p>
      </section>
    </article>
		<?php /* Footer */ include "includes/footer.php" ; ?>
</body>
</html>
