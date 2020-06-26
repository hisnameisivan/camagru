<?php

namespace controllers;

use db\Db;

class MainController extends Controller
{
    function indexAction()
    {
        // $result = $this->model->getNews();
        // $vars = [
        //     'news' => $result,
        // ];

        // $this->view->render('Главная страница', $vars);
        $this->view->render('Camagru - Instagram and Snapchat killer');
        // уходит в model
        // $db = new Db();
        // $db->query('select * from test_table');
        // echo 'Главная страница';
    }

    function contactAction()
    {
        echo 'Контакты';
    }
}
