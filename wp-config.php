<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lust');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '`2z@{jiX)7.@}RO;N<Um_n/f6qh<ZVZew :vCO5ZBQ<Ozw1[_qj}ekF2i{S$[zG$');
define('SECURE_AUTH_KEY',  'oRG24}>^o4O;.UH$B-4JR^-l2dXCJBh1O+q!iReyw,/b#2% < u/.tPP^qggZy#3');
define('LOGGED_IN_KEY',    '@@lNXW!WJ1 ^*P;HMarWKP?lHh1Xg}uboPpI5+~J5a:OmS;ndKWK:O4[9~O|bp3l');
define('NONCE_KEY',        'Gbs`pW9I?sPI0|%GOC/d>buPJ#DHm1_eLy.xZ4<b`Buw`;hZIq}f*-<q2,MIl8oI');
define('AUTH_SALT',        ':?5~loV&`$2j^ .P28>nz}V`Eg6+TEER<$+G .(E:G4#i.-UKIK]N+(^Pae$$Y7L');
define('SECURE_AUTH_SALT', 'd%J8Yv8vsi:$T7~&accDcuHTI:47VyPmVazCMS h>n(E^TTgttB.HX^Oe]gKtOAB');
define('LOGGED_IN_SALT',   'cs){paoB{Y[}tG4?%@9<a:FXu[feDa]6zTc{@d-rFnRZ0T7*A5JCQ3=xR%f6irU7');
define('NONCE_SALT',       'FM#(#`<Sc!#Ec[s,}r^5.;Nkm7f57O[3U=kM~9P_ 5-Dkk,G$9%@c}H6y{3+]n:2');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'lst2k16_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
