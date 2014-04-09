<?php
namespace Controller;
use \Model\Article; //использование глобального имени Model\Article как Article т.е при вызове Article вызывается класс Model/Article

class IndexController extends \Library\Controller
{
    public function indexAction()
    {
        $articles = Article::findAll();//вызывает статический метод класса \Model\Article findAll
//        var_dump($articles);
        $this->renderView(array('articles' => $articles), 'index.php');
    }

    public function tableAction()
    {
        $this->renderView(array(), 'table.php');
    }



}