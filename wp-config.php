<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_accesspress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l'hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
 * N'y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'f@L-2T>BHX%^G<1gS!+?hgeAe|T87q1cR{)7i<-u}`.FqP6*2rTEB{s+y&@W ;UT' );
define( 'SECURE_AUTH_KEY', 'OT(Cd3LYsju)0-@l$Yk;XIB~2(oFI9yJ7x2:P :&|*G+z2*UP.dbAF%&1dWFTSd$' );
define( 'LOGGED_IN_KEY', 'R|ScnwXIzLsO|tq<<NEnv;kE])|Xxrb$NkzUTc.S-;r`7Z;9rhfc(RD4;H&C6)49' );
define( 'NONCE_KEY', 'a?2<S/Ox0&6?*78jV| 02xB/Vs+^Y4HR_fbTqVt><49yXi4 4g9b;M-@+rm;uytn' );
define( 'AUTH_SALT', '9+GNCIv6+E#7lp!E9b[oAG||&I+Ku]~T%c0uO{{oa:}+q,{%%o}fN+31@-0[Gt>+' );
define( 'SECURE_AUTH_SALT', '7`B!+UAO:c,,~-Nbe0+e6I-u%-0SY3DGp lJT,|iC=`KI&vMJml+.@1]#4w`~x$!' );
define( 'LOGGED_IN_SALT', 'oH/:;kH5kVy_y&Pg}tlwCm>:J=-c_8gvI|G)B}>PmATKX{=]dB _d/O|j03?4G`P' );
define( 'NONCE_SALT', 'AJ[,r|-~j3,8>kMRa_;&O}M#Ua1<)i}7=D|X]4?p=^Hj^E(`#h!odR&+G?r$o=zx' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix = 'wor1535_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour obtenir plus d'information sur les constantes
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );