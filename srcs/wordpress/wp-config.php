<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'user1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'test123' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F#FfJ|l2uQHFaXzNq(KubzgL$CT>93MMFhhHwUsvh$0=4H3TC_h2?,HGT2!3m#$C' );
define( 'SECURE_AUTH_KEY',  'baNg0v`$4d2)c|X@r;p;qI)|MhFcPSWet[KU-<oo[&v5]b<By&09Jq9Ixi) AKm1' );
define( 'LOGGED_IN_KEY',    'qR-y!A=u+8X_eC98~;CU+07I8O8alH2/]<l_wr<m^l!| ib>VO&Fy~IB-;%R?@@n' );
define( 'NONCE_KEY',        '^w+/&Vln[Z94YD56!Tms{3eR0PrMfvQD~4c{[R^&)%~1xXC9{4T}EWC-$E:(#OVR' );
define( 'AUTH_SALT',        '6D8}Fv-Nd_3@]53?vyP*JKpC3e(Z%P)]SI5UA&DEB,,SWA07~=nl@|w)?,wnl-+_' );
define( 'SECURE_AUTH_SALT', 'XWcshC3`q/V_?Eo#5nu[X;/}cN]tfeJb%_~bfaF8m<D63d hD(Cy/}%HG[x~7bTK' );
define( 'LOGGED_IN_SALT',   'rPw9^:4T9iSbq*X~_L2vR.%F${h6qEUn;QJ!F9X#GzgHi]w#v7kBIP~gb*tX#-Nt' );
define( 'NONCE_SALT',       'gr=KKNl8jbyI>s@?<~q#kv)}Y,[0#4HX&.Y4gD$Qx~R~lvb|TwB}@Hv^hV.7PF$Y' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

