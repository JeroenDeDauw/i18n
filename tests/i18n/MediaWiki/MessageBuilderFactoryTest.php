<?php

namespace Tests\Unit\i18n;

use i18n\MediaWiki\LanguageTypes;
use i18n\MediaWiki\MessageBuilderFactory;

/**
 * @covers i18n\MediaWiki\MessageBuilderFactory
 *
 * @group i18n
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MessageBuilderFactoryTest extends \PHPUnit_Framework_TestCase {

	public function testReturnTypeOfNewMessageBuilder() {
		$factory = new MessageBuilderFactory();

		$returnValue = $factory->newMessageBuilder(
			$this->getMock( 'IContextSource' ),
			LanguageTypes::INTERFACE_LANGUAGE
		);

		$this->assertInstanceOf( 'i18n\MessageBuilder', $returnValue );
	}

	public function testReturnTypeOfNewMessageObjectBuilder() {
		$factory = new MessageBuilderFactory();

		$returnValue = $factory->newMessageObjectBuilder(
			$this->getMock( 'IContextSource' ),
			LanguageTypes::INTERFACE_LANGUAGE
		);

		$this->assertInstanceOf( 'i18n\MediaWiki\MessageObjectBuilder', $returnValue );
	}

}