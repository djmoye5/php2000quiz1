<?php

use Phalcon\Mvc\Controller;

class HomeController extends Controller
{
	public function indexAction()
	{
		$this->response->redirect('home');
	}
}