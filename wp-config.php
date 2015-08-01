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
define('DB_NAME', 'moveo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'c*i1-Aj(0B^Lm!3YTQQ8Gn^Ud+HQ Q%p:XG:w^Uz<%k|I%l.pQuz+$=3Xl2A=g&)');
define('SECURE_AUTH_KEY',  'U^fo)B[V8$:f|ejnOIok4X#<`l%=x)r5}--};Qj/:-PRy3{O(*Hp19B((R?7[_E{');
define('LOGGED_IN_KEY',    '> qr;LP?<g3w|bGY^}+Sa4FWD-Jmy|kfMzebA H^8+sT4EH^n*+4YF.TAZ28dJP1');
define('NONCE_KEY',        '8%krp1! N`wvR}al^y dj=^&`zLET:|>hXcZ=T,m?&[b<^5|~64%j$^-Fym-O+b)');
define('AUTH_SALT',        ')3lW+VfK,Wr!_=ni&Jth|:rZJB^A%RciXsG:I-TSnL=y56zLwoGD?u&7zkz/uR^H');
define('SECURE_AUTH_SALT', '&0oA-M%]gwOO9$X8M0AZv4AMv/U{ gf2!.JQ(@SY?,:~usk/-%S 4A; akatg/%~');
define('LOGGED_IN_SALT',   'g[EI5@+5K+NbP3JK-D9* n+XpAh2OnypjS_);rdL?6-X{Ew`I$5*+w:$,-Q+paU^');
define('NONCE_SALT',       'y.clgSk[}-{l~l:_#! lL;[g&Puf*lF4jV+GY&T,4mZsA]8+QQ~xV2#S@Mg/A!Bs');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode deboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define( 'WPCF7_AUTOP', false );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
