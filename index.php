<?php
function __autoload($classname){
  $type = explode('_' , $classname);
    switch($type[0]){
      case 'C':
        include_once 'c/' . $classname . '.php';
            break;
      case 'M':
        include_once 'm/' . $classname . '.php';
            break;
      case 'A':
        include_once 'c/a/' . $classname . '.php';
            break;            
    }
}
// Выбор контроллера.
switch ($_GET['c'])
{
  case 'post':
    $controller = new C_Page();
      break;
  case 'reg':
    $controller = new C_Registration();
      break;
  case 'login':
    $controller = new C_Login();
      break; 
  case 'categories':
    $controller = new C_Categories();
      break;          
  default:
    $controller = new C_Welcome();
}
// Выбор контроллера админки
switch ($_GET['a']) {
  case 'admin_panel':
    $controller = new A_Base_admin();
    break;
  case 'red_articles':
    $controller = new A_Articles();
    break;
  case 'ajax_request':
    $controller = new C_Ajax();
    break;  
  case 'upload_files':
    $controller = new A_Images();
    break;  
}
// Обработка запроса.
$controller->Request();
