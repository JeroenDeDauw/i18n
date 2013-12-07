<?php

namespace Tests\Unit\i18n;

use i18n\MediaWiki\LanguageTypes;
use i18n\MediaWiki\MessageObjectBuilder;
use PHPUnit_Framework_MockObject_Matcher_Parameters;

/**
 * @covers i18n\MediaWiki\MessageObjectBuilder
 *
 * @group i18n
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MessageObjectBuilderTest extends \PHPUnit_Framework_TestCase {

	public function msgProvider() {
		return array(
			array(
				LanguageTypes::CONTENT_LANGUAGE,
				array(),
			),
			array(
				LanguageTypes::CONTENT_LANGUAGE,
				array(
					'foo',
					false,
					array( 'bar' )
				),
			),
			array(
				LanguageTypes::INTERFACE_LANGUAGE,
				array(
					'foo'
				),
			),
		);
	}

	private $someMessageArguments;
	private $languageType;

	/**
	 * @dataProvider msgProvider
	 */
	public function testCallsMsgOnContext( $languageType, array $someMessageArguments ) {
		$this->someMessageArguments = $someMessageArguments;
		$this->languageType = $languageType;

		$message = $this->newMockMessage();

		$actualMessage = call_user_func_array(
			array(
				$this->newMessageBuilder( $message ),
				'msg'
			),
			$someMessageArguments
		);

		$this->assertEquals( $message, $actualMessage );
	}

	protected function newMessageBuilder( $message ) {
		$messageBuilder = new MessageObjectBuilder(
			$this->newMockContext( $message, $this->someMessageArguments ),
			$this->languageType
		);

		return $messageBuilder;
	}

	protected function newMockMessage() {
		$message = $this->getMockBuilder( 'Message' )->disableOriginalConstructor()->getMock();

		$message->expects( $this->once() )
			->method( 'setInterfaceMessageFlag' )
			->with( $this->equalTo( $this->languageType ) );

		return $message;
	}

	protected function newMockContext( $message ) {
		$context = $this->getMock( 'IContextSource' );

		$invocationMocker = $context->expects( $this->once() )
			->method( 'msg' )
			->will( $this->returnValue( $message ) );

		// This is somewhat of a hack, pending a better approach.
		// http://stackoverflow.com/questions/20078008/expecting-a-variable-list-of-arguments-in-phpunit
		$invocationMocker->getMatcher()->parametersMatcher
			= new PHPUnit_Framework_MockObject_Matcher_Parameters( $this->someMessageArguments );

		return $context;
	}

}
