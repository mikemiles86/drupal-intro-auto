<?php

namespace Drupal\my_test_module\Tests;

use Drupal\my_test_module\MyTestService;
use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for MyTestService class.
 */
class MyTestServiceTest extends UnitTestCase {

	/**
	 * Test that set messages can be retrieved.
	 */
	public function testSetMessageIsRetrievable() {

		# Initiate instance to test service class.
		$my_test_service = new MyTestService();
		
		# Create a test message.
		$message = "TEST";

		# Set the message in the service object.
		$my_test_service->setMessage($message);

		# Retrieve stored message from service object.
		$returned_message = $my_test_service->getMessage();

		# Confirm returned message is the same as the original message.
		$this->assertEquals($message, $returned_message);
	}
}
