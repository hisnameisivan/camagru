<?php

namespace controllers;

class AccountController extends Controller
{
	function loginAction()
	{
		$this->view->render('Страница входа');
		// echo 'Страница входа';
	}

	function registerAction()
	{
		// $this->view->layout = 'custom'; // подключение custom.php-шаблона для страницы регистрации
		if (!empty($_POST)) {
			die(json_encode(['status' => 'success', 'message' => 'success']));
		}
		$this->view->render('Страница регистрации');
		// echo 'Страница регистрации';
	}
}
