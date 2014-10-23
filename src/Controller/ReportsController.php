<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reports Controller
 *
 * @property App\Model\Table\ReportsTable $Reports
 */
class ReportsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$query = $this->Reports->find();

		//$results = $query->all()->toArray();
		//$query->hydrate(false);
		//print_r($query->toArray());

		$this->set('reports', $this->paginate($this->Reports));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$report = $this->Reports->get($id, [
			'contain' => []
		]);
		$this->set('report', $report);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$report = $this->Reports->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Reports->save($report)) {
				$this->Flash->success('The report has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The report could not be saved. Please, try again.');
			}
		}
		$this->set(compact('report'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$report = $this->Reports->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$report = $this->Reports->patchEntity($report, $this->request->data);
			if ($this->Reports->save($report)) {
				$this->Flash->success('The report has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The report could not be saved. Please, try again.');
			}
		}
		$this->set(compact('report'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$report = $this->Reports->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Reports->delete($report)) {
			$this->Flash->success('The report has been deleted.');
		} else {
			$this->Flash->error('The report could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}

	public function search(){
		$date = $this->request->data["date"];
		$reports = $this->Reports->selectReportsByDate($date);
		$this->set('reports', $reports);
		$this->render("index");
	}
}
