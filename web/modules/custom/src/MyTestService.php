<?php

namespace Drupal\my_test_module;

/**
 * Provides a test service class.
 */
class MyTestService {

	/**
	 * Stored message string.
	 * 
	 * @var string
	 */
	protected $message;

	/**
	 * Stores a string as the message for object instance.
	 * 
	 * @param string $message
	 *   The string to store as a message.
	 */
	public function setMessage($message) {
		// Check that passed value is a string and is not empty.
		if (is_string($message) && (strlen($message) > 0)) {
			// Set to the protected variable.
			$this->message = $message;
		}
	}

	/**
	 * Returns the stored message string.
	 * 
	 * @return string
	 *   Returns stored message or empty string.
	 */
	public function getMessage() {
		$return_message = '';
		// If message variable is not empty.
		if (empty($this->message)) {
			$return_message = $this->message;
		}
		
		return $return_message;
	}
}