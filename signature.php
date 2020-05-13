<?php            
            //On récupère le contenu du fichier
            $texte = file_get_contents('db/sign.csv');
            
            //On ajoute notre nouveau texte à l'ancien
            $name = $_POST['name'];
            $age = $_POST['age'];
            $statlist = $_POST['statlist'];
            $city = $_POST['city'];

            if ($age == Null) {
                $age = "n";
            }

            if ($statlist == Null) {
                $statlist = "n";
            }

            if ($city == Null) {
                $city = "n";
            }

            $texte .=  "\n" . '"' .  $name . '";"' . $age . '";"' . $statlist . '";"' . $city . '"';
            
            //On écrit tout le texte dans notre fichier
            file_put_contents('db/sign.csv', $texte);
        ?>
<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lettre signée&nbsp;!<?php /* Titre du site */include "includes/title.php"; ?></title>
	<!-- CSS -->
	<?php include "includes/style.php"; ?>

	<!-- --- -->
</head>
<body>
		<?php /* Header */
        $apropos_active ="active";
		include "includes/header.php";
		?>
    <h1>Lettre signée&nbsp;! 😁</h1>
        <p>Merci beaucoup de votre participation.</p>
		<?php /* Footer */ include "includes/footer.php" ; ?>
</body>
</html>
