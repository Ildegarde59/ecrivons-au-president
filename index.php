<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Accueil<?php /* Titre du site */include "includes/title.php"; ?></title>
	<!-- CSS -->
	<?php include "includes/style.php"; ?>

	<!-- --- -->
</head>
<body>
		<?php /* Header */
		$home_active = "active";
		include "includes/header.php";
		?>
		<h1>Bienvenue</h1>
		<article>
				<section>
          <h2>De quoi s’agit-il&nbsp;?</h2>
          <p>Nous le jeunes avons pris conscience des problèmes environnementaux&nbsp;: ce sont nous qui en subirons les conséquences directement. C’est pour cela que nous avons décidé d’agir maintenant. Mais comment faire en période de confinement&nbsp;?</p>
				</section>
        <section>
          <h2>Écrire au président&nbsp;!? 🤔</h2>
          <p>Cela peut paraitre une idée folle, mais en France, il y a deux destinataires pour lesquels on peut, pour une lettre de vingt grammes, ne pas mettre de timbre&nbsp;: le Père Noël, ainsi que le président de la République. C’est pourquoi nous avons eu l’idée de faire cosigner par un maximum de jeunes une lettre à l’attention du chef de l’État pour lui faire parvenir nos craintes sur les enjeux sociaux et écologiques.</p>
	</section>
        <section>
          <h2>Comment procède-t-on concrètement&nbsp;?</h2>
          <p>Nous avons déjà rédigé une lettre que tu peux consulter <a href="/lettre.php" title="Consulter la lettre à l’attention du président">ici</a>. Après l’avoir lue attentivement, si tu es d’accord avec ce qui est écrit, tu pourras bientôt remplir le formulaire en ligne. Nous nous chargerons d’envoyer la lettre à Emmanuel Macron par la poste, avec toutes les signatures recueillies. Tu peux d’ores et déjà contribuer à l’améliorer via les commentaires.</p>
        </section>
        <section>
          <h2>Qui peut participer&nbsp;?</h2>
          <p>Tous les jeunes de moins de 25&nbsp;ans vivant en France peuvent participer. Ce projet est avant tout dédié aux jeunes mais nous encourageons les adultes qui souhaiteraient monter un tel projet à le faire également de leur côté.</p>
        </section>
        <section>
        	<h2><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Calendrier</h2>
			<p>Le calendrier précis des échéances sera prochainement communiqué.</p>
        </section>
			</article>
		<?php /* Footer */ include "includes/footer.php" ; ?>
	</div>
</body>
</html>
