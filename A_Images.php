<?php
//
// контроллер для управления изображениями
//
class A_Images extends A_Base_admin
{
    //
    // Конструктор.
    //
    function __construct()
    {
        $this->mysqli = M_MSQL::Instance();
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {
        parent::OnInput();
        
        if (isset($_POST['confirm_input_file']) && isset($_FILES['filename']['tmp_name'])) {
            
            $this->image = new M_Image();

            //сохраняем
            $sizes = array(
                '458' => array('width' => 458, 'height' => 335),
                '282' => array('width' => 282, 'height' => 211),
                '216' => array('width' => 216, 'height' => 164),
                '120' => array('width' => 120, 'height' => 90),
                '86' => array('width' => 86, 'height' => 60),
            );
            $this->foto = $this->image->SaveResized($sizes,'v/content_Images/images/');
            //записываем имя фото в базу данных

            $this->mysqli->Insert('images',['name'=>$this->foto]);

            if ($this->foto) {
               $this->message_succsess = 'Фото загружено удачно';
            }
            if (!$this->foto) {
               $this->message_erorr = 'Фото не было загружено';
            }
        }
    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   
        // Генерация содержимого страницы.
        $vars = array('message_succsess' =>$this->message_succsess,'message_error' =>$this->message_erorr);

        $this->content = $this->View('/admin/tpl_upload_files.php', $vars);
        parent::OnOutput();
    }
}