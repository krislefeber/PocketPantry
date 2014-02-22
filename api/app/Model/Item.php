<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @property Unit $Unit
 * @property Need $Need
 */
class Item extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Unit' => array(
			'className' => 'Unit',
			'foreignKey' => 'unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Need' => array(
			'className' => 'Need',
			'foreignKey' => 'need_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
