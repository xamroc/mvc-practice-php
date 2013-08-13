<?php

class Model {
	public function __construct() {
		$this->text = 'Hello World';	
	}	

}

class View {
	private $model;
	private $controller;

	public function __construct(Controller $controller, Model $model) {
		$this->controller = $controller;
		$this->model = $model;
	}
	
	public function output() {
		return '<h3>' . $this->model->text . '</h3>';
	}
}

class Controller {
	private $model;

	public function __construct(Model $model) {
		$this->model = $model;
	}
}

?>
