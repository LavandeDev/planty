<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=KjTc_Nuz/,L:Rf4[<809bFw^Owf7J#lT!;<@*o{!I]a<Kiad)M2a,zT6iZ4pMH;' );
define( 'SECURE_AUTH_KEY',  'H`)/`j|)vdPPs:7z2eZffQctw9qM(WN|POVuN-A;g&@y.}=}M[l=`P=G.|V 60#c' );
define( 'LOGGED_IN_KEY',    'z%qT(H@~qQ(I/.><0ioEt$~}{+90|{d17DDwO0<2!)`-7QHBeIn!<`cwVyMEc6fU' );
define( 'NONCE_KEY',        '%>|8DYSt{$1RR8f^JY]I}h]DJv-81fJ5.aGhf+:Eg5uqz^6!VeZ D#~8S^FvJ5Cm' );
define( 'AUTH_SALT',        'Ydh>eE^iWfh]iCnNj:5{Q%J9q=PjfkK[(p-l-R$F{<f?{$DU&*3!|w*7wM#C>b>|' );
define( 'SECURE_AUTH_SALT', 'olv8D :6CNPMz?opm:l%<:Q|FB95xM,|_z!U-%vpsy?*J4[s>isi)D$w<U%2|6R5' );
define( 'LOGGED_IN_SALT',   'hEfrh8D[-nU]gk{yU<&V+3M_U(1<n[50_+PEDZPBU#l*{[cg~T:]+v>4{khfuM3=' );
define( 'NONCE_SALT',       'HrB[pbgRz-bPqd{#npC?y-M4k$`RLV0Q$c~5kZCT:y9v&+AHez,4-F9lwiOgl N/' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
