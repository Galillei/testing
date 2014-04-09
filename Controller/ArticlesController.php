<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 29.10.12
 * Time: 9:47
 * To change this template use File | Settings | File Templates.
 */
namespace Controller;
use \Model\Article; //использование глобального имени Model\Article как Article т.е при вызове Article вызывается класс Model/Article
class ArticlesController extends \Library\Controller
{
    public function viewAction($arg1)
    {

        $articles = Article::find($arg1['id']);//вызывает статический метод класса \Model\Article findAll
        $this->renderView(array('articles'=>$articles), 'article.php');
    }
    public function tableAction()
    {
        $this->renderView(array(), 'table.php');
    }

    public function formAction()
    {
        $this->renderView(array(), 'form.php');
    }
    public function DBf()
    {//FrontController\::getInstance()->getDbConection()
    }
    
}
