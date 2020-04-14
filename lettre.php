<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Notre projet<?php /* Titre du site */include "includes/title.php"; ?></title>
	<!-- CSS -->
	<?php include "includes/style.php"; ?>

	<!-- --- -->
</head>
<body>
		<?php /* Header */
        $lettre_active = "active";
        $signer_active = "";
        $home_active = "";
		include "includes/header.php";
		?>
    <h1>La lettre</h1>
		<article>
      <section>
        <p><em>Voici la lettre à l’intention d’Emmanuel Macron que nous souhaitons envoyer avec votre soutien.</em></p>
      </section>
      <section class="lettre">
        <p><strong/>Objet&nbsp;:</strong> Enjeux sociaux et environnementaux après la pandémie de Covid-19</p>
        <p>Bonjour Monsieur le président de la République,</p>
        <p>Nous désirons vous écrire pour vous faire part de nos craintes quant à la relance économique que votre gouvernement a annoncé suite à la pandémie de Covid-19 bien que nous ne sommes qu’un groupe apolitisé de jeunes qui se sont rassemblés sur Internet durant le confinement pour co-rédiger cette lettre.</p>
        <p>Nous craignons que pour redynamiser l’économie, l’État et les entreprises sacrifient encore un peu plus l’écologie et que la France n’atteigne pas ses objectifs environnementaux.</p>
        <p>Ce sujet nous tient à cœur car il s’agit de l’avenir de notre planète, de notre monde. Pour être sincères avec vous, nous n’avons que faire de la croissance économique, de la spéculation boursière, des marchés financiers, etc. Notre seul souhait est de vivre dans un monde d’amour, de solidarité, de paix, de liberté, d’égalité et de fraternité, plus respectueux de la faune, de la flore et de nous, les humains. Nous souhaitons vivre notre vie dans un monde s’occupe plus des choses essentielles que la nature nous offre chaque jour plutôt que de savoir si messieurs et mesdames les spéculateurs sont devenus suffisamment riches et célèbres pour qu’ils cessent de détruire notre planète et ses ressources à petits feux.</p>
        <p>Nous savons que vous ne partagez pas forcément notre avis mais s’il vous plaît, entendez-nous. Nous vous prions d’y réfléchir à deux fois avant de demander à M. Lemaire, ministre de l’économie, de renflouer des entreprises et des banques au bilan carbone désastreux.</p>
        <p class="p-right">Merci M. Macron d’avoir pris le temps de nous lire.</p>
      </section>
	  </article>
  	<?php /* Footer */ include "includes/footer.php" ; ?>
</body>
</html>
