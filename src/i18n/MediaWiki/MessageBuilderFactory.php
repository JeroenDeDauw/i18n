<?php

namespace i18n\MediaWiki;

use i18n\MessageBuilder;
use IContextSource;

/**
 * Factory for construction of message building objects specific to MediaWiki.
 *
 * @since 0.1
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MessageBuilderFactory {

	/**
	 * @since 0.1
	 *
	 * @param IContextSource $context
	 * @param string $languageType
	 *
	 * @return MessageBuilder
	 */
	public function newMessageBuilder( IContextSource $context, $languageType ) {
		return new MessageTextBuilder( $this->newMessageObjectBuilder(
			$context,
			$languageType
		) );
	}

	/**
	 * @since 0.1
	 *
	 * @param IContextSource $context
	 * @param string $languageType
	 *
	 * @return MessageObjectBuilder
	 */
	public function newMessageObjectBuilder( IContextSource $context, $languageType ) {
		return new MessageObjectBuilder( $context, $languageType );
	}

}
