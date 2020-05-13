<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signer la lettre<?php /* Titre du site */include "includes/title.php"; ?></title>
	<!-- CSS -->
	<?php include "includes/style.php"; ?>

	<!-- --- -->
</head>
<body>
		<?php /* Header */
        $apropos_active ="active";
		include "includes/header.php";
		?>
    <h1>Signer la lettre</h1>
        <h2>Formulaire</h2>
        <p style="color: red;"><strong>**VERSION BÊTA** Actuellement en cours de développement. N’est pas officiel.</strong></p>
        <p><em>Les champs obligatoires sont indiqués par le symbole &laquo; * &raquo;.</em></p>
		<form method="post" action="signature.php">
                <div>
                    <label for="name">Nom*&nbsp;:</label><input name="name" id="name" type="text" required="required" placeholder="Ex&nbsp;: Marie Durand" />
                </div>
                <div>
                    <label for="age">Âge&nbsp;:</label><input type="number" min="0" name="age" id="age" placeholder="Ex : 17" />
                </div>
                <div>
                    <label for="statlist">Profession/Statut&nbsp;:</label>
                    <select name="statlist" id="statlist">
                        <option value="">< Choisissez ></option>
                        <option value="col">Collégien·ne</option>
                        <option value="lyc">Lycéen·ne</option>
                        <option value="etu">Étudiant·e</option>
                        <option value="sal">Salarié·e</option>
                        <option value="chentr">Chef·fe d’entreprise</option>
                        <option value="el">Élu·e</option>
                        <option value="ret">Retraité·e</option>
                        <option value="x">Autre</option>
                    </select>
                </div>
                <div>
                    <label for="city">Commune/Département/Région&nbsp;:</label><input name="city" id="city" type="text" placeholder="Ex&nbsp;: Valenciennes" />
                </div>
                <div>
                    <p>Vous consentez, en soumettant ce formulaire, à ce que les informations personnelles recueillies par le biais de celui-ci paraissent dans la lettre qui sera envoyée au président de la République ainsi que sur ce présent site web. </p>
                </div>
            <input type="submit" placeholder="Signer" />
        </form>
		<?php /* Footer */ include "includes/footer.php" ; ?>
</body>
</html>
