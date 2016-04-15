<?php
//
// контроллер для управления контентом статей
//
class A_Articles extends A_Base_admin
{
    protected $needLogin;   // необходимость авторизации 
    protected $user;        // авторизованный пользователь
    private $start_time;    // время начала генерации страницы
    
    //
    // Конструктор.
    //
    function __construct()
    {
        parent::__construct();

        $this->articles = M_Articles::Instance();
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {
        parent::OnInput();
    
        //вносим изменения в статью
        if (isset($_POST['edit_article'])) {
            $obj = ['title'=> $this->articles->Clean($_POST['edit_title']),
                    'content' => $this->articles->Clean($_POST['edit_content']),
                    'image' => $this->articles->Clean($_POST['edit_image']),
                    'update_at' => date("Y-m-d H:i:s"),
                    'category' => $this->articles->Clean($_POST['edit_category']), 
            ];
            $id = $this->articles->Clean($_GET['id_red']);
            $this->update = $this->articles->UpdateArticles('articles',$obj,$id);
         } 
        //удаляем статью
        if (isset($_GET['delete'])) {
            $id = $this->articles->Clean($_GET['delete']);
            $this->articles->DeleteArticles($id);
         } 
        //одна статья
        if (isset($_GET['id_red']) && $_GET['id_red'] !=null) {
            $this->one = $this->articles->getOneArticle('articles',$_GET['id_red']);
        } 
        $this->list = $this->articles->getArticles('articles',100);  
    }
  //
  // Виртуальный генератор HTML.
  //
    protected function OnOutput() 
    {       
        // Генерация содержимого страницы.
        $vars = array('articles' => $this->list);

        $this->content = $this->View('/admin/tpl_articles.php', $vars);
        //если передан GET на редактирование статьи 
        if (isset($_GET['id_red'])) {
            
            $vars = array('article' => $this->one[0]);

            $this->content = $this->View('/admin/tpl_edit_articles.php', $vars);
        }

        // C_Base.
        parent::OnOutput();
    }
}
