<!--
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: http://www.
Description: WordPress Plugin for european cookie law.
Author: Toto
Author URI: http://www.
-->
<?php
function LAMANU_scripts_config() {
	?>
	    <!-- Appel du script de tarteaucitron avec l'aide d'une fonction wordpress qui va chercher l'url du plugin et on finis -->
		<script src="<?= plugin_dir_url(__FILE__); ?>js/tarteaucitron/tarteaucitron.js"></script>
		<!-- Script importé du site tarteaucitron qui fait référence au option qu'on peut intégrer ou non dans notre plugin  -->
		<script type="text/javascript">
		// Initialisation de tarteaucitron
			tarteaucitron.init({
				"privacyUrl": "",
				"hashtag": "#tarteaucitron", /* L'identifiant permettant l'ouverture du bloc de Tarteaucitron. Laisser tel quel */
				"cookieName": "tarteaucitron", /* Nom du script que nous avons définit à la ligne 3 de la fonction précédente */
				"orientation": "bottom", /* La position de la bannière. Soit en haut soit en bas (top - bottom) */
				"showAlertSmall": true, /* Show the small banner on bottom right */
				"showAlertBig": true, /* Show the small banner on bottom right */
				"cookieslist": true, /* affiche la liste des cookies */
				"adblocker": false, /* affiche une alerte si un adblocker est présent */
				"AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
				"highPrivacy": true, /* désactive le consentement automatique */
				"handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */
				"removeCredit": true, /* supprime le lien de crédit */
				"moreInfoLink": true, /* affiche un lien "en savoir plus" */
				"useExternalCss": false, /* tel quel, le css de tarteaucitron.css sera chargé */
				"readmoreLink": "/cookiespolicy" /* définit le lien "en savoir plus" */
			});
	</script>
     <!-- Script importé du site tarteaucitron qui fait référence à google analytics -->
	 <script type="text/javascript">

        tarteaucitron.user.analyticsUa = <?php get_option('google_analytics', 'UA-00000000-0') ?>
        tarteaucitron.user.analyticsMore = function () { };
        (tarteaucitron.job = tarteaucitron.job || []).push('analytics');
        </script>
	<?php
}
// On renvoie l'action 'wp_head' qui va appeler la fonction ci-dessus
add_action('wp_head', 'LAMANU_scripts_config');

function ViewOption() {
	// Fonction qui va rediriger vers le chemin ou se trouve option.php
	$filesDirect = plugin_dir_path(__FILE__);
	$filesName = '/View/option.php';
	require_once $filesDirect . $filesName;
}

// Création de la fonction d'ajout du menu
function AddMenuPage() {
	// On ajoute un nouveau menu avec comme paramètre 1)le titre de la page, 2)le titre du menu, 3)les droits (Utilisateur , Moderateur, Admin),
	// 4)le slug qui est l'url "page=confCookies", 5)
	add_menu_page("Page gestion des cookies", "Gestion des cookies", "manage_options","confCookies", "ViewOption");
}
// On renvoie l'action 'admin_menu' qui va appeler la fonction ci-dessus
add_action('admin_menu', 'AddMenuPage');

// On enregistre les informations de google analytics grâce au register
function Group_init() {
    register_setting ('group_option','google_analytics');
}
// On renvoie l'action 'admin_init' qui va appeler la fonction ci-dessus
add_action('admin_init', 'Group_init');

?>