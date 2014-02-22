<?php
App::uses('AppController', 'Controller');
/**
 * GroceriesNeeds Controller
 *
 * @property GroceriesNeed $GroceriesNeed
 * @property PaginatorComponent $Paginator
 */
class GroceriesNeedsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GroceriesNeed->recursive = 0;
		$this->set('groceriesNeeds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GroceriesNeed->exists($id)) {
			throw new NotFoundException(__('Invalid groceries need'));
		}
		$options = array('conditions' => array('GroceriesNeed.' . $this->GroceriesNeed->primaryKey => $id));
		$this->set('groceriesNeed', $this->GroceriesNeed->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GroceriesNeed->create();
			if ($this->GroceriesNeed->save($this->request->data)) {
				$this->Session->setFlash(__('The groceries need has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groceries need could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GroceriesNeed->exists($id)) {
			throw new NotFoundException(__('Invalid groceries need'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GroceriesNeed->save($this->request->data)) {
				$this->Session->setFlash(__('The groceries need has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groceries need could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroceriesNeed.' . $this->GroceriesNeed->primaryKey => $id));
			$this->request->data = $this->GroceriesNeed->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GroceriesNeed->id = $id;
		if (!$this->GroceriesNeed->exists()) {
			throw new NotFoundException(__('Invalid groceries need'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GroceriesNeed->delete()) {
			$this->Session->setFlash(__('The groceries need has been deleted.'));
		} else {
			$this->Session->setFlash(__('The groceries need could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
