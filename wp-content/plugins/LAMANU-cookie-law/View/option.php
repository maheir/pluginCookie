<!-- Création du formulaire pour la mise en place du boutton - Attention on redirige vers options de Wordpress -->
<form action="options.php" method="post">

	<label for='google_analytics'>ID google analytics</label>

	<!-- Création de l'input avec comme valeur la fonction get_option qui va nous permettre d'avoir la valeur par défaut UA-00000000-0 du spi google analytics -->
	<input type='text' id='google_analytics' name='google_analytics' value="<?= get_option('google_analytics', 'UA-00000000-0'); ?>" required />

	<?php
		// Le paramètre de settings_fields doit correpondre avec le paramètre register_setting, on va exporter les données de google_analytics
		settings_fields("group_option");
		// On rècupére le slug
		do_settings_sections('confCookies');
		// Fonction de wordpress qui va créée le bouton à notre place^^
		submit_button();
	?>

</form>