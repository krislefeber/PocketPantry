<?php
App::uses('Need', 'Model');

/**
 * Need Test Case
 *
 */
class NeedTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.need',
		'app.item',
		'app.unit',
		'app.grocery',
		'app.location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Need = ClassRegistry::init('Need');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Need);

		parent::tearDown();
	}

}
