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
define( 'DB_NAME', 'beapi_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';wkL[7i[0>*fSl37B{_Ud_H)L*vh/scMswXzl!9gqwHh4|V: dC1_U&Vz8gk9~U,' );
define( 'SECURE_AUTH_KEY',  '50KLPM#yrooYenB|^LvA{sBM&<KH@sGIahsC5UzX.e-`LJJ9]rt^-^t{sbM:&-u|' );
define( 'LOGGED_IN_KEY',    'Y|KhY9ES[qFg`n|a};eGn7Qu^:SGWbEo%-a8,%hH.En2vIMU,,xAS<}tYwuKD5[O' );
define( 'NONCE_KEY',        't%?-]:G9H+T08S.x1VCUrWHXkTz=!~jGI}sSNwH X;D{)CA*C-nJUNny9cNO% :[' );
define( 'AUTH_SALT',        'y>uSq|jn?x&K0w2zY[cdNd(@*CG9|jU@6RRCtB0HwP<Nx,PLR#x$8L7f~rqgf#.x' );
define( 'SECURE_AUTH_SALT', 'jy.@$OBT~k4w7-9Tf$#yWGs@2p~qQM`}^$yYiJb +fxIhKFxEvj+pi.,,bsewH,h' );
define( 'LOGGED_IN_SALT',   'a{VEeSvDXnxnaxQ<.9,//0(e:>wLsNw1@gQ99x|&#ZCp_?je}Za$r_a$rwR4}}U3' );
define( 'NONCE_SALT',       'z@;vn+OrZh*q7~(Nr|(p~ix7lMe^V|s(3T)$e%9E=X:Ni^ZS=n3@xMq9Cw&#-6h(' );
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
