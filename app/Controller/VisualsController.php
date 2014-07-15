<?php
App::uses('AppController', 'Controller');
/**
 * Visuals Controller
 *
 * @property Visual $Visual
 * @property PaginatorComponent $Paginator
 */
class VisualsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

  public function index() {

    $location_all_users = array('controller' => 'users', 'action' => 'all_users');
    $unique_user = array('controller' => 'users', 'action' => 'unique_user');
    $add = array('controller' => 'users', 'action' => 'add');

    $this->set('location_all_users', Router::url($location_all_users));
    $this->set('location_unique_user', Router::url($unique_user));
    $this->set('location_add', Router::url($add));

  }

}
