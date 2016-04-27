<?php
//
// контроллер для управления данными пользователя
//
class A_Users extends A_Base_admin
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

        //редактируем данные пользователя        
        if (isset($_POST['edit_profile'])) {
           $this->articles->edit_Profile_user($_POST['edit_login'],$_POST['edit_email'],$_POST['edit_role'],$_POST['edit_password'],$_POST['edit_name']);
        }

        //проверяем есть ли у пользователя доступ к данным пользователей
        if(!$this->users->Can('USERS_DATA')){
            header("Location:index.php?c=login");
        }

        //список пользователей
        $this->users = $this->mysqli->Select("SELECT * FROM `users`");

        //данные одного пользователя
        $this->id = intval($_GET['id_user_red']);
        $this->user = $this->mysqli->Select("SELECT * FROM `users` WHERE id_user = {$this->id}");

    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {    
            
        $vars = array('users' =>  $this->users);

        $this->content = $this->View('/admin/tpl_users.php', $vars);


        //передан GET на редактирование данных пользователя          
        if (isset($_GET['id_user_red'])) {
            $vars = array('users' =>  $this->users,
                          'user' => $this->user[0]);

            $this->content = $this->View('/admin/tpl_edit_user.php', $vars);
        }
       
        parent::OnOutput();
    }
}
