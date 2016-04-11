<?php
//
// Контроллер страницы авторизации
//
class C_Registration extends C_Base
{
    public function __construct() 
    {
        parent::__construct();          
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() 
    {
        // Выход из системы пользователя.
        $mUsers = M_Users::Instance();        
        $mUsers->Logout();
        
        
        // C_Base.
        parent::OnInput();
        
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {    
        // Генерация содержимого формы входа.
        $vars = array();        
        $this->content = $this->View('tpl_registration.php', $vars);
        
        // C_Base.
        parent::OnOutput();
    }
}

