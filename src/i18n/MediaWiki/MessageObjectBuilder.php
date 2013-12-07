<?php

namespace i18n\MediaWiki;

use IContextSource;
use Message;

/**
 * Adapter for the MediaWiki message localization code.
 *
 * Segregates the interface and hides required dependencies.
 * A Message object is returned, so not all design issues are solved by
 * this, and binding to the MediaWiki framework is still present.
 *
 * @since 0.1
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MessageObjectBuilder {

	private $context;
	private $languageType;

	public function __construct( IContextSource $context, $languageType ) {
		$this->context = $context;
		$this->languageType = $languageType;
	}

	/**
	 * @return Message
	 */
	public function msg() {
		$message = call_user_func_array( array( $this->context, 'msg' ), func_get_args() );
		$message->setInterfaceMessageFlag( $this->languageType );
		return $message;
	}

}
