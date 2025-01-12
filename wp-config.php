<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'admin_BM');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'admin_USBM');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'Me2lis4U');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?@U/.(#b0+i?J MJ6,`TfI%:(ZQGr8frp3&Qf=|n$4q5=-*$aC^DmH@U`%a0*T@M');
define('SECURE_AUTH_KEY',  '|Bz}#,$}==Tt}Bls%)KpE/LC>Urz~xF-(s>K=dDf&:E$E+VBDfwjF@DP-KT r;_%');
define('LOGGED_IN_KEY',    '+Ku,|:q4Q-HS|=en%x[KcDWj^/pY2|EK^p.(z-/Af<lV2I<AYMw1rOz{vqqqmvU5');
define('NONCE_KEY',        'ChSeWO*T-z/IXlPfP<Lz&+-p(-&i:LO21{]ULZk-:YEAeAy]+c,3LN#e0:96d|..');
define('AUTH_SALT',        '!}L@#0!T]Z1f-2EomK7E]6qWs4W_u-BQ/(H) I;{Z|.JzkBp|u jwt}b:[sZB$cE');
define('SECURE_AUTH_SALT', 'AU2Rc)5Uie#[|3UFX;w/@*fAH8!n~-TK|F:w)P-:XBBj];Tk8^fPF+-U1p:^4k+v');
define('LOGGED_IN_SALT',   'pUi|%Trp[PQorC`.w1-N;~)l^NDvH=@j$&zushO@,SU_f# w8^nC3s{MSN=uX+_o');
define('NONCE_SALT',       '~F/K2U)[//AP9PC,M}QcpUMJs=fsy/P(ElDD+dsDrKs|-+B{= #c$R74e/!M3y31');
/**#@-*/
define( "FS_METHOD", "direct" );
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
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
