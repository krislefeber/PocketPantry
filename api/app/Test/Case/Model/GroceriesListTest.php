<?php
App::uses('GroceriesList', 'Model');

/**
 * GroceriesList Test Case
 *
 */
class GroceriesListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.groceries_list'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroceriesList = ClassRegistry::init('GroceriesList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroceriesList);

		parent::tearDown();
	}

}
