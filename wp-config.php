<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tinpanal_wo1174');

/** MySQL database username */
define('DB_USER', 'tinpanal_wo1174');

/** MySQL database password */
define('DB_PASSWORD', 'JajqYHmJy5zC');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'kKB%p^VyZb*AHr(YIMNkkRC@Rs&$>?/O/@i?NH}|pbWKP@PUzzcOzka])E_kqZ=Y$ghF{qbG%dnwhqcz{*D&iy;DRE+Za]!;f?Z$w=z]r;!ORh{Wy>|ZXsH|c{<kC!/u');
define('SECURE_AUTH_KEY', '-@>(OMjX}HMKWN*k%wL_a-c)u/kQt;R*mn[wWDMNVNZN)/!C<QrB$o@thuS]{]*dhw|IW?M$h;cl!ZavtuHWyy{=^N)e|f^{OPOKX?-TrXtp]Z;DdVhO^;=?mM/nniVk');
define('LOGGED_IN_KEY', 'l/cD$Q?TLW@pHq_MYMBf{/em-irrqU|W[C=Tqv+wml}geY<Ohg&}W(sRSb_<K(AD(dZ$Nb>)VSaC|lEI{?oX_ly!iH_uFE*B)!NWG(fYe?C&$BcO%vonU(gphiMDoeOJ');
define('NONCE_KEY', 'RYb|rnHo}(IBghbVj//t/Gh]=(nvfk)M*JkBPNyf?onybP;D]DdvpXxm>qOz^j^DS{)ecFOnHiuzMhH($pY*K>k!czuKU($%]L{sj{qP]Tq=dfE]}zpeeL!M^kHpl<Pe');
define('AUTH_SALT', 'cn^)LgV=qG<{pI?_VS(PsQYnFcY;rd[ryK)|TvG{](/%[kGCtwjr{OyuL@+QDuLWR/)HuQ;gC%-)k{)@HU;p^|r!vqo&&qO{}LZb+G[_KuKekw{QNTM-FFE?i;!A-eOR');
define('SECURE_AUTH_SALT', 'qQ-rXX=>ebnDr-=ca]O{Zg%)OXOMPoKwyWc[{[-]?esQ$_WQ{UNFqO*QlqcK/@b?y|MEk&JPHWJD?[%NG&)U@AiBY(o!(hUi=W}tCmHzt]+rLb]B*)>R%/E*JNcmZmJ@');
define('LOGGED_IN_SALT', '>=jGzBcxCGa)=[xg^/CVOED/Ic%rbrpezF|c)U{FIHC/mxBLCOfdYxlACPQglP+WtmDtu-F_>u;aPtL[zCYkt(A+t<;}[?(K+)pRO*Pmrg{%xe[EqcXQFAoea)W*HaZs');
define('NONCE_SALT', 'c]<f!s!tyJfIw/-HHdvPuofK<PH+l^euiv&W{NT}Pbq};hg];SzkJ**Vyj{}MJ]JE>LPmDHlWPoD(b;DZ(FagiKUD^$NSJVK)nX?]F!vpR^qTftEZlnl)kHuFh%?qE?=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_szph_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
