<?php
/**
 * GroceryFixture
 *
 */
class GroceryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'qty' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'expiration' => array('type' => 'date', 'null' => true, 'default' => null),
		'store_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'location_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'qty' => 1,
			'expiration' => '2014-02-22',
			'store_id' => 1,
			'location_id' => 1
		),
	);

}
