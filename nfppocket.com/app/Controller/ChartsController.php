<?php
class ChartsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session', 'Cache');
    public $components = array('Session');
    public $paginate = array(
        'limit' => 10000,
        'maxLimit' => 100000,
        'order' => array(
            'Chart.created' => 'asc'
        )
    );

    public function index() {
    	//$user_id = $this->Auth->user('id');
        //$this->set('charts', $this->Chart->findAllByUserId($user_id));
        $this->set('charts', $this->paginate('Chart', array('user_id'=>$this->Auth->user('id'))));
        
        $un = $this->Auth->user('username');
		$this->set("username",$un);
		
		
	//	$prev_bleeding = $this->Chart->find('all', array(
	//		 'conditions' => array('Charts.id' => $id),
	//		 'fields' => array('Charts.any_bleeding'),
	//		 'order' => array('Charts.created DESC'),
	//		 'limit' => 1
	//		)
	//	);
	//	$this->set('prevbleed',$prev_bleeding);
		
	//	$currentCreatedDate = $chart['Chart']['created']
	//	$prev_bleeding = $this->query(
	//		SELECT any_bleeding
	//		FROM charts 
	//		WHERE created < $currentCreatedDate AND id = $id
	//		ORDER BY created DESC 
	//		LIMIT 1;);
	//	$this->set('prev_bleeding',$prev_bleeding);
    }
    
    public function welcome() {
    	
    }
    
    public function listview() {
    	$this->set('charts', $this->paginate('Chart', array('user_id'=>$this->Auth->user('id'))));
        $un = $this->Auth->user('username');
		$this->set("username",$un);
    }
    
    public function scrollview() {
    	$this->set('charts', $this->paginate('Chart', array('user_id'=>$this->Auth->user('id'))));
        $un = $this->Auth->user('username');
		$this->set("username",$un);
		
		//$id = $this->Auth->user('id');
		//$neighbors = $this->Chart->find('neighbors');
		//$this->set("prevnext",$neighbors);
	}
	
	public function fullchart() {
		$this->set('charts', $this->paginate('Chart', array('user_id'=>$this->Auth->user('id'))));
        $un = $this->Auth->user('username');
		$this->set("username",$un);
	}
    
    public function about() {
    	
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid chart entry'));
        }

        $chart = $this->Chart->findById($id);
        if (!$chart) {
            throw new NotFoundException(__('Invalid chart entry'));
        }
        $this->set('chart', $chart);
    }
    
	public function add() {
    	if ($this->request->is('post')) {
        	$this->request->data['Chart']['user_id'] = $this->Auth->user('id'); //Added this line
        if ($this->Chart->saveAll($this->request->data)) {
            $this->Session->setFlash(__('Your chart entry has been saved.'));
            return $this->redirect(array('action' => 'index'));
        }
    	}
	}
    
    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid chart entry'));
    }

    $chart = $this->Chart->findById($id);
    if (!$chart) {
        throw new NotFoundException(__('Invalid chart entry'));
    }

    if ($this->request->is('post') || $this->request->is('put')) {
        $this->Chart->id = $id;
        if ($this->Chart->save($this->request->data)) {
            $this->Session->setFlash(__('Your chart entry has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your chart entry.'));
    }

    if (!$this->request->data) {
        $this->request->data = $chart;
    }
	}
	
	public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Chart->delete($id)) {
        $this->Session->setFlash(__('The chart entry has been deleted.', h($id)));
        $this->redirect(array('action' => 'index'));
    }
	}
}