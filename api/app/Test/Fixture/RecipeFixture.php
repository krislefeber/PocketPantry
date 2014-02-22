<?php
/**
 * RecipeFixture
 *
 */
class RecipeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => true, 'default' => null),
		'recipe' => array('type' => 'integer', 'null' => true, 'default' => null),
		'multiplier' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '9,2'),
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
			'date' => '2014-02-22',
			'recipe' => 1,
			'multiplier' => 1
		),
	);

}
