<?php
App::uses('Grocery', 'Model');

/**
 * Grocery Test Case
 *
 */
class GroceryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grocery',
		'app.location',
		'app.unit',
		'app.item',
		'app.need'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grocery = ClassRegistry::init('Grocery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grocery);

		parent::tearDown();
	}

}
