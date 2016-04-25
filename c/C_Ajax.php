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
        $this->user = M_Users::Instance();
        $this->coments = M_Coments::Instance();

        //текущий пользователь
        $this->current_user = $this->user->Get();
        //айди статьи
        $this->get = $_POST['id_art'];
        //добавляем коментарии в базу

        if ($this->current_user != null) {
            $id_user = $this->current_user['id_user'];
            $id_article = $this->get;
            $text = $_POST['message'];
            if (!empty($text)) {
               $this->coments->addComment($id_user,$id_article,$text);
            }           
        }
        else{
            $this->alert = 'Авторизуйтесь для того что бы оставлять коментарии.';
        }

        //коментарии к статье
        $this->coment = $this->coments->getComentsToArt($this->get);

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
            $vars = array('coments' => $this->coment,);

                $page = $this->View('tpl_post_comment.php', $vars);
            
            echo $page;
        if (!isset($_POST['message'])) {
            // Генерация содержимого страницы Welcome.
            $vars = array('articles' => $this->search);

            $page = $this->View('tpl_ajax.php', $vars);
        
            echo $page;
        }
    }
}
