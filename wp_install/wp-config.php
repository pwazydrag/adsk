<?php

define( 'DB_NAME', '{{DB_NAME}}' );

define( 'DB_USER', '{{DB_USER}}' );

define( 'DB_PASSWORD', '{{DB_PW}}' );

define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8mb4' );

define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'ESrPc0YuOu5>xvnz(%Lf#Hk>`m3g3rO}vGj&~f}nxuX`[i-Rg%y/]2AZ,KAag(j9' );
define( 'SECURE_AUTH_KEY',  '@52@pc-q;_X%1e7UED+<2AHxsTT~r noJPn4tE9b>d<~XQ=|!b34|bIm{PpDJR?B' );
define( 'LOGGED_IN_KEY',    '9i4eij Q?uf+3;x&Dhp$Pc-TqC=Nl$FM3H6%!}6.}4T,.M8%p*5}nDiM-e@gfNGW' );
define( 'NONCE_KEY',        '}wyHkFO#2Uz+|eEik>i06^b]CE<Kx+nU;TOP7KteGt[~*!|PWO-y^Pt%C#(V4muX' );
define( 'AUTH_SALT',        'o IZ,5X+K5sFpku5Q.vvg+Q&!=bu1dSCDU9_zgd:7H^CJWA:t:DDejO:c:He?P;N' );
define( 'SECURE_AUTH_SALT', 'dDH/.Mo xF)%@)XcJ&}<e/YW[.$!4uR!03ykSeS[c}:cAb$q3ka&vg-}..0EfBWn' );
define( 'LOGGED_IN_SALT',   'A*q{-VADH@=xDvbSouF#A-$?QdjYpn@#p_HfJW<I)WkohnP[5Y.j62Zy:.(hgEza' );
define( 'NONCE_SALT',       '#V6jRl0#C1v20[X&&}y`3(;)e$njBrD%sYpJuK+:GjW+sy=cJ<mXUk`~Zp8|zjus' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
