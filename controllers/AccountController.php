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
		$this->view->render('Страница регистрации');
		// echo 'Страница регистрации';
	}
}
