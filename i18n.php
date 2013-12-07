<?php

/**
 * Entry point of the i18n library.
 *
 * @since 0.1
 * @codeCoverageIgnore
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

if ( defined( 'I18N_VERSION' ) ) {
	// Do not initialize more then once.
	return 1;
}

define( 'I18N_VERSION', '0.1' );

if ( defined( 'MEDIAWIKI' ) ) {
	$GLOBALS['wgExtensionCredits']['datavalues'][] = array(
		'path' => __DIR__,
		'name' => 'i18n',
		'version' => I18N_VERSION,
		'author' => array(
			'[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
		),
		'url' => 'https://github.com/JeroenDeDauw/i18n',
		'description' => 'Simple internationalization interface',
	);
}
