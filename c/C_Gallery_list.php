<?php
//
// Контроллер страницы с одной новостью 
//
class C_Gallery_list extends C_Base 
{
    function __construct() 
    {
        parent::__construct();
    }

    protected function OnInput() 
    {
        parent::OnInput();

        
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {       
        // Генерация содержимого страницы C_Page.
        $vars = array();
        
        $this->content = $this->View('tpl_gallery_list.php', $vars);

        // C_Base.
        parent::OnOutput();
    }
}