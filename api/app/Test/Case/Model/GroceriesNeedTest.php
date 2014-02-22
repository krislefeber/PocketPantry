<?php
App::uses('GroceriesNeed', 'Model');

/**
 * GroceriesNeed Test Case
 *
 */
class GroceriesNeedTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.groceries_need',
		'app.unit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroceriesNeed = ClassRegistry::init('GroceriesNeed');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroceriesNeed);

		parent::tearDown();
	}

}
