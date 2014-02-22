<?php
App::uses('Recpy', 'Model');

/**
 * Recpy Test Case
 *
 */
class RecpyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recpy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recpy = ClassRegistry::init('Recpy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recpy);

		parent::tearDown();
	}

}
