<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property App\Model\Table\EmployeesTable $Employees
 */
class EmployeesController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('employees', $this->paginate($this->Employees));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$employee = $this->Employees->get($id, [
			'contain' => []
		]);
		$this->set('employee', $employee);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$employee = $this->Employees->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Employees->save($employee)) {
				$this->Flash->success('The employee has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The employee could not be saved. Please, try again.');
			}
		}
		$this->set(compact('employee'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$employee = $this->Employees->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$employee = $this->Employees->patchEntity($employee, $this->request->data);
			if ($this->Employees->save($employee)) {
				$this->Flash->success('The employee has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The employee could not be saved. Please, try again.');
			}
		}
		$this->set(compact('employee'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$employee = $this->Employees->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Employees->delete($employee)) {
			$this->Flash->success('The employee has been deleted.');
		} else {
			$this->Flash->error('The employee could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
