<?php

use Phalcon\Mvc\Controller;

class ProfileController extends Controller
{
	public function indexAction()
	{

	}

	public function submitAction()
	{
		$name = $this->request->get('name');
		$dob = $this->request->get('dob');
		$bio = $this->get('bio');
		$message = $this->request->get('message');

		$this->view->name = $name;
		$this->view->dob = $dob;
		$this->view->bio = $bio;
		$this->view->message = $message;
	}
}