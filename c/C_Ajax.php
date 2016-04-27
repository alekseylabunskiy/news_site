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
        $this->msqli = M_MSQL::Instance();
        $this->user = M_Users::Instance();
        $this->coments = M_Coments::Instance();
        //запрос на поиск юзера
        if ($_POST['search_id_user'] != '') {
             $this->users = $articles->SearchArt('users','id_user',$_POST['search_id_user']);
        }
        if ($_POST['search_login_user'] != '') {
             $this->users = $articles->SearchArt('users','login',$_POST['search_login_user']);
        }
        if ($_POST['search_email_user'] != '') {
             $this->users = $articles->SearchArt('users','email',$_POST['search_email_user']);
        }
        if ($_POST['search_role_user'] != '') {
             $this->users = $articles->SearchArt('users','id_role',$_POST['search_role_user']);
        }
        if ($_POST['search_name_user'] != '') {
             $this->users = $articles->SearchArt('users','name',$_POST['search_name_user']);
        }
    

        //если передан POST на показ новых коментариев
        if(isset($_POST['id_art'])){
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
            //одна статья
            $this->art = $articles->getOneArticle('articles',$this->get);
            //устанавливаем значение строчки "коментарии"
            $this->com = $articles->stringComent($this->art[0]['count_coments']);
            //коментарии к статье
            $this->coment = $this->coments->getComentsToArt($this->get);
        }
        //Поиск изображений в Админке
        if (isset($_POST['search_image'])) {
            $im = $_POST['search_image']; 
            $this->image = $this->msqli->Select("SELECT * FROM images WHERE name = '{$im}'");
        }

        //Поиск новостей
        if ($_POST['search_words'] != '') {
            $this->search = $articles->SearchArt('articles','id',$_POST['search_words']);
        }
        if ($_POST['search_title'] != '') {
            $this->search = $articles->SearchArt('articles','title',$_POST['search_title']);
        }
        if ($_POST['search_content'] != '') {
            $this->search = $articles->SearchArt('articles','content',$_POST['search_content']);
        }
        if ($_POST['search_create_at'] != '') {
            $this->search = $articles->SearchArt('articles','create_at',$_POST['search_create_at']);
        }
        if ($_POST['search_update_at'] != '') {
            $this->search = $articles->SearchArt('articles','update_at',$_POST['search_update_at']);
        }
        if ($_POST['search_category'] != '') {
            $this->search = $articles->SearchArt('articles','category',$_POST['search_category']);
        }
    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   
        if (isset($_POST['search_id_user']) || isset($_POST['search_login_user']) || isset($_POST['search_email_user']) || $_POST['search_role_user'] || $_POST['search_name_user']) {
            // Генерация содержимого страницы .
            $vars = array('users' => $this->users);

                $page = $this->View('/admin/tpl_search_user.php', $vars);
            
            echo $page;    
        }
        if(isset($_POST['id_art'])){
            // Генерация содержимого страницы .
            $vars = array('coments' => $this->coment,
                          'article' => $this->art[0],
                          'description_count_com' =>$this->com);

                $page = $this->View('tpl_post_comment.php', $vars);
            
            echo $page;
        }

        if (isset($_POST['search_words']) || isset($_POST['search_title']) || isset($_POST['search_content']) || isset($_POST['search_create_at']) || isset($_POST['search_update_at']) || isset($_POST['search_category'])) {
            // Генерация содержимого страницы.
            $vars = array('articles' => $this->search);

            $page = $this->View('tpl_ajax.php', $vars);
        
            echo $page;
        }

        if (isset($_POST['search_image'])) {
            // Генерация содержимого страницы 
            $vars = array('image' => $this->image[0]);

            $page = $this->View('/admin/tpl_search_image.php', $vars);
        
            echo $page;
        }
    }
}
