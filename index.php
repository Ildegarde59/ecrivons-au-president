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
          <p>Nous, citoyens ou futurs citoyens, avons pris conscience des problèmes environnementaux&nbsp;: ce sont nous qui en subirons les conséquences directement. C’est pour cela que nous avons décidé d’agir maintenant. Mais comment faire en période de confinement&nbsp;?</p>
				</section>
        <section>
          <h2>Écrire au président&nbsp;!? 🤔</h2>
          <p>Cela peut paraitre une idée folle, mais en France, il y a deux destinataires pour lesquels on peut, pour une lettre de vingt grammes, ne pas mettre de timbre&nbsp;: le Père Noël, ainsi que le président de la République. C’est pourquoi nous avons eu l’idée de faire cosigner par un maximum de jeunes une lettre à l’attention du chef de l’État pour lui faire parvenir nos craintes sur les enjeux sociaux et écologiques.</p>
	</section>
        <section>
          <h2>Comment procède-t-on concrètement&nbsp;?</h2>
          <p>Nous avons déjà rédigé une lettre que vous pouvez consulter <a href="/lettre.php" title="Consulter la lettre à l’attention du président">ici</a>. Après l’avoir lue attentivement, si vous êtes d’accord avec ce qui est écrit, vous pourrez la signer à un formulaire en ligne qui sera prochainement mis à disposition sur le site. Nous nous chargerons d’envoyer la lettre à Emmanuel Macron par la poste, avec toutes les signatures recueillies. Vous pouvez d’ores et déjà contribuer à améliorer celle-ci via les commentaires. Cela nous aidera à faire en sorte qu’elle soit la plus neutre et la plus objective possible.</p>
        </section>
        <section>
          <h2>Qui peut participer&nbsp;?</h2>
          <p>Toute personne française ou vivant en France peut participer quel que soit son âge.</p>
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
