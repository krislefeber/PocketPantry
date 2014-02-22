<?php
App::uses('AppController', 'Controller');
/**
 * Groceries Controller
 *
 * @property Grocery $Grocery
 * @property PaginatorComponent $Paginator
 */
class GroceriesController extends AppController {

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
		$this->Grocery->recursive = 0;
		$this->set('groceries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grocery->exists($id)) {
			throw new NotFoundException(__('Invalid grocery'));
		}
		$options = array('conditions' => array('Grocery.' . $this->Grocery->primaryKey => $id));
		$this->set('grocery', $this->Grocery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grocery->create();
			if ($this->Grocery->save($this->request->data)) {
				$this->Session->setFlash(__('The grocery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grocery could not be saved. Please, try again.'));
			}
		}
		$stores = $this->Grocery->Store->find('list');
		$locations = $this->Grocery->Location->find('list');
		$needs = $this->Grocery->Need->find('list');
		$this->set(compact('stores', 'locations', 'needs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Grocery->exists($id)) {
			throw new NotFoundException(__('Invalid grocery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grocery->save($this->request->data)) {
				$this->Session->setFlash(__('The grocery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grocery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grocery.' . $this->Grocery->primaryKey => $id));
			$this->request->data = $this->Grocery->find('first', $options);
		}
		$stores = $this->Grocery->Store->find('list');
		$locations = $this->Grocery->Location->find('list');
		$needs = $this->Grocery->Need->find('list');
		$this->set(compact('stores', 'locations', 'needs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Grocery->id = $id;
		if (!$this->Grocery->exists()) {
			throw new NotFoundException(__('Invalid grocery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Grocery->delete()) {
			$this->Session->setFlash(__('The grocery has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grocery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
