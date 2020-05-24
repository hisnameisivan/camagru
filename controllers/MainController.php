<?php

namespace controllers;

class MainController extends Controller
{
	function indexAction()
	{
		$this->view->render('Главная страница');
		// echo 'Главная страница';
	}

	function contactAction()
	{
		echo 'Контакты';
	}
}
