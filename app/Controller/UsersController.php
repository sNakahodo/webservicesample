<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

  public function beforeFilter() {
    $this->layout = 'ajax';
    $this->autoRender = false;
  }

  public function index() {

    $result = array('message' => 'welcome');

    $this->response->body(json_encode($result));
  
  }

  public function all_users() {

    $result = array();

    $data = $this->User->find('all');

    $result['status'] = 'success';
    $result['data'] = json_encode($data);

    $this->response->body(json_encode($result));

  }

  public function unique_user($user_id = null) {

    $result = array();

    if (!$user_id) {

      $result['status'] = 'error';
      $result['message'] = 'bad access - user id is not specified';

    } else {

      $options = array('conditions' => array('id' => $user_id));
      $data = $this->User->find('first', $options);

      if (!$data) {
        $result['status'] = 'error';
        $result['message'] = 'no data found';
      } else {
        $result['status'] = 'success';
        $result['data'] = json_encode($data);
      }

    }

    $this->response->body(json_encode($result));

  }

  public function add() {

    $result = array();

    if (!$this->request->isPost()) {

      $result['status'] = 'error';
      $result['message'] = 'bad access - the request must be made with POST';

    } else {

      $params = array(
        'name' => $this->request->data('name'),
        'phone' => $this->request->data('phone'),
        'email' => $this->request->data('email'),
      );

      $res = $this->User->save($params);

      if (!$res) {
        $result['status'] = 'error';
        $result['message'] = json_encode($res);
      } else {
        $result['status'] = 'success';
        $result['data'] = json_encode($res);
      }

    }

    $this->response->body(json_encode($result));

  }

}
