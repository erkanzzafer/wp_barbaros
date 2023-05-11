<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'barbaros' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U`A&R67P.EJHz~XG,,lsqWV8vaRW.11gGW)KmTH]L#R-#beF;r}*^CZyq6uY-npl' );
define( 'SECURE_AUTH_KEY',  'QnIA1t dL$3|SO_,:)1bzF?1e w vSj@C]`[0]k$$H@%:*uai7u!a]bpqmYj{!w:' );
define( 'LOGGED_IN_KEY',    't>T)KVvx(E f]mYkf%bjuk`T)]!`*cr~</q}DR8;h{kMqh**ISS/zOmQ=zkVEoA?' );
define( 'NONCE_KEY',        'fKiZG(@6Z~&6Ehn*>FJ,a_SU:a3ot*5vP@g!E39{c,0A&ySfy`5rc:#38f#~s>?W' );
define( 'AUTH_SALT',        'XNW]Lyg6cuG3cC;G}|*O[9@}9f.)n?#tZIXpQjQ> {d!zaG>c%H UD0Zz^Ija7}|' );
define( 'SECURE_AUTH_SALT', '[<8QNNdmaD+9zwXg;^)}~IT(MwI4<4:Rdg;ed^EQCGj%T8EU^g:aYujODKgsY}Sk' );
define( 'LOGGED_IN_SALT',   'o/wo{v:PxQ`[vQV2.U~Wd`d5SVq6F_jN@&yjWlVe,Z6s2GI2e+hu;7mt#zxV&I3?' );
define( 'NONCE_SALT',       '}H@RMKG|!-qXXPuD*:`s5_s0^) yoM;,F Z3AmrWm<!()7))Al ]t3PPa7w/r]Na' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';