<?php

namespace i18n;

/**
 * @since 0.1
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface MessageBuilder {

	/**
	 * @param string $messageKey
	 *
	 * @return string
	 */
	public function msgText( $messageKey /* message arguments */ );

}