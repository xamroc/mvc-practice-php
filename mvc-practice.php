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
		return '<a href="mvc-practice.php?action=textClicked">' . $this->model->text . '</a>';
	}
}

class Controller {
	private $model;

	public function __construct(Model $model) {
		$this->model = $model;
	}

	public function textClicked() {
		$this->model->text = 'Goodbye Cruel World!';
	}
}

//Start MVC
$model = new Model();

$controller = new Controller($model);
$view = new View($controller, $model);
if (isset($_GET['action'])) $controller->{$_GET['action']}();
echo $view->output();

?>
