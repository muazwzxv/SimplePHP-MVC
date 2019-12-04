<?php

class HomeController extends Controller{

	public function renderView($route = 'index'){
		parent::createView($route);
	}	
}

?>
