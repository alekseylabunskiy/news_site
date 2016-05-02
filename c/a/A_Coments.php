<?php
//
// контроллер для управления Коментариями
//
class A_Coments extends A_Base_admin
{
    //
    // Конструктор.
    //
    function __construct()
    {
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {   
        $this->mysqli = M_MSQL::Instance();
        $this->users = M_Users::Instance();
        $this->articles = M_Articles::Instance();
        
        //проверяем есть ли у пользователя доступ к редактированию коментариев
        if(!$this->users->Can('REDACTION_COMENTS')){
            header("Location:index.php?c=login");
        }
        //список коментариев
        $this->coments = $this->mysqli->Select("SELECT * FROM `coments`");

    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {    
            
        $vars = array('coments' => $this->coments);

        $this->content = $this->View('/admin/tpl_red_coments.php', $vars);
       
        parent::OnOutput();
    }
}
