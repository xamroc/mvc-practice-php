<?php

class Model {
	public function __construct() {
		
	}	

}

class View {
	private $model;
	private $controller;

	public function __construct(Controller $controller, Model $model) {

	}
}

class Controller {
	private $model;

	public function __construct(Model $model) {

	}
}

?>
