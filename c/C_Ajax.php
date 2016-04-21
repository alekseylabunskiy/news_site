<?php
//
// Конттроллер перехвата ajax запросов.
//
class C_Ajax extends C_Base 
{

    function __construct() 
    {
        parent::__construct();
    }

    protected function OnInput() 
    {
      parent::OnInput();

        $articles = M_Articles::Instance();
        //Поиск новостей
        if ($_POST['search_words'] != '') {
            $this->search = $articles->SearchArt('id',$_POST['search_words']);
        }
        if ($_POST['search_title'] != '') {
            $this->search = $articles->SearchArt('title',$_POST['search_title']);
        }
        if ($_POST['search_content'] != '') {
            $this->search = $articles->SearchArt('content',$_POST['search_content']);
        }
        if ($_POST['search_create_at'] != '') {
            $this->search = $articles->SearchArt('create_at',$_POST['search_create_at']);
        }
        if ($_POST['search_update_at'] != '') {
            $this->search = $articles->SearchArt('update_at',$_POST['search_update_at']);
        }
        if ($_POST['search_category'] != '') {
            $this->search = $articles->SearchArt('category',$_POST['search_category']);
        }
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {       
        // Генерация содержимого страницы Welcome.
        $vars = array('articles' => $this->search);

        $page = $this->View('tpl_ajax.php', $vars);
        
        echo $page;
    }
}
