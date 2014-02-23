<?php
App::uses('AppController', 'Controller');
/**
 * Plans Controller
 *
 * @property Plan $Plan
 * @property PaginatorComponent $Paginator
 */
class PlansController extends AppController {

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
		$this->Plan->recursive = 0;
		$this->set('plans', $this->Paginator->paginate());
		$this->set('plansAll', $this->Plan->find('all'));
		$this->set('_serialize', array('plansAll'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		$this->Plan->recursive = 2;
		$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
		$this->set('plan', $this->Plan->find('first', $options));
		$this->set('_serialize', array('plan'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plan->create();
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		}
	}

/**
 * json add method
 *
 * @return void
 */
	public function jsonAdd() {
		$status = array(
			'status' => 'Failure',
			'id' => ''
		);
		if ($this->request->is('post')) {
			$this->Plan->create();
			if ($this->Plan->save($this->request->data)) {
				$status['status'] = 'Success';
				$status['id'] = $this->Plan->id;
			}
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
			$this->request->data = $this->Plan->find('first', $options);
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
		$this->Plan->id = $id;
		if (!$this->Plan->exists()) {
			throw new NotFoundException(__('Invalid plan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Plan->delete()) {
			$this->Session->setFlash(__('The plan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function jsonDelete($id = null) {
		$status = array('status' => 'Failure');
		$this->Plan->id = $id;
		$this->request->onlyAllow('post', 'delete');
		if ($this->Plan->delete()) {
			$status['status'] = 'Success';
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}}
